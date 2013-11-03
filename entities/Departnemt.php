<?php



use Doctrine\ORM\Mapping as ORM;

/**
 * Departnemt
 */
class Departnemt
{
    /**
     * @var string
     */
    private $name;

    /**
     * @var string
     */
    private $telephone;

    /**
     * @var integer
     */
    private $head;

    /**
     * @var integer
     */
    private $departmentId;


    /**
     * Set name
     *
     * @param string $name
     * @return Departnemt
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
     * Set telephone
     *
     * @param string $telephone
     * @return Departnemt
     */
    public function setTelephone($telephone)
    {
        $this->telephone = $telephone;

        return $this;
    }

    /**
     * Get telephone
     *
     * @return string 
     */
    public function getTelephone()
    {
        return $this->telephone;
    }

    /**
     * Set head
     *
     * @param integer $head
     * @return Departnemt
     */
    public function setHead($head)
    {
        $this->head = $head;

        return $this;
    }

    /**
     * Get head
     *
     * @return integer 
     */
    public function getHead()
    {
        return $this->head;
    }

    /**
     * Get departmentId
     *
     * @return integer 
     */
    public function getDepartmentId()
    {
        return $this->departmentId;
    }
}
