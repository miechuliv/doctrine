<?php



use Doctrine\ORM\Mapping as ORM;

/**
 * Statuses
 */
class Statuses
{
    /**
     * @var string
     */
    private $name;

    /**
     * @var string
     */
    private $section;

    /**
     * @var integer
     */
    private $statusId;


    /**
     * Set name
     *
     * @param string $name
     * @return Statuses
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
     * Set section
     *
     * @param string $section
     * @return Statuses
     */
    public function setSection($section)
    {
        $this->section = $section;

        return $this;
    }

    /**
     * Get section
     *
     * @return string 
     */
    public function getSection()
    {
        return $this->section;
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
}
