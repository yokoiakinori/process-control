<?php

namespace ProcessControl\dao;

use ProcessControl\common\Db;
use ProcessControl\model\UserModel;

class UserDao
{
    public static function getDaoFromUserId($intUserId,$intDeleteFlag = null)
    {
        $sql = "SELECT ";
        $sql .= "`id`";
        $sql .= ", `name`";
        $sql .= ", `email`";
        $sql .= ", `password`";
        $sql .= ", `token`";
        $sql .= ", `login_failure_count`";
        $sql .= ", `login_failure_datetime`";
        $sql .= ", `delete_flag`";
        $sql .= ", `position_id`";
        $sql .= ", `team_id` ";
        $sql .= "FROM `user` ";
        $sql .= "WHERE `id` = :id ";

        $arr = array();
        $arr[':id'] = $intUserId;
        if(!is_null($intDeleteFlag)&&in_array($intDeleteFlag,array(0,1))){
            $sql .= "AND `delete_flag` = :delete_flag ";
            $arr[':delete_flag'] = $intDeleteFlag;
        }

        return Db::select($sql,$arr);
    }

    public static function getDaoFromEmail($strEmail,$intDeleteFlag = null)
    {
        $sql = "SELECT ";
        $sql .= "`id`";
        $sql .= ", `name`";
        $sql .= ", `email`";
        $sql .= ", `password`";
        $sql .= ", `token`";
        $sql .= ", `login_failure_count`";
        $sql .= ", `login_failure_datetime`";
        $sql .= ", `delete_flag`";
        $sql .= ", `position_id`";
        $sql .= ", `team_id` ";
        $sql .= "FROM `user` ";
        $sql .= "WHERE `email` = :email ";

        $arr = array();
        $arr[':email'] = $strEmail;
        if(!is_null($intDeleteFlag)&&in_array($intDeleteFlag,array(0,1))){
            $sql .= "AND `delete_flag` = :delete_flag ";
            $arr[':delete_flag'] = $intDeleteFlag;
        }

        return Db::select($sql,$arr);
    }

    public static function getDaoFromToken($token)
    {
        $sql = "SELECT ";
        $sql .= "`id`";
        $sql .= ", `name`";
        $sql .= ", `email`";
        $sql .= ", `password`";
        $sql .= ", `token`";
        $sql .= ", `login_failure_count`";
        $sql .= ", `login_failure_datetime`";
        $sql .= ", `delete_flag`";
        $sql .= ", `position_id`";
        $sql .= ", `team_id` ";
        $sql .= "FROM `user` ";
        $sql .= "WHERE `token` = :token ";
        $sql .= "WHERE `delete_flag` = 0 ";

        $arr = array();
        $arr[':token'] = $token;
        return Db::select($sql,$arr);
    }

    public static function save(UserModel $objUserModel)
    {
        $sql = "UPDATE ";
        $sql .= "`user` ";
        $sql .= "SET ";
        $sql .= ", `name` = :name ";
        $sql .= ", `email` = :email ";
        $sql .= ", `password` = :password ";
        $sql .= ", `token` = :token";
        $sql .= ", `login_failure_count` = :login_failure_count ";
        $sql .= ", `login_failure_datetime` = :login_failure_datetime ";
        $sql .= ", `delete_flag` = :delete_flag ";
        $sql .= ", `position_id` = :position_id ";
        $sql .= ", `team_id` = :team_id ";
        $sql .= "WHERE `id` = :id ";

        $arr = array();
        $arr[':id'] = $objUserModel->getId();
        $arr[':name'] = $objUserModel->getName();
        $arr[':email'] = $objUserModel->getEmail();
        $arr[':password'] = $objUserModel->getPassword();
        $arr[':token'] = $objUserModel->getToken();
        $arr[':login_failure_count'] = $objUserModel->getLogin_failure_count();
        $arr[':login_failure_datetime'] = $objUserModel->getLogin_failure_datetime();
        $arr[':delete_flag'] = $objUserModel->getDelete_flag();
        $arr[':position_id'] = $objUserModel->getPosition_id();
        $arr[':team_id'] = $objUserModel->getTeam_id();

        return Db::update($sql,$arr);
    }

    public static function insert(UserModel $objUserModel)
    {
        $sql = "INSERT INTO ";
        $sql .= "`user` ";
        $sql .= "(";
        $sql .= "`id`";
        $sql .= ", `name`";
        $sql .= ", `email`";
        $sql .= ", `password`";
        $sql .= ", `token`";
        $sql .= ", `login_failure_count`";
        $sql .= ", `login_failure_datetime`";
        $sql .= ", `delete_flag`";
        $sql .= ", `position_id`";
        $sql .= ", `team_id`";
        $sql .= ") VALUES (";
        $sql .= "NULL ";
        $sql .= ", :name ";
        $sql .= ", :email ";
        $sql .= ", :password ";
        $sql .= ", :token ";
        $sql .= ", :login_failure_count ";
        $sql .= ", :login_failure_datetime ";
        $sql .= ", :delete_flag ";
        $sql .= ", :position_id ";
        $sql .= ", :team_id ";
        $sql .= "FROM `user` ";
        $sql .= "WHERE `email` = :email ";
        $sql .= ")";

        $arr = array();
        $arr[':id'] = $objUserModel->getId();
        $arr[':name'] = $objUserModel->getName();
        $arr[':email'] = $objUserModel->getEmail();
        $arr[':password'] = $objUserModel->getPassword();
        $arr[':token'] = $objUserModel->getToken();
        $arr[':login_failure_count'] = $objUserModel->getLogin_failure_count();
        $arr[':login_failure_datetime'] = $objUserModel->getLogin_failure_datetime();
        $arr[':delete_flag'] = $objUserModel->getDelete_flag();
        $arr[':position_id'] = $objUserModel->getPosition_id();
        $arr[':team_id'] = $objUserModel->getTeam_id();

        return Db::insert($sql,$arr);
    }
}
