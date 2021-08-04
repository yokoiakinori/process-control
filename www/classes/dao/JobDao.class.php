<?php

namespace ProcessControl\dao;

use ProcessControl\common\Db;
use ProcessControl\model\JobModel;

class JobDao
{
    public static function insert(JobModel $objJobModel)
    {
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
        $arr[':id'] = $objJobModel->getId();
        $arr[':name'] = $objJobModel->getName();
        $arr[':overview'] = $objJobModel->getEmail();
        $arr[':dead_line'] = $objJobModel->getPassword();
        $arr[':rep_id'] = $objJobModel->getToken();
        $arr[':login_failure_count'] = $objJobModel->getLogin_failure_count();
        $arr[':login_failure_datetime'] = $objJobModel->getLogin_failure_datetime();
        $arr[':delete_flag'] = $objJobModel->getDelete_flag();
        $arr[':position_id'] = $objJobModel->getPosition_id();
        $arr[':team_id'] = $objJobModel->getTeam_id();

        return Db::insert($sql,$arr);
    }
}
