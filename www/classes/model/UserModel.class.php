<?php

namespace ProcessControl\model;

use DateTime;
use ProcessControl\dao\UserDao;
final class UserModel
{
    const LOCK_COUNT = 3;
    const LOCK_MINUTE = 30;//分
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


    public function getModelByEmail($email)
    {
       $dao = UserDao::getDaoFromEmail($email);
       return (isset($dao[0]))?$this->setProperty(reset($dao)):null;
    }
    public function checkPassword($password)
    {
        $hash = $this->getPassword($password);
        return password_verify($password,$hash);
    }
    public function loginFailureReset()
    {
        $count = $this->getLogin_failure_count();
        if(0 < $count){
            $this->setLogin_failure_count(0)->setLogin_failure_datetime(null);
            return $this->save();
        }
        return true;
    }
    public function loginFailureIncrement()
    {
        $count = $this->getLogin_failure_count();
        if(self::LOCK_COUNT > $count){
            $now = (new \DateTime())->format('Y-m-d H:i:s');
            $this->setLogin_failure_count(1+$count)->setLogin_failure_datetime($now);
            return $this->save();
        }
        return true;
    }
    public function isAccountLock()
    {
        $count = $this->getLogin_failure_count();
        $datetime = $this->getLogin_failure_datetime();

        $lastFailureDatetime = new \DateTime($datetime);
        $interval = new \DateInterval(
            sprintf('PT%dM',self::LOCK_MINUTE)
        );
        $lastFailureDatetime->add($interval);

        if($lastFailureDatetime > new DateTime() && self::LOCK_COUNT<=$count){
            return true;
        }
        return false;
    }


    private function setProperty(array $arrDao)
    {
        $this->setId($arrDao['id'])
        ->setName($arrDao['name'])
        ->setEmail($arrDao['email'])
        ->setPassword($arrDao['password'])
        ->setToken($arrDao['token'])
        ->setLogin_failure_count($arrDao['login_failure_count'])
        ->setLogin_failure_datetime($arrDao['login_failure_datetime'])
        ->setDelete_flag($arrDao['delete_flag'])
        ->setPosition_id($arrDao['position_id'])
        ->setTeam_id($arrDao['team_id']);
        return $this;
    }

    public function save()
    {
        return UserDao::save($this);
    }

    public function create()
    {
        return UserDao::insert($this);
    }

    
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
