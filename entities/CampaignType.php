<?php



use Doctrine\ORM\Mapping as ORM;

/**
 * CampaignType
 */
class CampaignType
{
    /**
     * @var string
     */
    private $name;

    /**
     * @var integer
     */
    private $campaignTypeId;


    /**
     * Set name
     *
     * @param string $name
     * @return CampaignType
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
     * Get campaignTypeId
     *
     * @return integer 
     */
    public function getCampaignTypeId()
    {
        return $this->campaignTypeId;
    }
}
