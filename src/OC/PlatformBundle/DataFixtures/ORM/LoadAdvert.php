<?php

namespace OC\PlatformBundle\DataFixtures\ORM;

use Doctrine\Common\DataFixtures\FixtureInterface;
use Doctrine\Common\Persistence\ObjectManager;
use OC\PlatformBundle\Entity\Advert;
use OC\PlatformBundle\Entity\Category;
use OC\PlatformBundle\Entity\Application;
use OC\PlatformBundle\Entity\AdvertSkill;
use OC\CoreBundle\Entity\Image;
use OC\CoreBundle\Entity\User;
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
            array('superadmin', 'admin' ,'admin',   'superadmin@symfony.com',   'superadmin',   'UID1', array('ROLE_SUPER_ADMIN')),
            array('admin',      'admin' ,'admin',   'admin@symfony.com',        'admin',        'UID2', array('ROLE_ADMIN')),

            array('sazer',      'Erwan' ,'Locart',  '172644@supinfo.com',       '19941994aA',   'UID3', array('ROLE_AUTEUR')),
            array('user',       'user'  ,'user',    'user@symfony.com',         'user',         'UID4', array('ROLE_AUTEUR')),

            array('Jean',       'Jean'  ,'Doe',     'Jean@symfony.com',         'Jean',         'UID5', array('ROLE_SEARCH')),
            array('test',       'test'  ,'test',    'test@symfony.com',         'test',         'UID6', array('ROLE_SEARCH')),
            array('Marine',     'Marine','Dupont',  'marine@symfony.com',       'Marine',       'UID7', array('ROLE_SEARCH')),
            array('Pierre',     'Pierre','Loyu',    'Pierre@symfony.com',       'Pierre',       'UID8', array('ROLE_SEARCH')),
        );

        foreach ($userList as $_user) {

            $user = new User();
            $user->setUsername($_user[0]);
            $user->setFirstname($_user[1]);
            $user->setLastname($_user[2]);
            $user->setActive(1);
            $user->setUid($_user[5]);
            $encoder = $this->container->get('security.password_encoder');
            $encodedPass = $encoder->encodePassword($user, $_user[4]);
            $user->setPassword($encodedPass);
            $user->setEmail($_user[3]);
            $user->setRoles($_user[6]);

            $manager->persist($user);
        }

        $manager->flush();


        $userManager = $manager->getRepository('OCCoreBundle:User');
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

        $names = array(
            'Développement web',
            'Développement mobile',
            'Graphisme',
            'Intégration',
            'Réseau'
        );

        foreach ($names as $name) {
            $category = new Category();
            $category->setName($name);

            $manager->persist($category);
        }
        $manager->flush();

        $categoryManager = $manager->getRepository('OCPlatformBundle:Category');

        /////////////////////////////////////////////////////////////////////////////////////////

        $image = new Image();
        $image->setImageName('597a07ea82758396195558.jpg');
        $image->setUpdatedAtNow();

        $advert = new Advert();
        $advert->setTitle('Recherche développeur Symfony.');
        $advert->setAuthor($userManager->findOneBy(array('username' => 'sazer')));
        $advert->setContent("Nous recherchons un développeur Symfony débutant sur Lyon. Blabla…");
        $advert->setImage($image);
        $advert->addCategory($categoryManager->findOneBy(array('name' => 'Développement web')));
        $advert->addCategory($categoryManager->findOneBy(array('name' => 'Intégration')));
        $advert->addCategory($categoryManager->findOneBy(array('name' => 'Graphisme')));

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
        $image->setUpdatedAtNow();

        $advert = new Advert();
        $advert->setTitle('Mission de webmaster');
        $advert->setAuthor($userManager->findOneBy(array('username' => 'sazer')));
        $advert->setContent("Nous recherchons un webmaster capable de maintenir notre site internet. Blabla…");
        $advert->setImage($image);
        $advert->addCategory($categoryManager->findOneBy(array('name' => 'Développement web')));
        $advert->addCategory($categoryManager->findOneBy(array('name' => 'Réseau')));

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
        $image->setUpdatedAtNow();

        $advert = new Advert();
        $advert->setTitle('Offre de stage webdesigner');
        $advert->setAuthor($userManager->findOneBy(array('username' => 'admin')));
        $advert->setContent("Nous proposons un poste pour webdesigner. Blabla…");
        $advert->setImage($image);
        $advert->addCategory($categoryManager->findOneBy(array('name' => 'Développement web')));
        $advert->addCategory($categoryManager->findOneBy(array('name' => 'Intégration')));
        $advert->addCategory($categoryManager->findOneBy(array('name' => 'Graphisme')));

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