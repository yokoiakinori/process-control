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
        $sql .= "job.id";
        $sql .= ", job.id";
        $sql .= ", job.name";
        $sql .= ", job.overview";
        $sql .= ", job.dead_line";
        $sql .= ", job.rep_id";
        $sql .= ", job.is_finished";
        $sql .= ", job.createdat";
        $sql .= ", process.process_id";
        $sql .= ", process.start_time";
        $sql .= ", process.end_time";
        $sql .= " FROM ";
        $sql .= "`job` ";
        $sql .= "LEFT JOIN ";
        $sql .= " `process` ";
        $sql .= " ON ";
        $sql .= "job.id = process.job_id ";
        $sql .= "WHERE job.rep_id = :rep_id ";

        $arr = array();
        $arr[':rep_id'] = $repid;


        return Db::groupselect($sql,$arr);
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
