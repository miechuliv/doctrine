<?php



use Doctrine\ORM\Mapping as ORM;

/**
 * SaleMethod
 */
class SaleMethod
{
    /**
     * @var string
     */
    private $name;

    /**
     * @var integer
     */
    private $saleMethodId;


    /**
     * Set name
     *
     * @param string $name
     * @return SaleMethod
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
     * Get saleMethodId
     *
     * @return integer 
     */
    public function getSaleMethodId()
    {
        return $this->saleMethodId;
    }
}
