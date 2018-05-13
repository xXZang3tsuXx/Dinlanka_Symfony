<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * agent
 *
 * @ORM\Table(name="agent")
 * @ORM\Entity(repositoryClass="AppBundle\Repository\agentRepository")
 */
class agent
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
     * @ORM\Column(name="agent_id", type="string", length=50, unique=true)
     */
    private $agentId;

    /**
     * @var string
     *
     * @ORM\Column(name="agent_name", type="string", length=255)
     */
    private $agentName;

    /**
     * @var string
     *
     * @ORM\Column(name="address", type="string", length=255)
     */
    private $address;

    /**
     * @var string
     *
     * @ORM\Column(name="mobile", type="string", length=40, unique=true)
     */
    private $mobile;

    /**
     * @var string
     *
     * @ORM\Column(name="email", type="string", length=255, unique=true)
     */
    private $email;
     /**
     * @ORM\OneToMany(targetEntity="cargo",mappedBy="agent")
     *
     */

    private $cargo;

    /**
     * @ORM\ManyToOne(targetEntity="admin", inversedBy="agent")
     * @ORM\JoinColumn(name="admin_id",referencedColumnName="id")
     */

    private $admin;

    /**
     * @ORM\OneToMany(targetEntity="delivery",mappedBy="agent")
     *
     */

    private $delivery;


    /**
     * @ORM\OneToMany(targetEntity="customer",mappedBy="agent")
     *
     */

    private $customer;

  

    /**
     * @ORM\OneToOne(targetEntity="login",inversedBy="agent")
     *@ORM\JoinColumn(name="login_id",referencedColumnName="id")
     */

    private $login;


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
     * Set agentId
     *
     * @param string $agentId
     *
     * @return agent
     */
    public function setAgentId($agentId)
    {
        $this->agentId = $agentId;
    
        return $this;
    }

    /**
     * Get agentId
     *
     * @return string
     */
    public function getAgentId()
    {
        return $this->agentId;
    }

    /**
     * Set agentName
     *
     * @param string $agentName
     *
     * @return agent
     */
    public function setAgentName($agentName)
    {
        $this->agentName = $agentName;
    
        return $this;
    }

    /**
     * Get agentName
     *
     * @return string
     */
    public function getAgentName()
    {
        return $this->agentName;
    }

    /**
     * Set address
     *
     * @param string $address
     *
     * @return agent
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
     * @return agent
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
     * Set email
     *
     * @param string $email
     *
     * @return agent
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
     * Constructor
     */
    public function __construct()
    {
        $this->cargo = new \Doctrine\Common\Collections\ArrayCollection();
        $this->delivery = new \Doctrine\Common\Collections\ArrayCollection();
        $this->customer = new \Doctrine\Common\Collections\ArrayCollection();
    }

    /**
     * Add cargo
     *
     * @param \AppBundle\Entity\cargo $cargo
     *
     * @return agent
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
     * Set admin
     *
     * @param \AppBundle\Entity\admin $admin
     *
     * @return agent
     */
    public function setAdmin(\AppBundle\Entity\admin $admin = null)
    {
        $this->admin = $admin;
    
        return $this;
    }

    /**
     * Get admin
     *
     * @return \AppBundle\Entity\admin
     */
    public function getAdmin()
    {
        return $this->admin;
    }

    /**
     * Add delivery
     *
     * @param \AppBundle\Entity\delivery $delivery
     *
     * @return agent
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
     * Add customer
     *
     * @param \AppBundle\Entity\customer $customer
     *
     * @return agent
     */
    public function addCustomer(\AppBundle\Entity\customer $customer)
    {
        $this->customer[] = $customer;
    
        return $this;
    }

    /**
     * Remove customer
     *
     * @param \AppBundle\Entity\customer $customer
     */
    public function removeCustomer(\AppBundle\Entity\customer $customer)
    {
        $this->customer->removeElement($customer);
    }

    /**
     * Get customer
     *
     * @return \Doctrine\Common\Collections\Collection
     */
    public function getCustomer()
    {
        return $this->customer;
    }

    /**
     * Set login
     *
     * @param \AppBundle\Entity\login $login
     *
     * @return agent
     */
    public function setLogin(\AppBundle\Entity\login $login = null)
    {
        $this->login = $login;
    
        return $this;
    }

    /**
     * Get login
     *
     * @return \AppBundle\Entity\login
     */
    public function getLogin()
    {
        return $this->login;
    }
}
