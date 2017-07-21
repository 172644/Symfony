<?php
// src/OC/PlatformBundle/DoctrineListener/ApplicationCreationListener.php

namespace OC\PlatformBundle\DoctrineListener;

use Doctrine\Common\Persistence\Event\LifecycleEventArgs;
use OC\PlatformBundle\Service\OCService;
use OC\PlatformBundle\Entity\Application;

class ApplicationCreationListener
{
    /**
     * @var OCService
     */
    private $mailService;

    public function __construct(OCService $applicationMailer)
    {
        $this->mailService = $applicationMailer;
    }

    public function postPersist(LifecycleEventArgs $args)
    {
        $entity = $args->getObject();

        // On ne veut envoyer un email que pour les entités Application
        if (!$entity instanceof Application) {
            return;
        }

        $this->mailService->sendNewNotification($entity);
    }
}
