<?php

namespace ProcessControl\dao;

use ProcessControl\common\Db;
use ProcessControl\model\JobModel;

class ProcessDao
{
    public static function insert($insertObj)
    {
        $sql = "INSERT INTO ";
        $sql .= "`process` ";
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
        $arr[':start_time'] = date('Y-m-d H:i:s');
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

    public static function getProcessNameDao()
    {
        $sql = "SELECT ";
        $sql .= "`id`";
        $sql .= ", `name`";
        $sql .= " FROM ";
        $sql .= " `process_name` ";

        return Db::all($sql);
    }

    public static function finish($objJobModel)
    {
        $sql = "UPDATE ";
        $sql .= "`process` ";
        $sql .= "SET ";
        $sql .= "`end_time` = :end_time ";
        $sql .= "WHERE `id` = :id ";

        $arr = array();
        $arr[':id'] = $objJobModel["id"];
        $arr[':end_time'] = date('Y-m-d H:i:s');

        return Db::update($sql,$arr);
    }

    public static function edit($objJobModel)
    {
        $sql = "UPDATE ";
        $sql .= "`process` ";
        $sql .= "SET ";
        $sql .= "`start_time` = :start_time ";
        $sql .= ", `end_time` = :end_time ";
        $sql .= "WHERE `id` = :id ";

        $arr = array();
        $arr[':id'] = $objJobModel["id"];
        $arr[':start_time'] = $objJobModel["start_time"];
        $arr[':end_time'] = $objJobModel["end_time"];

        return Db::update($sql,$arr);
    }

    public static function delete($id)
    {
        $sql = "DELETE ";
        $sql .= "FROM ";
        $sql .= "`process` ";
        $sql .= "WHERE `id` = :id ";

        $arr = array();
        $arr[':id'] = $id;

        return Db::delete($sql,$arr);
    }
}
