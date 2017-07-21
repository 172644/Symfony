<?php

namespace OC\UserBundle\Entity;

use Doctrine\ORM\Mapping as ORM;
use FOS\UserBundle\Model\User as BaseUser;
use OC\PlatformBundle\Entity\Advert;
use OC\PlatformBundle\Entity\Application;
use Doctrine\Common\Collections\ArrayCollection;

/**
 * @ORM\Table(name="oc_user")
 * @ORM\Entity(repositoryClass="OC\UserBundle\Entity\UserRepository")
 */
class User extends BaseUser
{
    /**
     * @ORM\Column(name="id", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="AUTO")
     */
    protected $id;

    /**
     * @ORM\OneToMany(targetEntity="OC\PlatformBundle\Entity\Advert", mappedBy="author")
     */
    private $adverts;

    /**
     * @ORM\OneToMany(targetEntity="OC\PlatformBundle\Entity\Application", mappedBy="author")
     */
    private $applications;

    public function __construct()
    {
        $this->adverts = new ArrayCollection();
    }

    public function addadvert(Advert $advert)
    {
        $this->adverts[] = $advert;
    }

    public function removeAdvert(Advert $advert)
    {
        $this->adverts->removeElement($advert);
    }

    public function getAdverts()
    {
        return $this->adverts;
    }

    /**
     * Add application
     *
     * @param \OC\PlatformBundle\Entity\Application $application
     *
     * @return Advert
     */
    public function addApplication(Application $application)
    {
        $this->applications[] = $application;
    }

    /**
     * Remove application
     *
     * @param \OC\PlatformBundle\Entity\Application $application
     */
    public function removeApplication(Application $application)
    {
        $this->applications->removeElement($application);
    }

    /**
     * Get applications
     *
     * @return \Doctrine\Common\Collections\Collection
     */
    public function getApplications()
    {
        return $this->applications;
    }
}
