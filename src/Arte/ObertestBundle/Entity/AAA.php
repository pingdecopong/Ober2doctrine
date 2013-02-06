<?php

namespace Arte\ObertestBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * AAA
 */
class AAA
{
    /**
     * @var integer
     */
    private $aaaid;

    /**
     * @var \Doctrine\Common\Collections\Collection
     */
    private $bbbs;

    /**
     * Constructor
     */
    public function __construct()
    {
        $this->bbbs = new \Doctrine\Common\Collections\ArrayCollection();
    }
    
    /**
     * Get aaaid
     *
     * @return integer 
     */
    public function getAaaid()
    {
        return $this->aaaid;
    }

    /**
     * Add bbbs
     *
     * @param \Arte\ObertestBundle\Entity\BBB $bbbs
     * @return AAA
     */
    public function addBbb(\Arte\ObertestBundle\Entity\BBB $bbbs)
    {
        $this->bbbs[] = $bbbs;
    
        return $this;
    }

    /**
     * Remove bbbs
     *
     * @param \Arte\ObertestBundle\Entity\BBB $bbbs
     */
    public function removeBbb(\Arte\ObertestBundle\Entity\BBB $bbbs)
    {
        $this->bbbs->removeElement($bbbs);
    }

    /**
     * Get bbbs
     *
     * @return \Doctrine\Common\Collections\Collection 
     */
    public function getBbbs()
    {
        return $this->bbbs;
    }
}
