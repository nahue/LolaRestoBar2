<?php



/**
 * cisessions
 */
class cisessions
{
    /**
     * @var string $session_id
     */
    private $session_id;

    /**
     * @var string $ip_address
     */
    private $ip_address;

    /**
     * @var string $user_agent
     */
    private $user_agent;

    /**
     * @var integer $last_activity
     */
    private $last_activity;

    /**
     * @var string $user_data
     */
    private $user_data;

    /**
     * Get session_id
     *
     * @return string $sessionId
     */
    public function getSessionId()
    {
        return $this->session_id;
    }

    /**
     * Set ip_address
     *
     * @param string $ipAddress
     */
    public function setIpAddress($ipAddress)
    {
        $this->ip_address = $ipAddress;
    }

    /**
     * Get ip_address
     *
     * @return string $ipAddress
     */
    public function getIpAddress()
    {
        return $this->ip_address;
    }

    /**
     * Set user_agent
     *
     * @param string $userAgent
     */
    public function setUserAgent($userAgent)
    {
        $this->user_agent = $userAgent;
    }

    /**
     * Get user_agent
     *
     * @return string $userAgent
     */
    public function getUserAgent()
    {
        return $this->user_agent;
    }

    /**
     * Set last_activity
     *
     * @param integer $lastActivity
     */
    public function setLastActivity($lastActivity)
    {
        $this->last_activity = $lastActivity;
    }

    /**
     * Get last_activity
     *
     * @return integer $lastActivity
     */
    public function getLastActivity()
    {
        return $this->last_activity;
    }

    /**
     * Set user_data
     *
     * @param string $userData
     */
    public function setUserData($userData)
    {
        $this->user_data = $userData;
    }

    /**
     * Get user_data
     *
     * @return string $userData
     */
    public function getUserData()
    {
        return $this->user_data;
    }
}