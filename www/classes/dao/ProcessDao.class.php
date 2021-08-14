<?php

namespace ProcessControl\dao;

use ProcessControl\common\Db;
use ProcessControl\model\JobModel;

class ProcessDao
{
    public static function insert($insertObj)
    {
        $sql = "INSERT INTO ";
        $sql .= "`job` ";
        $sql .= "(";
        $sql .= "`id`";
        $sql .= ", `start_time`";
        $sql .= ", `end_time`";
        $sql .= ", `process_id`";
        $sql .= ", `job_id`";
        $sql .= ") VALUES (";
        $sql .= "NULL ";
        $sql .= ", :start_time ";
        $sql .= ", NULL ";
        $sql .= ", :process_id ";
        $sql .= ", :job_id ";
        $sql .= ")";

        $arr = array();
        $arr[':start_time'] = $insertObj["start_time"];
        $arr[':process_id'] = $insertObj["process_id"];
        $arr[':job_id'] = $insertObj["job_id"];

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

    public static function getProcessNameDao()
    {
        $sql = "SELECT ";
        $sql .= "`id`";
        $sql .= ", `name`";
        $sql .= " FROM ";
        $sql .= " `process_name` ";

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
