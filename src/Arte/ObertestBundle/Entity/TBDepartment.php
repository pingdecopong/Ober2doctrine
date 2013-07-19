<?php

namespace Arte\ObertestBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * TBDepartment
 */
class TBDepartment
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
     * @var integer
     */
    private $SortNo;

    /**
     * @var boolean
     */
    private $DeleteFlug;

    /**
     * @var integer
     */
    private $CreatedUserId;

    /**
     * @var \DateTime
     */
    private $CreatedDatetime;

    /**
     * @var integer
     */
    private $UpdatedUserId;

    /**
     * @var \DateTime
     */
    private $UpdatedDatetime;

    /**
     * @var \Doctrine\Common\Collections\Collection
     */
    private $TBSystemUsersDepartmentId;

    /**
     * @var \Arte\ObertestBundle\Entity\TBSystemUser
     */
    private $TBSystemUserUpdatedUserId;

    /**
     * @var \Arte\ObertestBundle\Entity\TBSystemUser
     */
    private $TBSystemUserCreatedUserId;

    /**
     * Constructor
     */
    public function __construct()
    {
        $this->TBSystemUsersDepartmentId = new \Doctrine\Common\Collections\ArrayCollection();
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
     * @return TBDepartment
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
     * Set SortNo
     *
     * @param integer $sortNo
     * @return TBDepartment
     */
    public function setSortNo($sortNo)
    {
        $this->SortNo = $sortNo;
    
        return $this;
    }

    /**
     * Get SortNo
     *
     * @return integer 
     */
    public function getSortNo()
    {
        return $this->SortNo;
    }

    /**
     * Set DeleteFlug
     *
     * @param boolean $deleteFlug
     * @return TBDepartment
     */
    public function setDeleteFlug($deleteFlug)
    {
        $this->DeleteFlug = $deleteFlug;
    
        return $this;
    }

    /**
     * Get DeleteFlug
     *
     * @return boolean 
     */
    public function getDeleteFlug()
    {
        return $this->DeleteFlug;
    }

    /**
     * Set CreatedUserId
     *
     * @param integer $createdUserId
     * @return TBDepartment
     */
    public function setCreatedUserId($createdUserId)
    {
        $this->CreatedUserId = $createdUserId;
    
        return $this;
    }

    /**
     * Get CreatedUserId
     *
     * @return integer 
     */
    public function getCreatedUserId()
    {
        return $this->CreatedUserId;
    }

    /**
     * Set CreatedDatetime
     *
     * @param \DateTime $createdDatetime
     * @return TBDepartment
     */
    public function setCreatedDatetime($createdDatetime)
    {
        $this->CreatedDatetime = $createdDatetime;
    
        return $this;
    }

    /**
     * Get CreatedDatetime
     *
     * @return \DateTime 
     */
    public function getCreatedDatetime()
    {
        return $this->CreatedDatetime;
    }

    /**
     * Set UpdatedUserId
     *
     * @param integer $updatedUserId
     * @return TBDepartment
     */
    public function setUpdatedUserId($updatedUserId)
    {
        $this->UpdatedUserId = $updatedUserId;
    
        return $this;
    }

    /**
     * Get UpdatedUserId
     *
     * @return integer 
     */
    public function getUpdatedUserId()
    {
        return $this->UpdatedUserId;
    }

    /**
     * Set UpdatedDatetime
     *
     * @param \DateTime $updatedDatetime
     * @return TBDepartment
     */
    public function setUpdatedDatetime($updatedDatetime)
    {
        $this->UpdatedDatetime = $updatedDatetime;
    
        return $this;
    }

    /**
     * Get UpdatedDatetime
     *
     * @return \DateTime 
     */
    public function getUpdatedDatetime()
    {
        return $this->UpdatedDatetime;
    }

    /**
     * Add TBSystemUsersDepartmentId
     *
     * @param \Arte\ObertestBundle\Entity\TBSystemUser $tBSystemUsersDepartmentId
     * @return TBDepartment
     */
    public function addTBSystemUsersDepartmentId(\Arte\ObertestBundle\Entity\TBSystemUser $tBSystemUsersDepartmentId)
    {
        $this->TBSystemUsersDepartmentId[] = $tBSystemUsersDepartmentId;
    
        return $this;
    }

    /**
     * Remove TBSystemUsersDepartmentId
     *
     * @param \Arte\ObertestBundle\Entity\TBSystemUser $tBSystemUsersDepartmentId
     */
    public function removeTBSystemUsersDepartmentId(\Arte\ObertestBundle\Entity\TBSystemUser $tBSystemUsersDepartmentId)
    {
        $this->TBSystemUsersDepartmentId->removeElement($tBSystemUsersDepartmentId);
    }

    /**
     * Get TBSystemUsersDepartmentId
     *
     * @return \Doctrine\Common\Collections\Collection 
     */
    public function getTBSystemUsersDepartmentId()
    {
        return $this->TBSystemUsersDepartmentId;
    }

    /**
     * Set TBSystemUserUpdatedUserId
     *
     * @param \Arte\ObertestBundle\Entity\TBSystemUser $tBSystemUserUpdatedUserId
     * @return TBDepartment
     */
    public function setTBSystemUserUpdatedUserId(\Arte\ObertestBundle\Entity\TBSystemUser $tBSystemUserUpdatedUserId = null)
    {
        $this->TBSystemUserUpdatedUserId = $tBSystemUserUpdatedUserId;
    
        return $this;
    }

    /**
     * Get TBSystemUserUpdatedUserId
     *
     * @return \Arte\ObertestBundle\Entity\TBSystemUser 
     */
    public function getTBSystemUserUpdatedUserId()
    {
        return $this->TBSystemUserUpdatedUserId;
    }

    /**
     * Set TBSystemUserCreatedUserId
     *
     * @param \Arte\ObertestBundle\Entity\TBSystemUser $tBSystemUserCreatedUserId
     * @return TBDepartment
     */
    public function setTBSystemUserCreatedUserId(\Arte\ObertestBundle\Entity\TBSystemUser $tBSystemUserCreatedUserId = null)
    {
        $this->TBSystemUserCreatedUserId = $tBSystemUserCreatedUserId;
    
        return $this;
    }

    /**
     * Get TBSystemUserCreatedUserId
     *
     * @return \Arte\ObertestBundle\Entity\TBSystemUser 
     */
    public function getTBSystemUserCreatedUserId()
    {
        return $this->TBSystemUserCreatedUserId;
    }
}
