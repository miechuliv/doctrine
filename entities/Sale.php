<?php



use Doctrine\ORM\Mapping as ORM;

/**
 * Sale
 */
class Sale
{
    /**
     * @var integer
     */
    private $productId;

    /**
     * @var integer
     */
    private $contactId;

    /**
     * @var integer
     */
    private $employeeId;

    /**
     * @var \DateTime
     */
    private $dateSale;

    /**
     * @var string
     */
    private $description;

    /**
     * @var integer
     */
    private $saleMethodId;

    /**
     * @var integer
     */
    private $branchId;

    /**
     * @var integer
     */
    private $quantity;

    /**
     * @var integer
     */
    private $saleId;


    /**
     * Set productId
     *
     * @param integer $productId
     * @return Sale
     */
    public function setProductId($productId)
    {
        $this->productId = $productId;

        return $this;
    }

    /**
     * Get productId
     *
     * @return integer 
     */
    public function getProductId()
    {
        return $this->productId;
    }

    /**
     * Set contactId
     *
     * @param integer $contactId
     * @return Sale
     */
    public function setContactId($contactId)
    {
        $this->contactId = $contactId;

        return $this;
    }

    /**
     * Get contactId
     *
     * @return integer 
     */
    public function getContactId()
    {
        return $this->contactId;
    }

    /**
     * Set employeeId
     *
     * @param integer $employeeId
     * @return Sale
     */
    public function setEmployeeId($employeeId)
    {
        $this->employeeId = $employeeId;

        return $this;
    }

    /**
     * Get employeeId
     *
     * @return integer 
     */
    public function getEmployeeId()
    {
        return $this->employeeId;
    }

    /**
     * Set dateSale
     *
     * @param \DateTime $dateSale
     * @return Sale
     */
    public function setDateSale($dateSale)
    {
        $this->dateSale = $dateSale;

        return $this;
    }

    /**
     * Get dateSale
     *
     * @return \DateTime 
     */
    public function getDateSale()
    {
        return $this->dateSale;
    }

    /**
     * Set description
     *
     * @param string $description
     * @return Sale
     */
    public function setDescription($description)
    {
        $this->description = $description;

        return $this;
    }

    /**
     * Get description
     *
     * @return string 
     */
    public function getDescription()
    {
        return $this->description;
    }

    /**
     * Set saleMethodId
     *
     * @param integer $saleMethodId
     * @return Sale
     */
    public function setSaleMethodId($saleMethodId)
    {
        $this->saleMethodId = $saleMethodId;

        return $this;
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

    /**
     * Set branchId
     *
     * @param integer $branchId
     * @return Sale
     */
    public function setBranchId($branchId)
    {
        $this->branchId = $branchId;

        return $this;
    }

    /**
     * Get branchId
     *
     * @return integer 
     */
    public function getBranchId()
    {
        return $this->branchId;
    }

    /**
     * Set quantity
     *
     * @param integer $quantity
     * @return Sale
     */
    public function setQuantity($quantity)
    {
        $this->quantity = $quantity;

        return $this;
    }

    /**
     * Get quantity
     *
     * @return integer 
     */
    public function getQuantity()
    {
        return $this->quantity;
    }

    /**
     * Get saleId
     *
     * @return integer 
     */
    public function getSaleId()
    {
        return $this->saleId;
    }
}
