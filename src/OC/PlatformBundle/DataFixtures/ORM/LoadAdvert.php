<?php

namespace OC\PlatformBundle\DataFixtures\ORM;

use Doctrine\Common\DataFixtures\FixtureInterface;
use Doctrine\Common\Persistence\ObjectManager;
use OC\PlatformBundle\Entity\Advert;
use OC\PlatformBundle\Entity\Application;
use OC\PlatformBundle\Entity\AdvertSkill;
use OC\PlatformBundle\Entity\Image;
use OC\UserBundle\Entity\User;
use Symfony\Component\DependencyInjection\ContainerAwareInterface;
use Symfony\Component\DependencyInjection\ContainerInterface;

class LoadAdvert implements FixtureInterface, ContainerAwareInterface
{
    private $container;

    public function setContainer(ContainerInterface $container = null)
    {
        $this->container = $container;
    }
    // Dans l'argument de la méthode load, l'objet $manager est l'EntityManager
    public function load(ObjectManager $manager)
    {
        $userList = array(
            array('admin',  'admin@symfony.com',    'admin',    array('ROLE_ADMIN')),

            array('erwan',  '172644@supinfo.com',   '1994',     array('ROLE_AUTEUR')),
            array('user',   'user@symfony.com',     'user',     array('ROLE_AUTEUR')),

            array('Jean',   'Jean@symfony.com',     'Jean',     array('ROLE_SEARCH')),
            array('test',   'test@symfony.com',     'test',     array('ROLE_SEARCH')),
            array('Marine', 'marine@symfony.com',   'Marine',   array('ROLE_SEARCH')),
            array('Pierre', 'Pierre@symfony.com',   'Pierre',   array('ROLE_SEARCH')),
        );

        // Get our userManager, you must implement `ContainerAwareInterface`
        $userManager = $this->container->get('fos_user.user_manager');

        foreach ($userList as $_user) {

            // Create our user and set details
            $user = $userManager->createUser();
            $user->setUsername($_user[0]);
            $user->setEmail($_user[1]);

            $encoder = $this->container->get('security.password_encoder');
            $password = $encoder->encodePassword($user, $_user[2]);
            $user->setPassword($password);

            $user->setEnabled(true);
            $user->setRoles($_user[3]);

            $manager->persist($user);
        }

        $manager->flush();


        $userManager = $manager->getRepository('OCUserBundle:User');
        $uploadPath = './web/uploads/';

        $dossier=opendir($uploadPath);
        while ($File = readdir($dossier))
        {
            if ($File != "." && $File != ".." && $File != "imgFixtures")
            {
                $Vidage = $uploadPath.$File;
                unlink($Vidage);
            }
        }
        closedir($dossier);

        $dossier=opendir($uploadPath.'imgFixtures/');
        while ($File = readdir($dossier))
        {
            if ($File != "." && $File != "..")
            {
                copy($uploadPath.'imgFixtures/'.$File, $uploadPath.$File);
            }
        }
        closedir($dossier);
        /////////////////////////////////////////////////////////////////////////////////////////

        $image = new Image();
        $image->setImageName('597a07ea82758396195558.jpg');
        $image->setImageSize(5355);
        $image->setUpdatedAtNow();

        $advert = new Advert();
        $advert->setTitle('Recherche développeur Symfony.');
        $advert->setAuthor($userManager->findOneBy(array('username' => 'erwan')));
        $advert->setContent("Nous recherchons un développeur Symfony débutant sur Lyon. Blabla…");
        $advert->setImage($image);

        $manager->persist($advert);

        $application1 = new Application();
        $application1->setAuthor($userManager->findOneBy(array('username' => 'Marine')));
        $application1->setContent("J'ai toutes les qualités requises.");
        $application1->setAdvert($advert);

        $application2 = new Application();
        $application2->setAuthor($userManager->findOneBy(array('username' => 'Pierre')));
        $application2->setContent("Je suis très motivé.");
        $application2->setAdvert($advert);

        $manager->persist($application1);
        $manager->persist($application2);

        $listSkills = $manager->getRepository('OCPlatformBundle:Skill')->findAll();

        foreach ($listSkills as $skill)
        {
            $advertSkill = new AdvertSkill();
            $advertSkill->setAdvert($advert);
            $advertSkill->setSkill($skill);
            $advertSkill->setLevel('Expert');
            $manager->persist($advertSkill);
        }

        /////////////////////////////////////////////////////////////////////////////////////////

        $image = new Image();
        $image->setImageName('597a086f52a67895511418.jpg');
        $image->setImageSize(16348);
        $image->setUpdatedAtNow();

        $advert = new Advert();
        $advert->setTitle('Mission de webmaster');
        $advert->setAuthor($userManager->findOneBy(array('username' => 'erwan')));
        $advert->setContent("Nous recherchons un webmaster capable de maintenir notre site internet. Blabla…");
        $advert->setImage($image);

        $application1 = new Application();
        $application1->setAuthor($userManager->findOneBy(array('username' => 'Jean')));
        $application1->setContent("Je connais les techno web");
        $application1->setAdvert($advert);

        $manager->persist($application1);

        $listSkills = $manager->getRepository('OCPlatformBundle:Skill')->findAll();

        foreach ($listSkills as $skill)
        {
            $advertSkill = new AdvertSkill();
            $advertSkill->setAdvert($advert);
            $advertSkill->setSkill($skill);
            $advertSkill->setLevel('Expert');
            $manager->persist($advertSkill);
        }
        $manager->persist($advert);

        /////////////////////////////////////////////////////////////////////////////////////////

        $image = new Image();
        $image->setImageName('597a088bacab4750779183.jpg');
        $image->setImageSize(62869);
        $image->setUpdatedAtNow();

        $advert = new Advert();
        $advert->setTitle('Offre de stage webdesigner');
        $advert->setAuthor($userManager->findOneBy(array('username' => 'admin')));
        $advert->setContent("Nous proposons un poste pour webdesigner. Blabla…");
        $advert->setImage($image);

        $listSkills = $manager->getRepository('OCPlatformBundle:Skill')->findAll();

        foreach ($listSkills as $skill)
        {
            $advertSkill = new AdvertSkill();
            $advertSkill->setAdvert($advert);
            $advertSkill->setSkill($skill);
            $advertSkill->setLevel('Expert');
            $manager->persist($advertSkill);
        }

        $manager->persist($advert);

        /////////////////////////////////////////////////////////////////////////////////////////


        $manager->flush();
    }
}

?>