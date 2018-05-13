<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * admin
 *
 * @ORM\Table(name="admin")
 * @ORM\Entity(repositoryClass="AppBundle\Repository\adminRepository")
 */
class admin
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
     * @ORM\Column(name="admin_id", type="string", length=50, unique=true)
     */
    private $adminId;

    /**
     * @var string
     *
     * @ORM\Column(name="admin_name", type="string", length=255)
     */
    private $adminName;

    /**
     * @var string
     *
     * @ORM\Column(name="mobile", type="string", length=20, unique=true)
     */
    private $mobile;

    /**
     * @var string
     *
     * @ORM\Column(name="address", type="string", length=255)
     */
    private $address;

    /**
     * @var string
     *
     * @ORM\Column(name="email", type="string", length=100, unique=true)
     */
    private $email;

    /**
     * @ORM\OneToMany(targetEntity="agent",mappedBy="admin")
     *
     */

    private $agent;
    /**
     * @ORM\OneToOne(targetEntity="login", inversedBy="admin")
     * @ORM\JoinColumn(name="login_id",referencedColumnName="id")
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
     * Set adminId
     *
     * @param string $adminId
     *
     * @return admin
     */
    public function setAdminId($adminId)
    {
        $this->adminId = $adminId;
    
        return $this;
    }

    /**
     * Get adminId
     *
     * @return string
     */
    public function getAdminId()
    {
        return $this->adminId;
    }

    /**
     * Set adminName
     *
     * @param string $adminName
     *
     * @return admin
     */
    public function setAdminName($adminName)
    {
        $this->adminName = $adminName;
    
        return $this;
    }

    /**
     * Get adminName
     *
     * @return string
     */
    public function getAdminName()
    {
        return $this->adminName;
    }

    /**
     * Set mobile
     *
     * @param string $mobile
     *
     * @return admin
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
     * Set address
     *
     * @param string $address
     *
     * @return admin
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
     * Set email
     *
     * @param string $email
     *
     * @return admin
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
        $this->agent = new \Doctrine\Common\Collections\ArrayCollection();
    }

    /**
     * Add agent
     *
     * @param \AppBundle\Entity\agent $agent
     *
     * @return admin
     */
    public function addAgent(\AppBundle\Entity\agent $agent)
    {
        $this->agent[] = $agent;
    
        return $this;
    }

    /**
     * Remove agent
     *
     * @param \AppBundle\Entity\agent $agent
     */
    public function removeAgent(\AppBundle\Entity\agent $agent)
    {
        $this->agent->removeElement($agent);
    }

    /**
     * Get agent
     *
     * @return \Doctrine\Common\Collections\Collection
     */
    public function getAgent()
    {
        return $this->agent;
    }

    /**
     * Set login
     *
     * @param \AppBundle\Entity\login $login
     *
     * @return admin
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
