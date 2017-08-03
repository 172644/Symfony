<?php

namespace OC\PlatformBundle\Listener;

use Symfony\Component\HttpFoundation\Response;
use OC\PlatformBundle\Service\BetaHTMLAdder;
use Symfony\Component\HttpKernel\Event\FilterResponseEvent;


class BetaListener
{
    // Notre processeur
    protected $betaHTML;

    // La date de fin de la version bêta :
    // - Avant cette date, on affichera un compte à rebours (J-3 par exemple)
    // - Après cette date, on n'affichera plus le « bêta »
    protected $endDate;

    public function __construct(BetaHTMLAdder $betaHTML, $endDate)
    {
        $this->betaHTML = $betaHTML;
        $this->endDate  = new \Datetime($endDate);
    }

    public function processBeta(FilterResponseEvent $event)
    {
        // On teste si la requête est bien la requête principale (et non une sous-requête)
        if (!$event->isMasterRequest()) {
            return;
        }

        $remainingDays = $this->endDate->diff(new \Datetime())->days;

        // Si la date est dépassée, on ne fait rien
        if ($remainingDays <= 0) {
            return;
        }

        // On utilise notre BetaHRML
        $this->betaHTML->addBeta($event->getResponse(), $remainingDays);
        $event->getResponse();
    }
}
