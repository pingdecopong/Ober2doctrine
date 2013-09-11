<?php

namespace Arte\ObertestBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * TBOrderProduct
 */
class TBOrderProduct
{
    /**
     * @var integer
     */
    private $OrderId;

    /**
     * @var integer
     */
    private $ProductId;

    /**
     * @var integer
     */
    private $Flag;

    /**
     * @var \Arte\ObertestBundle\Entity\TBOrder
     */
    private $TBOrderOrderId;

    /**
     * @var \Arte\ObertestBundle\Entity\TBProduct
     */
    private $TBProductProductId;


    /**
     * Set OrderId
     *
     * @param integer $orderId
     * @return TBOrderProduct
     */
    public function setOrderId($orderId)
    {
        $this->OrderId = $orderId;
    
        return $this;
    }

    /**
     * Get OrderId
     *
     * @return integer 
     */
    public function getOrderId()
    {
        return $this->OrderId;
    }

    /**
     * Set ProductId
     *
     * @param integer $productId
     * @return TBOrderProduct
     */
    public function setProductId($productId)
    {
        $this->ProductId = $productId;
    
        return $this;
    }

    /**
     * Get ProductId
     *
     * @return integer 
     */
    public function getProductId()
    {
        return $this->ProductId;
    }

    /**
     * Set Flag
     *
     * @param integer $flag
     * @return TBOrderProduct
     */
    public function setFlag($flag)
    {
        $this->Flag = $flag;
    
        return $this;
    }

    /**
     * Get Flag
     *
     * @return integer 
     */
    public function getFlag()
    {
        return $this->Flag;
    }

    /**
     * Set TBOrderOrderId
     *
     * @param \Arte\ObertestBundle\Entity\TBOrder $tBOrderOrderId
     * @return TBOrderProduct
     */
    public function setTBOrderOrderId(\Arte\ObertestBundle\Entity\TBOrder $tBOrderOrderId = null)
    {
        $this->TBOrderOrderId = $tBOrderOrderId;
    
        return $this;
    }

    /**
     * Get TBOrderOrderId
     *
     * @return \Arte\ObertestBundle\Entity\TBOrder 
     */
    public function getTBOrderOrderId()
    {
        return $this->TBOrderOrderId;
    }

    /**
     * Set TBProductProductId
     *
     * @param \Arte\ObertestBundle\Entity\TBProduct $tBProductProductId
     * @return TBOrderProduct
     */
    public function setTBProductProductId(\Arte\ObertestBundle\Entity\TBProduct $tBProductProductId = null)
    {
        $this->TBProductProductId = $tBProductProductId;
    
        return $this;
    }

    /**
     * Get TBProductProductId
     *
     * @return \Arte\ObertestBundle\Entity\TBProduct 
     */
    public function getTBProductProductId()
    {
        return $this->TBProductProductId;
    }
}
