<?php

namespace ProcessControl\model;
final class UserModel
{
    private $_id=null;
    private $_name=null;
    private $_email=null;
    private $_password=null;
    private $_token=null;
    private $_login_failure_count=null;
    private $_login_failure_datetime=null;
    private $_delete_flag=null;
    private $_position_id=null;
    private $_team_id=null;

    
    public function setId($id)
    {
        $this->_id = $id;
        return $this;
    }
    public function setName($name)
    {
        $this->_name = $name;
        return $this;
    }
    public function setEmail($email)
    {
        $this->_email = $email;
        return $this;
    }
    public function setPassword($password)
    {
        $this->_password = $password;
        return $this;
    }
    public function setToken($token)
    {
        $this->_token = $token;
        return $this;
    }
    public function setLogin_failure_count($login_failure_count)
    {
        $this->_login_failure_count = $login_failure_count;
        return $this;
    }
    public function setLogin_failure_datetime($login_failure_datetime)
    {
        $this->_login_failure_datetime = $login_failure_datetime;
        return $this;
    }
    public function setDelete_flag($delete_flag)
    {
        $this->_delete_flag = $delete_flag;
        return $this;
    }
    public function setPosition_id($position_id)
    {
        $this->_position_id = $position_id;
        return $this;
    }
    public function setTeam_id($team_id)
    {
        $this->_team_id = $team_id;
        return $this;
    }


    public function getId()
    {
        return $this->_id;
    }
    public function getName()
    {
        return $this->_name;
    }
    public function getEmail()
    {
        return $this->_email;
    }
    public function getPassword()
    {
        return $this->_password;
    }
    public function getToken()
    {
        return $this->_token;
    }
    public function getLogin_failure_count()
    {
        return $this->_login_failure_count;
    }
    public function getLogin_failure_datetime()
    {
        return $this->_login_failure_datetime;
    }
    public function getDelete_flag()
    {
        return $this->_delete_flag;
    }
    public function getPosition_id()
    {
        return $this->_position_id;
    }
    public function getTeam_id()
    {
        return $this->_team_id;
    }
}
?>
