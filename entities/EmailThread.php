<?php



use Doctrine\ORM\Mapping as ORM;

/**
 * EmailThread
 */
class EmailThread
{
    /**
     * @var integer
     */
    private $messageId;

    /**
     * @var integer
     */
    private $emailThreadId;


    /**
     * Set messageId
     *
     * @param integer $messageId
     * @return EmailThread
     */
    public function setMessageId($messageId)
    {
        $this->messageId = $messageId;

        return $this;
    }

    /**
     * Get messageId
     *
     * @return integer 
     */
    public function getMessageId()
    {
        return $this->messageId;
    }

    /**
     * Get emailThreadId
     *
     * @return integer 
     */
    public function getEmailThreadId()
    {
        return $this->emailThreadId;
    }
}
