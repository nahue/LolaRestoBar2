<?php



/**
 * Users
 */
class Users
{
    /**
     * @var integer $id
     */
    private $id;

    /**
     * @var integer $ip_address
     */
    private $ip_address;

    /**
     * @var string $username
     */
    private $username;

    /**
     * @var string $password
     */
    private $password;

    /**
     * @var string $salt
     */
    private $salt;

    /**
     * @var string $email
     */
    private $email;

    /**
     * @var string $activation_code
     */
    private $activation_code;

    /**
     * @var string $forgotten_password_code
     */
    private $forgotten_password_code;

    /**
     * @var string $remember_code
     */
    private $remember_code;

    /**
     * @var integer $created_on
     */
    private $created_on;

    /**
     * @var integer $last_login
     */
    private $last_login;

    /**
     * @var integer $active
     */
    private $active;

    /**
     * Get id
     *
     * @return integer $id
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * Set ip_address
     *
     * @param integer $ipAddress
     */
    public function setIpAddress($ipAddress)
    {
        $this->ip_address = $ipAddress;
    }

    /**
     * Get ip_address
     *
     * @return integer $ipAddress
     */
    public function getIpAddress()
    {
        return $this->ip_address;
    }

    /**
     * Set username
     *
     * @param string $username
     */
    public function setUsername($username)
    {
        $this->username = $username;
    }

    /**
     * Get username
     *
     * @return string $username
     */
    public function getUsername()
    {
        return $this->username;
    }

    /**
     * Set password
     *
     * @param string $password
     */
    public function setPassword($password)
    {
        $this->password = $password;
    }

    /**
     * Get password
     *
     * @return string $password
     */
    public function getPassword()
    {
        return $this->password;
    }

    /**
     * Set salt
     *
     * @param string $salt
     */
    public function setSalt($salt)
    {
        $this->salt = $salt;
    }

    /**
     * Get salt
     *
     * @return string $salt
     */
    public function getSalt()
    {
        return $this->salt;
    }

    /**
     * Set email
     *
     * @param string $email
     */
    public function setEmail($email)
    {
        $this->email = $email;
    }

    /**
     * Get email
     *
     * @return string $email
     */
    public function getEmail()
    {
        return $this->email;
    }

    /**
     * Set activation_code
     *
     * @param string $activationCode
     */
    public function setActivationCode($activationCode)
    {
        $this->activation_code = $activationCode;
    }

    /**
     * Get activation_code
     *
     * @return string $activationCode
     */
    public function getActivationCode()
    {
        return $this->activation_code;
    }

    /**
     * Set forgotten_password_code
     *
     * @param string $forgottenPasswordCode
     */
    public function setForgottenPasswordCode($forgottenPasswordCode)
    {
        $this->forgotten_password_code = $forgottenPasswordCode;
    }

    /**
     * Get forgotten_password_code
     *
     * @return string $forgottenPasswordCode
     */
    public function getForgottenPasswordCode()
    {
        return $this->forgotten_password_code;
    }

    /**
     * Set remember_code
     *
     * @param string $rememberCode
     */
    public function setRememberCode($rememberCode)
    {
        $this->remember_code = $rememberCode;
    }

    /**
     * Get remember_code
     *
     * @return string $rememberCode
     */
    public function getRememberCode()
    {
        return $this->remember_code;
    }

    /**
     * Set created_on
     *
     * @param integer $createdOn
     */
    public function setCreatedOn($createdOn)
    {
        $this->created_on = $createdOn;
    }

    /**
     * Get created_on
     *
     * @return integer $createdOn
     */
    public function getCreatedOn()
    {
        return $this->created_on;
    }

    /**
     * Set last_login
     *
     * @param integer $lastLogin
     */
    public function setLastLogin($lastLogin)
    {
        $this->last_login = $lastLogin;
    }

    /**
     * Get last_login
     *
     * @return integer $lastLogin
     */
    public function getLastLogin()
    {
        return $this->last_login;
    }

    /**
     * Set active
     *
     * @param integer $active
     */
    public function setActive($active)
    {
        $this->active = $active;
    }

    /**
     * Get active
     *
     * @return integer $active
     */
    public function getActive()
    {
        return $this->active;
    }
}