<?php



use Doctrine\ORM\Mapping as ORM;

/**
 * Tax
 */
class Tax
{
    /**
     * @var integer
     */
    private $rate;

    /**
     * @var string
     */
    private $name;

    /**
     * @var integer
     */
    private $taxId;


    /**
     * Set rate
     *
     * @param integer $rate
     * @return Tax
     */
    public function setRate($rate)
    {
        $this->rate = $rate;

        return $this;
    }

    /**
     * Get rate
     *
     * @return integer 
     */
    public function getRate()
    {
        return $this->rate;
    }

    /**
     * Set name
     *
     * @param string $name
     * @return Tax
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
     * Get taxId
     *
     * @return integer 
     */
    public function getTaxId()
    {
        return $this->taxId;
    }
}
