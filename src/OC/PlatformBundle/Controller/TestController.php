<?php

namespace OC\PlatformBundle\Controller;

use OC\PlatformBundle\Form\Type\ApplicationType;
use Symfony\Component\HttpKernel\Exception\NotFoundHttpException;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\JsonResponse;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\HttpFoundation\Request;
use OC\PlatformBundle\Entity\Advert;
use OC\PlatformBundle\Entity\Image;
use OC\PlatformBundle\Entity\Application;
use OC\CoreBundle\Entity\User;
use OC\PlatformBundle\Entity\Category;
use OC\PlatformBundle\Entity\AdvertSkill;
use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\ORM\Mapping as ORM;
use OC\PlatformBundle\Form\Type\AdvertType;
use OC\PlatformBundle\Form\Type\AdvertEditType;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Security;
use OC\PlatformBundle\Event\PlatformEvents;
use OC\PlatformBundle\Event\MessagePostEvent;

class TestController extends Controller
{
    public function oldIndexAction(Request $request)
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

        if($advert_id != 0)
            $session->set('advert_id', $advert_id);

        return $this->redirectToRoute('oc_platform_view_json');
    }
}

?>
