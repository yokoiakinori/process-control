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
}
