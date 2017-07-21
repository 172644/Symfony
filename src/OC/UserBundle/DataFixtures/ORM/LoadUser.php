<?php

namespace OC\UserBundle\DataFixtures\ORM;

use Doctrine\Common\DataFixtures\FixtureInterface;
use Doctrine\Common\Persistence\ObjectManager;
use OC\UserBundle\Entity\User;
use Symfony\Component\DependencyInjection\ContainerAwareInterface;
use Symfony\Component\DependencyInjection\ContainerInterface;

class LoadUser implements FixtureInterface, ContainerAwareInterface
{
    private $container;

    public function setContainer(ContainerInterface $container = null)
    {
        $this->container = $container;
    }

    public function load(ObjectManager $manager)
    {
        // Les noms d'utilisateurs à créer
        //$listNames = array('Alexandre', 'Marine', 'Anna');

        /*foreach ($listNames as $name) {
            // On crée l'utilisateur
            $user = new User;

            // Le nom d'utilisateur et le mot de passe sont identiques pour l'instant
            $user->setUsername($name);
            $user->setPassword($name);

            // On ne se sert pas du sel pour l'instant
            $user->setSalt('');
            // On définit uniquement le role ROLE_USER qui est le role de base
            $user->setRoles(array('ROLE_USER'));

            // On le persiste
            $manager->persist($user);
        }

        // On déclenche l'enregistrement
        $manager->flush();*/
        /*$userList = array(
                array('admin', 'admin@symfony.com', 'admin', array('ROLE_ADMIN')),
                array('erwan', '172644@supinfo.com', '1994', array('ROLE_ADMIN')),
                array('test', 'test@symfony.com', 'test', array('ROLE_ADMIN')),
                array('user', 'user@symfony.com', 'user', array()),
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

        $manager->flush();*/
    }
}