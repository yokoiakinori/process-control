<?php

namespace ProcessControl\dao;

use ProcessControl\common\Db;
use ProcessControl\model\JobModel;

class JobDao
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
        $sql .= ") VALUES (";
        $sql .= "NULL ";
        $sql .= ", :name ";
        $sql .= ", :overview ";
        $sql .= ", :dead_line ";
        $sql .= ", :rep_id ";
        $sql .= ", :is_finished ";
        $sql .= ", :createdat ";
        $sql .= ")";

        $arr = array();
        $arr[':name'] = $insertObj["name"];
        $arr[':overview'] = $insertObj["overview"];
        $arr[':dead_line'] = $insertObj["dead_line"];
        $arr[':rep_id'] = defaultRep;
        $arr[':is_finished'] = 0;
        $arr[':createdat'] = date('Y-m-d');


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

    public static function save($objJobModel)
    {
        $sql = "UPDATE ";
        $sql .= "`user` ";
        $sql .= "SET ";
        $sql .= ", `name` = :name ";
        $sql .= ", `overview` = :overview ";
        $sql .= ", `dead_line` = :dead_line ";
        $sql .= ", `rep_id` = :rep_id";
        $sql .= "WHERE `id` = :id ";

        $arr = array();
        $arr[':id'] = $objJobModel["id"];
        $arr[':name'] = $objJobModel["name"];
        $arr[':overview'] = $objJobModel["overview"];
        $arr[':dead_line'] = $objJobModel["dead_line"];
        $arr[':rep_id'] = $objJobModel["rep_id"];

        return Db::update($sql,$arr);
    }
}
