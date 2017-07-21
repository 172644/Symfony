<?php

namespace OC\PlatformBundle\Antispam;

class OCAntispam
{
    private $mailer;
    private $locale;
    private $minLength;

    public function __construct(\Swift_Mailer $mailer, $minLength)
    {
        $this->mailer    = $mailer;
        $this->minLength = (int) $minLength;
    }

    public function isSpam($text)
    {
        return strlen($text) < $this->minLength;
    }

    public function setLocale($locale)
    {
        $this->locale = $locale;
    }
}

?>