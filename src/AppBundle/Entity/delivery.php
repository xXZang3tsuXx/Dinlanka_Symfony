<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * delivery
 *
 * @ORM\Table(name="delivery")
 * @ORM\Entity(repositoryClass="AppBundle\Repository\deliveryRepository")
 */
class delivery
{
    /**
     * @var int
     *
     * @ORM\Column(name="id", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="AUTO")
     */
    private $id;

    /**
     * @var string
     *
     * @ORM\Column(name="starting_location", type="string", length=255, nullable=true)
     */
    private $startingLocation;

    /**
     * @var string
     *
     * @ORM\Column(name="current_location", type="string", length=255, nullable=true)
     */
    private $currentLocation;

    /**
     * @var string
     *
     * @ORM\Column(name="del_date", type="string", length=50, nullable=true)
     */
    private $delDate;

    /**
     * @var string
     *
     * @ORM\Column(name="destination", type="string", length=255, nullable=true)
     */
    private $destination;

    /**
     * @var string
     *
     * @ORM\Column(name="del_description", type="string", length=255, nullable=true)
     */
    private $delDescription;

    /**
     * @var string
     *
     * @ORM\Column(name="del_cus_id", type="string", length=50, unique=true)
     */
    private $delCusId;

    /**
     * @ORM\ManyToOne(targetEntity="customer", inversedBy="delivery")
     * @ORM\JoinColumn(name="cus_id",referencedColumnName="id")
     */

    private $customer;

    /**
     * @ORM\ManyToOne(targetEntity="agent", inversedBy="delivery")
     * @ORM\JoinColumn(name="agent_id",referencedColumnName="id")
     */

    private $agent;






    /**
     * Get id
     *
     * @return integer
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * Set startingLocation
     *
     * @param string $startingLocation
     *
     * @return delivery
     */
    public function setStartingLocation($startingLocation)
    {
        $this->startingLocation = $startingLocation;
    
        return $this;
    }

    /**
     * Get startingLocation
     *
     * @return string
     */
    public function getStartingLocation()
    {
        return $this->startingLocation;
    }

    /**
     * Set currentLocation
     *
     * @param string $currentLocation
     *
     * @return delivery
     */
    public function setCurrentLocation($currentLocation)
    {
        $this->currentLocation = $currentLocation;
    
        return $this;
    }

    /**
     * Get currentLocation
     *
     * @return string
     */
    public function getCurrentLocation()
    {
        return $this->currentLocation;
    }

    /**
     * Set delDate
     *
     * @param string $delDate
     *
     * @return delivery
     */
    public function setDelDate($delDate)
    {
        $this->delDate = $delDate;
    
        return $this;
    }

    /**
     * Get delDate
     *
     * @return string
     */
    public function getDelDate()
    {
        return $this->delDate;
    }

    /**
     * Set destination
     *
     * @param string $destination
     *
     * @return delivery
     */
    public function setDestination($destination)
    {
        $this->destination = $destination;
    
        return $this;
    }

    /**
     * Get destination
     *
     * @return string
     */
    public function getDestination()
    {
        return $this->destination;
    }

    /**
     * Set delDescription
     *
     * @param string $delDescription
     *
     * @return delivery
     */
    public function setDelDescription($delDescription)
    {
        $this->delDescription = $delDescription;
    
        return $this;
    }

    /**
     * Get delDescription
     *
     * @return string
     */
    public function getDelDescription()
    {
        return $this->delDescription;
    }

    /**
     * Set delCusId
     *
     * @param string $delCusId
     *
     * @return delivery
     */
    public function setDelCusId($delCusId)
    {
        $this->delCusId = $delCusId;
    
        return $this;
    }

    /**
     * Get delCusId
     *
     * @return string
     */
    public function getDelCusId()
    {
        return $this->delCusId;
    }

    /**
     * Set customer
     *
     * @param \AppBundle\Entity\customer $customer
     *
     * @return delivery
     */
    public function setCustomer(\AppBundle\Entity\customer $customer = null)
    {
        $this->customer = $customer;
    
        return $this;
    }

    /**
     * Get customer
     *
     * @return \AppBundle\Entity\customer
     */
    public function getCustomer()
    {
        return $this->customer;
    }

    /**
     * Set agent
     *
     * @param \AppBundle\Entity\agent $agent
     *
     * @return delivery
     */
    public function setAgent(\AppBundle\Entity\agent $agent = null)
    {
        $this->agent = $agent;
    
        return $this;
    }

    /**
     * Get agent
     *
     * @return \AppBundle\Entity\agent
     */
    public function getAgent()
    {
        return $this->agent;
    }
}
