<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * login
 *
 * @ORM\Table(name="login")
 * @ORM\Entity(repositoryClass="AppBundle\Repository\loginRepository")
 */
class login
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
     * @ORM\Column(name="login_id", type="string", length=50, unique=true)
     */
    private $loginId;

    /**
     * @var string
     *
     * @ORM\Column(name="login_name", type="string", length=255)
     */
    private $loginName;

    /**
     * @var string
     *
     * @ORM\Column(name="password", type="string", length=255)
     */
    private $password;


    /**
     * @ORM\OneToOne(targetEntity="agent", mappedBy="login")
     * @ORM\JoinColumn(name="agent_id",referencedColumnName="id")
     */

    private $agent;

    /**
     * @ORM\OneToOne(targetEntity="Admin", mappedBy="login")
     * @ORM\JoinColumn(name="admin_id",referencedColumnName="id")
     */

    private $admin;

    /**
     * @ORM\ManyToOne(targetEntity="Roles", inversedBy="login")
     * @ORM\JoinColumn(name="role_id",referencedColumnName="id")
     */

    private $roles;


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
     * Set loginId
     *
     * @param string $loginId
     *
     * @return login
     */
    public function setLoginId($loginId)
    {
        $this->loginId = $loginId;
    
        return $this;
    }

    /**
     * Get loginId
     *
     * @return string
     */
    public function getLoginId()
    {
        return $this->loginId;
    }

    /**
     * Set loginName
     *
     * @param string $loginName
     *
     * @return login
     */
    public function setLoginName($loginName)
    {
        $this->loginName = $loginName;
    
        return $this;
    }

    /**
     * Get loginName
     *
     * @return string
     */
    public function getLoginName()
    {
        return $this->loginName;
    }

    /**
     * Set password
     *
     * @param string $password
     *
     * @return login
     */
    public function setPassword($password)
    {
        $this->password = $password;
    
        return $this;
    }

    /**
     * Get password
     *
     * @return string
     */
    public function getPassword()
    {
        return $this->password;
    }

    /**
     * Set agent
     *
     * @param \AppBundle\Entity\agent $agent
     *
     * @return login
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

    /**
     * Set admin
     *
     * @param \AppBundle\Entity\Admin $admin
     *
     * @return login
     */
    public function setAdmin(\AppBundle\Entity\Admin $admin = null)
    {
        $this->admin = $admin;
    
        return $this;
    }

    /**
     * Get admin
     *
     * @return \AppBundle\Entity\Admin
     */
    public function getAdmin()
    {
        return $this->admin;
    }

    /**
     * Set roles
     *
     * @param \AppBundle\Entity\Roles $roles
     *
     * @return login
     */
    public function setRoles(\AppBundle\Entity\Roles $roles = null)
    {
        $this->roles = $roles;
    
        return $this;
    }

    /**
     * Get roles
     *
     * @return \AppBundle\Entity\Roles
     */
    public function getRoles()
    {
        return $this->roles;
    }
}
