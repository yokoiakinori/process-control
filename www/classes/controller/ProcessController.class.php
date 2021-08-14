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
    }

    static public function jobList()
    {
        $objModel = new JobModel();
        return $objModel->getModel();
    }

    static public function jobUpdate($jobid)
    {
        if(!filter_input_array(INPUT_POST)){
            return;
        }

        Csrf::check(filter_input(INPUT_POST, 'csrf_token'));
        $repId=intval(filter_input(INPUT_POST,'rep_id'));


        $updateObj = [
            "id" => $jobid,
            "name" => filter_input(INPUT_POST,'name'),
            "overview" => filter_input(INPUT_POST,'overview'),
            "dead_line" => filter_input(INPUT_POST,'dead_line'),
            "rep_id" => $repId,
        ];
        if($updateObj["name"] == ''||$updateObj["overview"] == ''||$updateObj["dead_line"] == ''||$updateObj["rep_id"]==''){
            return;
        }

        Db::transaction();
        ProcessDao::update($updateObj);
        Db::commit();
    }

    static public function jobDelete($jobid)
    {
        Db::transaction();
        ProcessDao::delete($jobid);
        Db::commit();
    }

    static public function taskList()
    {
        $objModel = new JobModel();
        $loginUser=LoginController::getLoginUser();
        $repid=$loginUser->getId();
        return $objModel->getTaskModel(intval($repid));
    }

    static public function processNameList()
    {
        return ProcessDao::getProcessNameDao();
    }
}
