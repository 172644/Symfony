<?php

namespace OC\PlatformBundle\Controller;

use OC\PlatformBundle\Form\ApplicationType;
use Symfony\Component\HttpKernel\Exception\NotFoundHttpException;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\JsonResponse;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\HttpFoundation\Request;
use OC\PlatformBundle\Entity\Advert;
use OC\PlatformBundle\Entity\Image;
use OC\PlatformBundle\Entity\Application;
use OC\UserBundle\Entity\User;
use OC\PlatformBundle\Entity\Category;
use OC\PlatformBundle\Entity\AdvertSkill;
use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\ORM\Mapping as ORM;
use OC\PlatformBundle\Form\AdvertType;
use OC\PlatformBundle\Form\AdvertEditType;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Security;
use OC\PlatformBundle\Event\PlatformEvents;
use OC\PlatformBundle\Event\MessagePostEvent;

class AdvertController extends Controller
{
    public function translationAction($name)
    {
        return $this->render('OCPlatformBundle:Advert:translation.html.twig', array(
            'name' => $name
        ));
    }

    ///////////////////////////////////////////////////////////////////////////////////

    public function indexAction($page = 1, Request $request)
    {
        //dump($this->get('kernel')->getEnvironment());
        if ($page < 1)
        {
            $session = $request->getSession();
            $session->getFlashBag()->add('info', "'Page \"'.$page.'\" inexistante.'");
            return $this->redirectToRoute('oc_platform_home');
        }
        $nbPerPage = 10;
        $em = $this->getDoctrine()->getManager();
        $listAdverts = $em->getRepository('OCPlatformBundle:Advert')->getAdverts($page, $nbPerPage);

        $nbPages = ceil(count($listAdverts) / $nbPerPage);

        if ($page > $nbPages)
        {
            $session = $request->getSession();
            $session->getFlashBag()->add('info', "'Page \"'.$page.'\" inexistante.'");
            return $this->redirectToRoute('oc_platform_home');
        }

        return $this->render('OCPlatformBundle:Advert:index.html.twig', array(
            'nbPages'     => $nbPages,
            'page'        => $page,
            'listAdverts' => $listAdverts
        ));
    }
    ///////////////////////////////////////////////////////////////////////////////////

    public function purgeAction($day = 60)
    {
        $service = $this->container->get('oc_platform.service.deleteAdvert');
        $listAdverts = $service->purge($day);

        return $this->redirectToRoute('oc_platform_home');
        //return var_dump($listAdverts);
    }

    ///////////////////////////////////////////////////////////////////////////////////

    public function viewAction(Advert $advert, $id, Request $request)
    {
        $em = $this->getDoctrine()->getManager();
        /*$advert = $em->getRepository('OCPlatformBundle:Advert')->find($id);

        if (null === $advert) {

            $session = $request->getSession();
            $session->getFlashBag()->add('info', "L'annonce d'id ".$id." n'existe pas.");
            return $this->redirectToRoute('oc_platform_home');

            //throw new NotFoundHttpException("L'annonce d'id ".$id." n'existe pas.");
        }*/

        $app = new Application();
        $app->setAuthor($this->getUser());
        $app->setAdvert($advert);
        $form   = $this->get('form.factory')->create(ApplicationType::class, $app);

        if ($request->isMethod('POST') && $form->handleRequest($request)->isValid())
        {
            $em = $this->getDoctrine()->getManager();
            $em->persist($app);
            $em->flush();

            $request->getSession()->getFlashBag()->add('notice', 'Annonce bien enregistrée.');

            return $this->redirectToRoute('oc_platform_view', array('id' => $advert->getId()));
        }


        $listApplications = $em->getRepository('OCPlatformBundle:Application')->findBy(array('advert' => $advert));
        $listAdvertSkill = $em->getRepository('OCPlatformBundle:AdvertSkill')->findBy(array('advert' => $advert));


        return $this->render('OCPlatformBundle:Advert:view.html.twig', array(
            'application' => $app,
            'form' => $form->createView(),
            'advert'            => $advert,
            'listAdvertSkill'  => $listAdvertSkill,
            'listApplications'  => $listApplications,
            'date'              => date_default_timezone_get()
        ));
    }

    ///////////////////////////////////////////////////////////////////////////////////

    /*
     * @Security("has_role('ROLE_AUTEUR')")
     */
    public function addAction(Request $request)
    {
        $em = $this->getDoctrine()->getManager();
        $advert = new Advert();
        $user = $em->getRepository("OCUserBundle:User")->findOneBy(array('username' => $this->getUser()->getUsername()));
        $advert->setAuthor($user);
        $categories = $em->getRepository('OCPlatformBundle:Category')->findAll();
        $form = $this->createForm(AdvertType::class, $advert, ['entityManager' => $categories]);

        if ($request->isMethod('POST') && $form->handleRequest($request)->isValid())
        {

            $event = new MessagePostEvent($advert->getContent(), $advert->getAuthor());
            $this->get('event_dispatcher')->dispatch(PlatformEvents::POST_MESSAGE, $event);
            $advert->setContent($event->getMessage());

            $advert->setAuthor($em->getRepository("OCUserBundle:User")->findOneBy(array('username' => $this->getUser()->getUsername())));

            $em->persist($advert);
            $em->flush();

            $request->getSession()->getFlashBag()->add('notice', 'Annonce bien enregistrée.');

            return $this->redirectToRoute('oc_platform_view', array('id' => $advert->getId()));
        }

        return $this->render('OCPlatformBundle:Advert:add.html.twig', array(
            'advert' => $advert,
            'form' => $form->createView(),
        ));
    }

    ///////////////////////////////////////////////////////////////////////////////////

    public function editAction($id, Request $request)
    {
        $em = $this->getDoctrine()->getManager();
        $advert = $em->getRepository('OCPlatformBundle:Advert')->find($id);
        $categories = $em->getRepository('OCPlatformBundle:Category')->findAll();

        if (null === $advert)
        {
            $session = $request->getSession();
            $session->getFlashBag()->add('info', "L'annonce d'id ".$id." n'existe pas.");
            return $this->redirectToRoute('oc_platform_home');
        }

        $form = $this->createForm(AdvertEditType::class, $advert, ['entityManager' => $categories]);



        if ($request->isMethod('POST') && $form->handleRequest($request)->isValid())
        {
            //$em->remove($em->getRepository('OCPlatformBundle:Advert')->find($id));
            $em->merge($form->getData());
            $em->flush();
            $request->getSession()->getFlashBag()->add('notice', 'Annonce bien modifiée.');
            return $this->redirectToRoute('oc_platform_view', array('id' => $advert->getId()));
        }

        return $this->render('OCPlatformBundle:Advert:edit.html.twig', array(
            'advert' => $advert,
            'form' => $form->createView(),
        ));
    }

    ///////////////////////////////////////////////////////////////////////////////////

    public function deleteAction($id, Request $request)
    {
        $em = $this->getDoctrine()->getManager();

        $advert = $em->getRepository('OCPlatformBundle:Advert')->find($id);

        if (null === $advert)
        {
            $session = $request->getSession();
            $session->getFlashBag()->add('info', "L'annonce d'id ".$id." n'existe pas.");
            return $this->redirectToRoute('oc_platform_home');
        }

        // On crée un formulaire vide, qui ne contiendra que le champ CSRF
        // Cela permet de protéger la suppression d'annonce contre cette faille
        $form = $this->get('form.factory')->create();

        if ($request->isMethod('POST') && $form->handleRequest($request)->isValid()) {
            $em->remove($advert);
            $em->flush();

            $request->getSession()->getFlashBag()->add('info', "L'annonce a bien été supprimée.");

            return $this->redirectToRoute('oc_platform_home');
        }

        return $this->render('OCPlatformBundle:Advert:delete.html.twig', array(
            'advert' => $advert,
            'form'   => $form->createView(),
        ));
    }

    ///////////////////////////////////////////////////////////////////////////////////

    public function lastAnnonceAction($limit)
    {
        $em = $this->getDoctrine()->getManager();
        $listAdverts = $em->getRepository('OCPlatformBundle:Advert')->findBy(array(), array('date' => 'DESC'), $limit);

        return $this->render('OCPlatformBundle:Advert:menu.html.twig', array(
            'listAdverts' => $listAdverts,
        ));
    }

    ///////////////////////////////////////////////////////////////////////////////////

    public function lastApplicationAction(User $user)
    {
        //$em = $this->getDoctrine()->getManager();
        /*$listApps = $user->getApplications();
        $listAdverts = array();
        foreach ($listApps as $_app)
        {
            if($_app->getDate() != new \Datetime())
                $listAdverts[] = $_app->getAdvert();
        }*/
        $em = $this->getDoctrine()->getManager();
        $listAdverts = $em->getRepository('OCPlatformBundle:Advert')->getAdvertByApplicationAuthor($user);

        return $this->render('OCPlatformBundle:Advert:menu.html.twig', array(
            'listAdverts' => $listAdverts,
        ));
    }

    ///////////////////////////////////////////////////////////////////////////////////

    public function lastAdvertAction(User $user)
    {
        $em = $this->getDoctrine()->getManager();
        $listAdverts = $em->getRepository('OCPlatformBundle:Advert')->findBy(array('author' => $user), array('date' => 'DESC'));

        return $this->render('OCPlatformBundle:Advert:menu.html.twig', array(
            'listAdverts' => $listAdverts,
            'showNumber' => true,
        ));
    }

    ///////////////////////////////////////////////////////////////////////////////////

    public function menuAction()
    {
        $userRoles = null;

        if($this->getUser() != null)
            $userRoles = $this->getUser()->getRoles();

        $listMenu = array(array('url' => $this->generateUrl('oc_platform_home'), 'title' => 'Accueil'));

        //if($userRoles != null && in_array('ROLE_AUTEUR', $userRoles))
            array_push($listMenu, array('url' => $this->generateUrl('oc_platform_add'), 'title' => 'Ajouter une annonce'));

        array_push($listMenu, array('url' => $this->generateUrl('oc_platform_oldhome'), 'title' => 'Old Index - [Lien dynamique avec recupération session]'));
        array_push($listMenu, array('url' => $this->generateUrl('oc_platform_view_json'), 'title' => 'GetJson'));
        array_push($listMenu, array('url' => $this->generateUrl('oc_platform_session'), 'title' => 'SetSession'));

        //if($userRoles != null && in_array('ROLE_USER', $userRoles))
            array_push($listMenu, array('url' => $this->generateUrl('oc_platform_hello'), 'title' => 'Hello world'));

        return $this->render('OCPlatformBundle:Advert:menu.html.twig', array(
            'listMenu' => $listMenu
        ));
    }








    public function old_indexAction(Request $request)
    {
        $advert_id = 0;
        $session = $request->getSession();
        $advert_id = $session->get('advert_id');

        /*
        $url = $this->generateUrl(
            'oc_platform_view', // 1er argument : le nom de la route
            array('id' => 5)    // 2e argument : les valeurs des paramètres
        );
        return new Response("L'URL de l'annonce d'id 5 est : ".$url);//*/
        return $this->render('OCPlatformBundle:Advert:oldindex.html.twig', array('nom' => "World", 'advert_id' => $advert_id));
    }

    public function sendmailAction($email)
    {
        $service = $this->container->get('oc_platform.service.service');
        /*$message = $this->renderView(
        // app/Resources/views/Emails/registration.html.twig
            'OCPlatformBundle:Advert:oldindex.html.twig',
            array('nom' => $email)
        );*/
        $object = "plop";
        $message = "plop";
        $mailMsg = $service->prepareMail($email, $object, $message, 'text/plain');

        $this->get('mailer')->send($mailMsg);

        return new Response("<body>Hello ".$email." !</body>");
    }

    public function helloAction($name = "World")
    {
        $content = $this->get('templating')->render('OCPlatformBundle:Advert:oldindex.html.twig', array('nom' => $name));

        return new Response($content);
    }

    public function jsonAction(Request $request)
    {
        $advert_id = 0;
        $session = $request->getSession();
        $advert_id = $session->get('advert_id');

        return new JsonResponse(array('session_advert_id' => $advert_id));
    }

    public function sessionAction($advert_id = 0, Request $request)
    {
        $session = $request->getSession();
        $session_advert_id = $session->get('advert_id');

        if($advert_id != 0)
            $session->set('advert_id', $advert_id);

        return $this->redirectToRoute('oc_platform_view_json');
    }
}

?>