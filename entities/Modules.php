<?php



use Doctrine\ORM\Mapping as ORM;

/**
 * Modules
 */
class Modules
{
    /**
     * @var boolean
     */
    private $active;

    /**
     * @var string
     */
    private $section;

    /**
     * @var integer
     */
    private $moduleId;


    /**
     * Set active
     *
     * @param boolean $active
     * @return Modules
     */
    public function setActive($active)
    {
        $this->active = $active;

        return $this;
    }

    /**
     * Get active
     *
     * @return boolean 
     */
    public function getActive()
    {
        return $this->active;
    }

    /**
     * Set section
     *
     * @param string $section
     * @return Modules
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
     * Get moduleId
     *
     * @return integer 
     */
    public function getModuleId()
    {
        return $this->moduleId;
    }
}
