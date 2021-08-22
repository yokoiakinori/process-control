<?php
namespace ProcessControl;

use ProcessControl\common\Template;
use ProcessControl\controller\JobController;
use ProcessControl\controller\LoginController;
use ProcessControl\controller\ProcessController;

define('LAYOUT','main');
try{
    require_once '../common.php';
    LoginController::checkLogin();
    $taskList = JobController::taskList();
    Template::assign("taskList",$taskList);
    $processList = ProcessController::processNameList();
    Template::assign("processList",$processList);
    ProcessController::ProcessCreate();

    if( !empty($_POST['process_finish']) ) {
        ProcessController::ProcessFinish();
    }

    if( !empty($_POST['process_edit']) ) {
        ProcessController::ProcessEdit();
    }

    if( !empty($_GET['btn_processRemove']) ) {
        ProcessController::processDelete(intval($_GET['btn_processRemove']));
        header('Location: /');
    }
}catch(\Exception $e){
    Template::exception($e);
}finally{
    $loginUser = LoginController::getLoginUser();
    Template::assign("name",$loginUser->getName());
    Template::display();
}
?>