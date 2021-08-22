<?php

namespace ProcessControl\controller;
use \ProcessControl\model\JobModel;
use \ProcessControl\common\Db;
use \ProcessControl\controller\LoginController;
use \ProcessControl\dao\ProcessDao;
use \ProcessControl\common\InvalidErrorException;
use \ProcessControl\common\ExceptionCode;
use \ProcessControl\common\Csrf;
use ProcessControl\model\UserModel;

class ProcessController
{
    static public function ProcessCreate()
    {
        if(!filter_input_array(INPUT_POST)){
            return;
        }

        Csrf::check(filter_input(INPUT_POST, 'csrf_token'));

        $insertObj = [
            "process_id" => filter_input(INPUT_POST,'process_id'),
            "job_id" => filter_input(INPUT_POST,'job_id'),
        ];
        if($insertObj["process_id"] == ''||$insertObj["job_id"] == ''){
            return;
        }

        Db::transaction();
        ProcessDao::insert($insertObj);
        Db::commit();
        header('Location: /dashboard.php');
    }

    static public function ProcessFinish()
    {
        if(!filter_input_array(INPUT_POST)){
            return;
        }

        Csrf::check(filter_input(INPUT_POST, 'csrf_token'));

        $insertObj = [
            "id" => filter_input(INPUT_POST,'process_finish'),
        ];
        if($insertObj["id"] == ''){
            return;
        }

        Db::transaction();
        ProcessDao::finish($insertObj);
        Db::commit();
        header('Location: /dashboard.php');
    }

    static public function ProcessEdit()
    {
        if(!filter_input_array(INPUT_POST)){
            return;
        }

        Csrf::check(filter_input(INPUT_POST, 'csrf_token'));

        $insertObj = [
            "id" => filter_input(INPUT_POST,'process_edit'),
            "start_time" => filter_input(INPUT_POST,'start_time'),
            "end_time" => filter_input(INPUT_POST,'end_time'),
        ];
        if($insertObj["id"] == ''){
            return;
        }

        Db::transaction();
        ProcessDao::edit($insertObj);
        Db::commit();
        header('Location: /dashboard.php');
    }

    static public function processDelete($jobid)
    {
        Db::transaction();
        ProcessDao::delete($jobid);
        Db::commit();
    }

    static public function processNameList()
    {
        return ProcessDao::getProcessNameDao();
    }
}
