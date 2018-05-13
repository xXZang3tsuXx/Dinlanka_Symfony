<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * customer
 *
 * @ORM\Table(name="customer")
 * @ORM\Entity(repositoryClass="AppBundle\Repository\customerRepository")
 */
class customer
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
     * @ORM\Column(name="cus_id", type="string", length=50, unique=true)
     */
    private $cusId;

    /**
     * @var string
     *
     * @ORM\Column(name="cus_name", type="string", length=255)
     */
    private $cusName;

    /**
     * @var string
     *
     * @ORM\Column(name="email", type="string", length=255)
     */
    private $email;

    /**
     * @var string
     *
     * @ORM\Column(name="address", type="string", length=255)
     */
    private $address;

    /**
     * @var string
     *
     * @ORM\Column(name="mobile", type="string", length=100)
     */
    private $mobile;


    /**
     * @ORM\OneToMany(targetEntity="cargo",mappedBy="customer")
     *
     */

    private $cargo;

    /**
     * @ORM\OneToMany(targetEntity="delivery",mappedBy="customer")
     *
     */

    private $delivery;


    /**
     * @ORM\ManyToOne(targetEntity="agent", inversedBy="customer")
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
     * Set cusId
     *
     * @param string $cusId
     *
     * @return customer
     */
    public function setCusId($cusId)
    {
        $this->cusId = $cusId;
    
        return $this;
    }

    /**
     * Get cusId
     *
     * @return string
     */
    public function getCusId()
    {
        return $this->cusId;
    }

    /**
     * Set cusName
     *
     * @param string $cusName
     *
     * @return customer
     */
    public function setCusName($cusName)
    {
        $this->cusName = $cusName;
    
        return $this;
    }

    /**
     * Get cusName
     *
     * @return string
     */
    public function getCusName()
    {
        return $this->cusName;
    }

    /**
     * Set email
     *
     * @param string $email
     *
     * @return customer
     */
    public function setEmail($email)
    {
        $this->email = $email;
    
        return $this;
    }

    /**
     * Get email
     *
     * @return string
     */
    public function getEmail()
    {
        return $this->email;
    }

    /**
     * Set address
     *
     * @param string $address
     *
     * @return customer
     */
    public function setAddress($address)
    {
        $this->address = $address;
    
        return $this;
    }

    /**
     * Get address
     *
     * @return string
     */
    public function getAddress()
    {
        return $this->address;
    }

    /**
     * Set mobile
     *
     * @param string $mobile
     *
     * @return customer
     */
    public function setMobile($mobile)
    {
        $this->mobile = $mobile;
    
        return $this;
    }

    /**
     * Get mobile
     *
     * @return string
     */
    public function getMobile()
    {
        return $this->mobile;
    }
    /**
     * Constructor
     */
    public function __construct()
    {
        $this->cargo = new \Doctrine\Common\Collections\ArrayCollection();
        $this->delivery = new \Doctrine\Common\Collections\ArrayCollection();
    }

    /**
     * Add cargo
     *
     * @param \AppBundle\Entity\cargo $cargo
     *
     * @return customer
     */
    public function addCargo(\AppBundle\Entity\cargo $cargo)
    {
        $this->cargo[] = $cargo;
    
        return $this;
    }

    /**
     * Remove cargo
     *
     * @param \AppBundle\Entity\cargo $cargo
     */
    public function removeCargo(\AppBundle\Entity\cargo $cargo)
    {
        $this->cargo->removeElement($cargo);
    }

    /**
     * Get cargo
     *
     * @return \Doctrine\Common\Collections\Collection
     */
    public function getCargo()
    {
        return $this->cargo;
    }

    /**
     * Add delivery
     *
     * @param \AppBundle\Entity\delivery $delivery
     *
     * @return customer
     */
    public function addDelivery(\AppBundle\Entity\delivery $delivery)
    {
        $this->delivery[] = $delivery;
    
        return $this;
    }

    /**
     * Remove delivery
     *
     * @param \AppBundle\Entity\delivery $delivery
     */
    public function removeDelivery(\AppBundle\Entity\delivery $delivery)
    {
        $this->delivery->removeElement($delivery);
    }

    /**
     * Get delivery
     *
     * @return \Doctrine\Common\Collections\Collection
     */
    public function getDelivery()
    {
        return $this->delivery;
    }

    /**
     * Set agent
     *
     * @param \AppBundle\Entity\agent $agent
     *
     * @return customer
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
