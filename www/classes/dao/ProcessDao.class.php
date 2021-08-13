<?php

namespace ProcessControl\dao;

use ProcessControl\common\Db;
use ProcessControl\model\JobModel;

class ProcessDao
{
    public static function insert($insertObj)
    {
        define('defaultRep',1);
        $sql = "INSERT INTO ";
        $sql .= "`job` ";
        $sql .= "(";
        $sql .= "`id`";
        $sql .= ", `name`";
        $sql .= ", `overview`";
        $sql .= ", `dead_line`";
        $sql .= ", `rep_id`";
        $sql .= ", `is_finished`";
        $sql .= ", `createdat`";
        $sql .= ", `client_id`";
        $sql .= ", `quantity`";
        $sql .= ") VALUES (";
        $sql .= "NULL ";
        $sql .= ", :name ";
        $sql .= ", :overview ";
        $sql .= ", :dead_line ";
        $sql .= ", :rep_id ";
        $sql .= ", :is_finished ";
        $sql .= ", :createdat ";
        $sql .= ", :client_id ";
        $sql .= ", :quantity ";
        $sql .= ")";

        $arr = array();
        $arr[':name'] = $insertObj["name"];
        $arr[':overview'] = $insertObj["overview"];
        $arr[':dead_line'] = $insertObj["dead_line"];
        $arr[':rep_id'] = defaultRep;
        $arr[':is_finished'] = 0;
        $arr[':createdat'] = date('Y-m-d');
        $arr[':client_id'] = $insertObj["client_id"];
        $arr[':quantity'] = $insertObj["quantity"];


        return Db::insert($sql,$arr);
    }

    public static function getDao()
    {
        $sql = "SELECT ";
        $sql .= "`id`";
        $sql .= ", `name`";
        $sql .= ", `overview`";
        $sql .= ", `dead_line`";
        $sql .= ", `rep_id`";
        $sql .= ", `is_finished`";
        $sql .= ", `createdat`";
        $sql .= " FROM ";
        $sql .= " `job` ";


        return Db::all($sql);
    }

    public static function getTaskDao($repid)
    {
        $sql = "SELECT ";
        $sql .= "`id`";
        $sql .= ", `name`";
        $sql .= ", `overview`";
        $sql .= ", `dead_line`";
        $sql .= ", `rep_id`";
        $sql .= ", `is_finished`";
        $sql .= ", `createdat`";
        $sql .= " FROM ";
        $sql .= " `job` ";
        $sql .= "WHERE `rep_id` = :rep_id ";

        $arr = array();
        $arr[':rep_id'] = $repid;


        return Db::select($sql,$arr);
    }

    public static function getClientDao()
    {
        $sql = "SELECT ";
        $sql .= "`id`";
        $sql .= ", `name`";
        $sql .= " FROM ";
        $sql .= " `client` ";

        return Db::all($sql);
    }

    public static function update($objJobModel)
    {
        $sql = "UPDATE ";
        $sql .= "`job` ";
        $sql .= "SET ";
        $sql .= "`name` = :name ";
        $sql .= ", `overview` = :overview ";
        $sql .= ", `dead_line` = :dead_line ";
        $sql .= ", `rep_id` = :rep_id ";
        $sql .= "WHERE `id` = :id ";

        $arr = array();
        $arr[':id'] = $objJobModel["id"];
        $arr[':name'] = $objJobModel["name"];
        $arr[':overview'] = $objJobModel["overview"];
        $arr[':dead_line'] = $objJobModel["dead_line"];
        $arr[':rep_id'] = $objJobModel["rep_id"];

        return Db::update($sql,$arr);
    }

    public static function delete($id)
    {
        $sql = "DELETE ";
        $sql .= "FROM ";
        $sql .= "`job` ";
        $sql .= "WHERE `id` = :id ";

        $arr = array();
        $arr[':id'] = $id;

        return Db::delete($sql,$arr);
    }
}
