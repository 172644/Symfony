<?php

namespace OC\PlatformBundle\Service;

use OC\PlatformBundle\Entity\Application;

class OCService
{

    public function __construct(\Swift_Mailer $mailer)
    {
        $this->mailer = $mailer;
    }

    public function sendNewNotification(Application $application)
    {
        $object = 'Nouvelle candidature';
        $message = 'Vous avez reçu une nouvelle candidature.';
        $this->mailer->send($this->prepareMail($application->getAdvert()->getAuthor()->getEmail(), $object, $message, 'text/plain'));
    }

    public function prepareMail($email, $object, $body, $contentType = null, $charset = null)
    {
        $message = \Swift_Message::newInstance();
        $message->setSubject($object);
        $message->setFrom(['172644@supinfo.com' => 'OC Platform']);
        $message->setTo($email);
        /*$message->setBody(
            $this->renderView(
            // app/Resources/views/Emails/registration.html.twig
                'OCPlatformBundle:Advert:oldindex.html.twig',
                array('nom' => $email)
            ),
            'text/html'
        );*/
        $message->setBody($body, $contentType, $charset);

        $headers = $message->getHeaders();
        $headers->addTextHeader('From', 'OCPlatform@namkin.fr');


        return $message;
    }
}

?>
