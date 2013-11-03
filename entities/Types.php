<?php



use Doctrine\ORM\Mapping as ORM;

/**
 * Types
 */
class Types
{
    /**
     * @var string
     */
    private $name;

    /**
     * @var integer
     */
    private $typeId;


    /**
     * Set name
     *
     * @param string $name
     * @return Types
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
     * Get typeId
     *
     * @return integer 
     */
    public function getTypeId()
    {
        return $this->typeId;
    }
}
