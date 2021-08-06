<?php
namespace ProcessControl;

use ProcessControl\common\Template;
use ProcessControl\controller\LoginController;
use ProcessControl\controller\JobController;

define('LAYOUT','main');
try{
    require_once '../common.php';
    LoginController::checkLogin();
    JobController::jobCreate();

}catch(\Exception $e){
    Template::exception($e);
}finally{
    $loginUser = LoginController::getLoginUser();
    Template::assign("name",$loginUser->getName());
    Template::display();
}

function createJob()
{
    JobController::jobCreate();
}
?>