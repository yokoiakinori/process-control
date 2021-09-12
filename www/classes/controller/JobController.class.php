<?php

namespace ProcessControl\controller;
use \ProcessControl\model\JobModel;
use \ProcessControl\common\Db;
use \ProcessControl\controller\LoginController;
use \ProcessControl\dao\JobDao;
use \ProcessControl\common\InvalidErrorException;
use \ProcessControl\common\ExceptionCode;
use \ProcessControl\common\Csrf;
use ProcessControl\model\UserModel;

class JobController
{
    static public function jobCreate()
    {
        if(!filter_input_array(INPUT_POST)){
            return;
        }

        Csrf::check(filter_input(INPUT_POST, 'csrf_token'));

        $insertObj = [
            "name" => filter_input(INPUT_POST,'name'),
            "overview" => filter_input(INPUT_POST,'overview'),
            "dead_line" => filter_input(INPUT_POST,'dead_line'),
            "client_id" => filter_input(INPUT_POST,'client_id'),
            "quantity" => filter_input(INPUT_POST,'quantity'),
        ];
        if($insertObj["name"] == ''||$insertObj["overview"] == ''||$insertObj["dead_line"] == ''||$insertObj["client_id"] == ''||$insertObj["quantity"] == ''){
            return;
        }

        Db::transaction();
        JobDao::insert($insertObj);
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
        JobDao::update($updateObj);
        Db::commit();
    }

    static public function jobDelete($jobid)
    {
        Db::transaction();
        JobDao::delete($jobid);
        Db::commit();
    }

    static public function jobReference()
    {
        if(!filter_input_array(INPUT_POST)){
            return;
        }

        Csrf::check(filter_input(INPUT_POST, 'csrf_token'));

        $referenceObj = [
            "name" => filter_input(INPUT_POST,'name'),
            "overview" => filter_input(INPUT_POST,'overview'),
            "dead_line" => filter_input(INPUT_POST,'dead_line'),
            "client_id" => filter_input(INPUT_POST,'client_id'),
            "quantity" => filter_input(INPUT_POST,'quantity'),
        ];

        return JobDao::referenceJobDao($referenceObj);
    }

    static public function taskList()
    {
        $objModel = new JobModel();
        $loginUser=LoginController::getLoginUser();
        $repid=$loginUser->getId();
        return $objModel->getTaskModel(intval($repid));
    }

    static public function processTotalTimeList()
    {
        $objModel = new JobModel();
        $loginUser=LoginController::getLoginUser();
        $repid=$loginUser->getId();
        return $objModel->getProcessTotalTimeModel(intval($repid));
    }

    static public function clientList()
    {
        return JobDao::getClientDao();
    }
}
