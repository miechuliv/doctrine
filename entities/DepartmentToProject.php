<?php



use Doctrine\ORM\Mapping as ORM;

/**
 * DepartmentToProject
 */
class DepartmentToProject
{
    /**
     * @var integer
     */
    private $projectId;

    /**
     * @var integer
     */
    private $departnemtId;

    /**
     * @var integer
     */
    private $departmentToProjectId;


    /**
     * Set projectId
     *
     * @param integer $projectId
     * @return DepartmentToProject
     */
    public function setProjectId($projectId)
    {
        $this->projectId = $projectId;

        return $this;
    }

    /**
     * Get projectId
     *
     * @return integer 
     */
    public function getProjectId()
    {
        return $this->projectId;
    }

    /**
     * Set departnemtId
     *
     * @param integer $departnemtId
     * @return DepartmentToProject
     */
    public function setDepartnemtId($departnemtId)
    {
        $this->departnemtId = $departnemtId;

        return $this;
    }

    /**
     * Get departnemtId
     *
     * @return integer 
     */
    public function getDepartnemtId()
    {
        return $this->departnemtId;
    }

    /**
     * Get departmentToProjectId
     *
     * @return integer 
     */
    public function getDepartmentToProjectId()
    {
        return $this->departmentToProjectId;
    }
}
