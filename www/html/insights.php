<?php
namespace ProcessControl;

use ProcessControl\common\Template;
use ProcessControl\controller\LoginController;
use ProcessControl\controller\JobController;
use ProcessControl\controller\ProcessController;

define('LAYOUT','main');
try{
    require_once '../common.php';
    LoginController::checkLogin();
    LoginController::authorityCheck();

    if( !empty($_GET['btn_logout']) ) {
        LoginController::logout();
    }

    $taskList = JobController::taskList();
    Template::assign("taskList",$taskList);
    $processList = ProcessController::processNameList();
    Template::assign("processList",$processList);
    var_dump(thisWeekReturn());

}catch(\Exception $e){
    Template::exception($e);
}finally{
    $loginUser = LoginController::getLoginUser();
    Template::assign("name",$loginUser->getName());
    Template::assign("page_title","インサイト");
    Template::display();
}

function logout()
{
    LoginController::logout();
}

function thisWeekReturn()
{
    $today = date("d");
    $weekdayNumber = date("w");
    $weekStart = date("d",mktime(0,0,0,0,$today-$weekdayNumber,0));
    $thisWeek=array();
    for ($i = 0; $i < 7; $i++) {
         $thisWeek[]=date("d",mktime(0,0,0,0,$weekStart+$i,0));
    }
    return $thisWeek;
}
?>