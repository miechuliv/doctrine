<?php



use Doctrine\ORM\Mapping as ORM;

/**
 * Sources
 */
class Sources
{
    /**
     * @var string
     */
    private $name;

    /**
     * @var integer
     */
    private $sourceId;


    /**
     * Set name
     *
     * @param string $name
     * @return Sources
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
     * Get sourceId
     *
     * @return integer 
     */
    public function getSourceId()
    {
        return $this->sourceId;
    }
}
