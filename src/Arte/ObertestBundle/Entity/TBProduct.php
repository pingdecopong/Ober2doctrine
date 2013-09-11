<?php

namespace Arte\ObertestBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * TBProduct
 */
class TBProduct
{
    /**
     * @var integer
     */
    private $id;

    /**
     * @var string
     */
    private $Name;

    /**
     * @var \Doctrine\Common\Collections\Collection
     */
    private $TBOrderProductsProductId;

    /**
     * Constructor
     */
    public function __construct()
    {
        $this->TBOrderProductsProductId = new \Doctrine\Common\Collections\ArrayCollection();
    }
    
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
     * Set Name
     *
     * @param string $name
     * @return TBProduct
     */
    public function setName($name)
    {
        $this->Name = $name;
    
        return $this;
    }

    /**
     * Get Name
     *
     * @return string 
     */
    public function getName()
    {
        return $this->Name;
    }

    /**
     * Add TBOrderProductsProductId
     *
     * @param \Arte\ObertestBundle\Entity\TBOrderProduct $tBOrderProductsProductId
     * @return TBProduct
     */
    public function addTBOrderProductsProductId(\Arte\ObertestBundle\Entity\TBOrderProduct $tBOrderProductsProductId)
    {
        $this->TBOrderProductsProductId[] = $tBOrderProductsProductId;
    
        return $this;
    }

    /**
     * Remove TBOrderProductsProductId
     *
     * @param \Arte\ObertestBundle\Entity\TBOrderProduct $tBOrderProductsProductId
     */
    public function removeTBOrderProductsProductId(\Arte\ObertestBundle\Entity\TBOrderProduct $tBOrderProductsProductId)
    {
        $this->TBOrderProductsProductId->removeElement($tBOrderProductsProductId);
    }

    /**
     * Get TBOrderProductsProductId
     *
     * @return \Doctrine\Common\Collections\Collection 
     */
    public function getTBOrderProductsProductId()
    {
        return $this->TBOrderProductsProductId;
    }
}
