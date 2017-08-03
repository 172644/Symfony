<?php

namespace OC\PlatformBundle\Service;

use OC\PlatformBundle\Entity\Advert;

class OCDeleteOldAdvert
{
    public function __construct(\Doctrine\ORM\EntityManager $em)
    {
        $this->em = $em;
    }
    public function purge($day)
    {
        $listAdverts = $this->em->getRepository('OCPlatformBundle:Advert')->getAdvertsWithoutApplication($day);
        return $listAdverts;
    }
}

?>
