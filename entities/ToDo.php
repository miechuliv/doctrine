<?php



use Doctrine\ORM\Mapping as ORM;

/**
 * ToDo
 */
class ToDo
{
    /**
     * @var string
     */
    private $name;

    /**
     * @var string
     */
    private $description;

    /**
     * @var integer
     */
    private $contactAssigned;

    /**
     * @var integer
     */
    private $employeeAssigned;

    /**
     * @var \DateTime
     */
    private $dateAssigned;

    /**
     * @var \DateTime
     */
    private $dateOfEvent;

    /**
     * @var integer
     */
    private $priorityId;

    /**
     * @var integer
     */
    private $reminderId;

    /**
     * @var boolean
     */
    private $remind;

    /**
     * @var integer
     */
    private $addedBy;

    /**
     * @var integer
     */
    private $statusId;

    /**
     * @var integer
     */
    private $todoId;


    /**
     * Set name
     *
     * @param string $name
     * @return ToDo
     */
    public function setName($name)
    {
        $this->name = $name;

        return $this;
    }

    /**
     * Get name
     *
     * @return string 
     */
    public function getName()
    {
        return $this->name;
    }

    /**
     * Set description
     *
     * @param string $description
     * @return ToDo
     */
    public function setDescription($description)
    {
        $this->description = $description;

        return $this;
    }

    /**
     * Get description
     *
     * @return string 
     */
    public function getDescription()
    {
        return $this->description;
    }

    /**
     * Set contactAssigned
     *
     * @param integer $contactAssigned
     * @return ToDo
     */
    public function setContactAssigned($contactAssigned)
    {
        $this->contactAssigned = $contactAssigned;

        return $this;
    }

    /**
     * Get contactAssigned
     *
     * @return integer 
     */
    public function getContactAssigned()
    {
        return $this->contactAssigned;
    }

    /**
     * Set employeeAssigned
     *
     * @param integer $employeeAssigned
     * @return ToDo
     */
    public function setEmployeeAssigned($employeeAssigned)
    {
        $this->employeeAssigned = $employeeAssigned;

        return $this;
    }

    /**
     * Get employeeAssigned
     *
     * @return integer 
     */
    public function getEmployeeAssigned()
    {
        return $this->employeeAssigned;
    }

    /**
     * Set dateAssigned
     *
     * @param \DateTime $dateAssigned
     * @return ToDo
     */
    public function setDateAssigned($dateAssigned)
    {
        $this->dateAssigned = $dateAssigned;

        return $this;
    }

    /**
     * Get dateAssigned
     *
     * @return \DateTime 
     */
    public function getDateAssigned()
    {
        return $this->dateAssigned;
    }

    /**
     * Set dateOfEvent
     *
     * @param \DateTime $dateOfEvent
     * @return ToDo
     */
    public function setDateOfEvent($dateOfEvent)
    {
        $this->dateOfEvent = $dateOfEvent;

        return $this;
    }

    /**
     * Get dateOfEvent
     *
     * @return \DateTime 
     */
    public function getDateOfEvent()
    {
        return $this->dateOfEvent;
    }

    /**
     * Set priorityId
     *
     * @param integer $priorityId
     * @return ToDo
     */
    public function setPriorityId($priorityId)
    {
        $this->priorityId = $priorityId;

        return $this;
    }

    /**
     * Get priorityId
     *
     * @return integer 
     */
    public function getPriorityId()
    {
        return $this->priorityId;
    }

    /**
     * Set reminderId
     *
     * @param integer $reminderId
     * @return ToDo
     */
    public function setReminderId($reminderId)
    {
        $this->reminderId = $reminderId;

        return $this;
    }

    /**
     * Get reminderId
     *
     * @return integer 
     */
    public function getReminderId()
    {
        return $this->reminderId;
    }

    /**
     * Set remind
     *
     * @param boolean $remind
     * @return ToDo
     */
    public function setRemind($remind)
    {
        $this->remind = $remind;

        return $this;
    }

    /**
     * Get remind
     *
     * @return boolean 
     */
    public function getRemind()
    {
        return $this->remind;
    }

    /**
     * Set addedBy
     *
     * @param integer $addedBy
     * @return ToDo
     */
    public function setAddedBy($addedBy)
    {
        $this->addedBy = $addedBy;

        return $this;
    }

    /**
     * Get addedBy
     *
     * @return integer 
     */
    public function getAddedBy()
    {
        return $this->addedBy;
    }

    /**
     * Set statusId
     *
     * @param integer $statusId
     * @return ToDo
     */
    public function setStatusId($statusId)
    {
        $this->statusId = $statusId;

        return $this;
    }

    /**
     * Get statusId
     *
     * @return integer 
     */
    public function getStatusId()
    {
        return $this->statusId;
    }

    /**
     * Get todoId
     *
     * @return integer 
     */
    public function getTodoId()
    {
        return $this->todoId;
    }
}
