<?php

namespace Arte\ObertestBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * TBOrder
 */
class TBOrder
{
    /**
     * @var integer
     */
    private $id;

    /**
     * @var string
     */
    private $Title;

    /**
     * @var \Doctrine\Common\Collections\Collection
     */
    private $TBOrderProductsOrderId;

    /**
     * Constructor
     */
    public function __construct()
    {
        $this->TBOrderProductsOrderId = new \Doctrine\Common\Collections\ArrayCollection();
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
     * Set Title
     *
     * @param string $title
     * @return TBOrder
     */
    public function setTitle($title)
    {
        $this->Title = $title;
    
        return $this;
    }

    /**
     * Get Title
     *
     * @return string 
     */
    public function getTitle()
    {
        return $this->Title;
    }

    /**
     * Add TBOrderProductsOrderId
     *
     * @param \Arte\ObertestBundle\Entity\TBOrderProduct $tBOrderProductsOrderId
     * @return TBOrder
     */
    public function addTBOrderProductsOrderId(\Arte\ObertestBundle\Entity\TBOrderProduct $tBOrderProductsOrderId)
    {
        $this->TBOrderProductsOrderId[] = $tBOrderProductsOrderId;
    
        return $this;
    }

    /**
     * Remove TBOrderProductsOrderId
     *
     * @param \Arte\ObertestBundle\Entity\TBOrderProduct $tBOrderProductsOrderId
     */
    public function removeTBOrderProductsOrderId(\Arte\ObertestBundle\Entity\TBOrderProduct $tBOrderProductsOrderId)
    {
        $this->TBOrderProductsOrderId->removeElement($tBOrderProductsOrderId);
    }

    /**
     * Get TBOrderProductsOrderId
     *
     * @return \Doctrine\Common\Collections\Collection 
     */
    public function getTBOrderProductsOrderId()
    {
        return $this->TBOrderProductsOrderId;
    }
}
