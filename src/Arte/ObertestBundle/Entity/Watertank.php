<?php

namespace Arte\ObertestBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Watertank
 */
class Watertank
{
    /**
     * @var integer
     */
    private $WatertankId;

    /**
     * @var string
     */
    private $Name;

    /**
     * @var integer
     */
    private $SystemUserId;

    /**
     * @var integer
     */
    private $IntegerData;

    /**
     * @var boolean
     */
    private $DefTest1;

    /**
     * @var \Arte\ObertestBundle\Entity\SystemUser
     */
    private $systemuser;


    /**
     * Set WatertankId
     *
     * @param integer $watertankId
     * @return Watertank
     */
    public function setWatertankId($watertankId)
    {
        $this->WatertankId = $watertankId;
    
        return $this;
    }

    /**
     * Get WatertankId
     *
     * @return integer 
     */
    public function getWatertankId()
    {
        return $this->WatertankId;
    }

    /**
     * Set Name
     *
     * @param string $name
     * @return Watertank
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
     * Set SystemUserId
     *
     * @param integer $systemUserId
     * @return Watertank
     */
    public function setSystemUserId($systemUserId)
    {
        $this->SystemUserId = $systemUserId;
    
        return $this;
    }

    /**
     * Get SystemUserId
     *
     * @return integer 
     */
    public function getSystemUserId()
    {
        return $this->SystemUserId;
    }

    /**
     * Set IntegerData
     *
     * @param integer $integerData
     * @return Watertank
     */
    public function setIntegerData($integerData)
    {
        $this->IntegerData = $integerData;
    
        return $this;
    }

    /**
     * Get IntegerData
     *
     * @return integer 
     */
    public function getIntegerData()
    {
        return $this->IntegerData;
    }

    /**
     * Set DefTest1
     *
     * @param boolean $defTest1
     * @return Watertank
     */
    public function setDefTest1($defTest1)
    {
        $this->DefTest1 = $defTest1;
    
        return $this;
    }

    /**
     * Get DefTest1
     *
     * @return boolean 
     */
    public function getDefTest1()
    {
        return $this->DefTest1;
    }

    /**
     * Set systemuser
     *
     * @param \Arte\ObertestBundle\Entity\SystemUser $systemuser
     * @return Watertank
     */
    public function setSystemuser(\Arte\ObertestBundle\Entity\SystemUser $systemuser = null)
    {
        $this->systemuser = $systemuser;
    
        return $this;
    }

    /**
     * Get systemuser
     *
     * @return \Arte\ObertestBundle\Entity\SystemUser 
     */
    public function getSystemuser()
    {
        return $this->systemuser;
    }
}
