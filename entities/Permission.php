<?php



use Doctrine\ORM\Mapping as ORM;

/**
 * Permission
 */
class Permission
{
    /**
     * @var string
     */
    private $controller;

    /**
     * @var string
     */
    private $action;

    /**
     * @var integer
     */
    private $roleId;

    /**
     * @var integer
     */
    private $permissionId;


    /**
     * Set controller
     *
     * @param string $controller
     * @return Permission
     */
    public function setController($controller)
    {
        $this->controller = $controller;

        return $this;
    }

    /**
     * Get controller
     *
     * @return string 
     */
    public function getController()
    {
        return $this->controller;
    }

    /**
     * Set action
     *
     * @param string $action
     * @return Permission
     */
    public function setAction($action)
    {
        $this->action = $action;

        return $this;
    }

    /**
     * Get action
     *
     * @return string 
     */
    public function getAction()
    {
        return $this->action;
    }

    /**
     * Set roleId
     *
     * @param integer $roleId
     * @return Permission
     */
    public function setRoleId($roleId)
    {
        $this->roleId = $roleId;

        return $this;
    }

    /**
     * Get roleId
     *
     * @return integer 
     */
    public function getRoleId()
    {
        return $this->roleId;
    }

    /**
     * Get permissionId
     *
     * @return integer 
     */
    public function getPermissionId()
    {
        return $this->permissionId;
    }
}
