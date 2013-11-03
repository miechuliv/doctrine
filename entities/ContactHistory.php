<?php



use Doctrine\ORM\Mapping as ORM;

/**
 * ContactHistory
 */
class ContactHistory
{
    /**
     * @var integer
     */
    private $contactFormId;

    /**
     * @var integer
     */
    private $employeeId;

    /**
     * @var integer
     */
    private $contactId;

    /**
     * @var \DateTime
     */
    private $contactHistoryDate;

    /**
     * @var \DateTime
     */
    private $dateAdded;

    /**
     * @var string
     */
    private $comment;

    /**
     * @var integer
     */
    private $contactHistoryId;


    /**
     * Set contactFormId
     *
     * @param integer $contactFormId
     * @return ContactHistory
     */
    public function setContactFormId($contactFormId)
    {
        $this->contactFormId = $contactFormId;

        return $this;
    }

    /**
     * Get contactFormId
     *
     * @return integer 
     */
    public function getContactFormId()
    {
        return $this->contactFormId;
    }

    /**
     * Set employeeId
     *
     * @param integer $employeeId
     * @return ContactHistory
     */
    public function setEmployeeId($employeeId)
    {
        $this->employeeId = $employeeId;

        return $this;
    }

    /**
     * Get employeeId
     *
     * @return integer 
     */
    public function getEmployeeId()
    {
        return $this->employeeId;
    }

    /**
     * Set contactId
     *
     * @param integer $contactId
     * @return ContactHistory
     */
    public function setContactId($contactId)
    {
        $this->contactId = $contactId;

        return $this;
    }

    /**
     * Get contactId
     *
     * @return integer 
     */
    public function getContactId()
    {
        return $this->contactId;
    }

    /**
     * Set contactHistoryDate
     *
     * @param \DateTime $contactHistoryDate
     * @return ContactHistory
     */
    public function setContactHistoryDate($contactHistoryDate)
    {
        $this->contactHistoryDate = $contactHistoryDate;

        return $this;
    }

    /**
     * Get contactHistoryDate
     *
     * @return \DateTime 
     */
    public function getContactHistoryDate()
    {
        return $this->contactHistoryDate;
    }

    /**
     * Set dateAdded
     *
     * @param \DateTime $dateAdded
     * @return ContactHistory
     */
    public function setDateAdded($dateAdded)
    {
        $this->dateAdded = $dateAdded;

        return $this;
    }

    /**
     * Get dateAdded
     *
     * @return \DateTime 
     */
    public function getDateAdded()
    {
        return $this->dateAdded;
    }

    /**
     * Set comment
     *
     * @param string $comment
     * @return ContactHistory
     */
    public function setComment($comment)
    {
        $this->comment = $comment;

        return $this;
    }

    /**
     * Get comment
     *
     * @return string 
     */
    public function getComment()
    {
        return $this->comment;
    }

    /**
     * Get contactHistoryId
     *
     * @return integer 
     */
    public function getContactHistoryId()
    {
        return $this->contactHistoryId;
    }
}
