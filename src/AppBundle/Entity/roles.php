<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * roles
 *
 * @ORM\Table(name="roles")
 * @ORM\Entity(repositoryClass="AppBundle\Repository\rolesRepository")
 */
class roles
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
     * @ORM\Column(name="role_id", type="string", length=255, unique=true)
     */
    private $roleId;

    /**
     * @var string
     *
     * @ORM\Column(name="role_name", type="string", length=255)
     */
    private $roleName;

    /**
     * @var string
     *
     * @ORM\Column(name="role_description", type="string", length=255)
     */
    private $roleDescription;


    /**
     * @ORM\OneToMany(targetEntity="login",mappedBy="roles")
     *
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
     * Set roleId
     *
     * @param string $roleId
     *
     * @return roles
     */
    public function setRoleId($roleId)
    {
        $this->roleId = $roleId;
    
        return $this;
    }

    /**
     * Get roleId
     *
     * @return string
     */
    public function getRoleId()
    {
        return $this->roleId;
    }

    /**
     * Set roleName
     *
     * @param string $roleName
     *
     * @return roles
     */
    public function setRoleName($roleName)
    {
        $this->roleName = $roleName;
    
        return $this;
    }

    /**
     * Get roleName
     *
     * @return string
     */
    public function getRoleName()
    {
        return $this->roleName;
    }

    /**
     * Set roleDescription
     *
     * @param string $roleDescription
     *
     * @return roles
     */
    public function setRoleDescription($roleDescription)
    {
        $this->roleDescription = $roleDescription;
    
        return $this;
    }

    /**
     * Get roleDescription
     *
     * @return string
     */
    public function getRoleDescription()
    {
        return $this->roleDescription;
    }
    /**
     * Constructor
     */
    public function __construct()
    {
        $this->login = new \Doctrine\Common\Collections\ArrayCollection();
    }

    /**
     * Add login
     *
     * @param \AppBundle\Entity\login $login
     *
     * @return roles
     */
    public function addLogin(\AppBundle\Entity\login $login)
    {
        $this->login[] = $login;
    
        return $this;
    }

    /**
     * Remove login
     *
     * @param \AppBundle\Entity\login $login
     */
    public function removeLogin(\AppBundle\Entity\login $login)
    {
        $this->login->removeElement($login);
    }

    /**
     * Get login
     *
     * @return \Doctrine\Common\Collections\Collection
     */
    public function getLogin()
    {
        return $this->login;
    }
}
