<?php

namespace ProcessControl\model;

use DateTime;
use ProcessControl\dao\UserDao;
final class UserModel extends UserModelBase
{
    const LOCK_COUNT = 3;
    const LOCK_MINUTE = 30;//分

    public function getModelByEmail($email)
    {
       $dao = UserDao::getDaoFromEmail($email);
       return (isset($dao[0]))?$this->setProperty(reset($dao)):null;
    }
    public function checkPassword($password)
    {
        $hash = $this->getPassword();
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

            if(self::LOCK_COUNT === 1 + $count){
                $token = sha1(uniqid());
                $this->setToken($token);
            }
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
    public function getModelByToken($token)
    {
        $dao = UserDao::getDaoFromToken($token);
        return (isset($dao[0]))?$this->setProperty(reset($dao)):null;
    }
}
?>
