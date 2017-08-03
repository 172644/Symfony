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

class UtilsController extends Controller
{

    ///////////////////////////////////////////////////////////////////////////////////

    public function tagAction($id = null, Request $request)
    {
        $em = $this->getDoctrine()->getManager();
        $listCategory = $em->getRepository('OCPlatformBundle:Category')->findAll();
        $listAdvert = $em->getRepository('OCPlatformBundle:Advert')->findAll();

        return $this->render('OCPlatformBundle:Advert:list.html.twig', array(
            'list_category' => $listCategory,
            'listAdverts' => $listAdvert,
            'id_cat' => $id
        ));
    }
    ///////////////////////////////////////////////////////////////////////////////////

    public function purgeAction($day = 60)
    {
        $service = $this->container->get('oc_platform.service.deleteAdvert');
        $service->purge($day);

        return $this->redirectToRoute('oc_platform_home');
    }

    ///////////////////////////////////////////////////////////////////////////////////

    public function deleteAppAction(Application $app, $id, Request $request)
    {
        $em = $this->getDoctrine()->getManager();
        $advert = $app->getAdvert();
        $advert->removeApplication($app);
        $em->remove($app);
        $em->flush();

        return $this->redirectToRoute('oc_platform_view', array('id' => $advert->getId()));
    }
}

?>
