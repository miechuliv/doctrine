<?php



use Doctrine\ORM\Mapping as ORM;

/**
 * Manufacturer
 */
class Manufacturer
{
    /**
     * @var string
     */
    private $name;

    /**
     * @var string
     */
    private $country;

    /**
     * @var integer
     */
    private $mainContact;

    /**
     * @var integer
     */
    private $manufacturerId;


    /**
     * Set name
     *
     * @param string $name
     * @return Manufacturer
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
     * Set country
     *
     * @param string $country
     * @return Manufacturer
     */
    public function setCountry($country)
    {
        $this->country = $country;

        return $this;
    }

    /**
     * Get country
     *
     * @return string 
     */
    public function getCountry()
    {
        return $this->country;
    }

    /**
     * Set mainContact
     *
     * @param integer $mainContact
     * @return Manufacturer
     */
    public function setMainContact($mainContact)
    {
        $this->mainContact = $mainContact;

        return $this;
    }

    /**
     * Get mainContact
     *
     * @return integer 
     */
    public function getMainContact()
    {
        return $this->mainContact;
    }

    /**
     * Get manufacturerId
     *
     * @return integer 
     */
    public function getManufacturerId()
    {
        return $this->manufacturerId;
    }
}
