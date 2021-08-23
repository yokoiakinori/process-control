<?php
namespace ProcessControl;

use ProcessControl\common\Template;
use ProcessControl\controller\LoginController;
use ProcessControl\controller\JobController;

define('LAYOUT','main');
try{
    require_once '../common.php';
    LoginController::checkLogin();
    $jobList = JobController::jobList();
    Template::assign("jobList",$jobList);
    if( !empty($_GET['btn_logout']) ) {
        LoginController::logout();
    }
    if( !empty($_GET['btn_jobRemove']) ) {
        JobController::jobdelete(intval($_GET['btn_jobRemove']));
        header('Location: /');
    }
}catch(\Exception $e){
    Template::exception($e);
}finally{
    $loginUser = LoginController::getLoginUser();
    Template::assign("name",$loginUser->getName());
    Template::assign("page_title","ジョブ一覧");
    Template::display();
}

?>