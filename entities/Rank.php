<?php



use Doctrine\ORM\Mapping as ORM;

/**
 * Rank
 */
class Rank
{
    /**
     * @var string
     */
    private $name;

    /**
     * @var integer
     */
    private $rankId;


    /**
     * Set name
     *
     * @param string $name
     * @return Rank
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
     * Get rankId
     *
     * @return integer 
     */
    public function getRankId()
    {
        return $this->rankId;
    }
}
