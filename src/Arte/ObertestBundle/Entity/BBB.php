<?php

namespace Arte\ObertestBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * BBB
 */
class BBB
{
    /**
     * @var integer
     */
    private $bbbid;

    /**
     * @var \Doctrine\Common\Collections\Collection
     */
    private $aaas;

    /**
     * Constructor
     */
    public function __construct()
    {
        $this->aaas = new \Doctrine\Common\Collections\ArrayCollection();
    }
    
    /**
     * Get bbbid
     *
     * @return integer 
     */
    public function getBbbid()
    {
        return $this->bbbid;
    }

    /**
     * Add aaas
     *
     * @param \Arte\ObertestBundle\Entity\AAA $aaas
     * @return BBB
     */
    public function addAaa(\Arte\ObertestBundle\Entity\AAA $aaas)
    {
        $this->aaas[] = $aaas;
    
        return $this;
    }

    /**
     * Remove aaas
     *
     * @param \Arte\ObertestBundle\Entity\AAA $aaas
     */
    public function removeAaa(\Arte\ObertestBundle\Entity\AAA $aaas)
    {
        $this->aaas->removeElement($aaas);
    }

    /**
     * Get aaas
     *
     * @return \Doctrine\Common\Collections\Collection 
     */
    public function getAaas()
    {
        return $this->aaas;
    }
}
