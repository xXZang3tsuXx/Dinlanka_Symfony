<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * cargo
 *
 * @ORM\Table(name="cargo")
 * @ORM\Entity(repositoryClass="AppBundle\Repository\cargoRepository")
 */
class cargo
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
     * @ORM\Column(name="cargo_id", type="string", length=50, unique=true)
     */
    private $cargoId;

    /**
     * @var string
     *
     * @ORM\Column(name="cargo_name", type="string", length=255, nullable=true)
     */
    private $cargoName;

    /**
     * @var string
     *
     * @ORM\Column(name="cargo_destription", type="string", length=255, nullable=true)
     */
    private $cargoDestription;
    
    /**
     * @ORM\ManyToOne(targetEntity="agent", inversedBy="cargo")
     * @ORM\JoinColumn(name="agent_id",referencedColumnName="id")
     */

    private $agent;

    /**
     * @ORM\ManyToOne(targetEntity="customer", inversedBy="cargo")
     * @ORM\JoinColumn(name="cus_id",referencedColumnName="id")
     */

    private $customer;




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
     * Set cargoId
     *
     * @param string $cargoId
     *
     * @return cargo
     */
    public function setCargoId($cargoId)
    {
        $this->cargoId = $cargoId;
    
        return $this;
    }

    /**
     * Get cargoId
     *
     * @return string
     */
    public function getCargoId()
    {
        return $this->cargoId;
    }

    /**
     * Set cargoName
     *
     * @param string $cargoName
     *
     * @return cargo
     */
    public function setCargoName($cargoName)
    {
        $this->cargoName = $cargoName;
    
        return $this;
    }

    /**
     * Get cargoName
     *
     * @return string
     */
    public function getCargoName()
    {
        return $this->cargoName;
    }

    /**
     * Set cargoDestription
     *
     * @param string $cargoDestription
     *
     * @return cargo
     */
    public function setCargoDestription($cargoDestription)
    {
        $this->cargoDestription = $cargoDestription;
    
        return $this;
    }

    /**
     * Get cargoDestription
     *
     * @return string
     */
    public function getCargoDestription()
    {
        return $this->cargoDestription;
    }

    /**
     * Set agent
     *
     * @param \AppBundle\Entity\agent $agent
     *
     * @return cargo
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
     * Set customer
     *
     * @param \AppBundle\Entity\customer $customer
     *
     * @return cargo
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
}
