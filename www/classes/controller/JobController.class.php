<?php

namespace ProcessControl\controller;
use \ProcessControl\model\JobModel;
use \ProcessControl\common\Db;
use \ProcessControl\dao\JobDao;
use \ProcessControl\common\InvalidErrorException;
use \ProcessControl\common\ExceptionCode;
use \ProcessControl\common\Csrf;

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
        ];
        if($insertObj["name"] == ''||$insertObj["overview"] == ''||$insertObj["dead_line"] == ''){
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
}
