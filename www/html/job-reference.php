<?php
namespace ProcessControl;

use ProcessControl\common\Template;
use ProcessControl\controller\LoginController;
use ProcessControl\controller\JobController;

define('LAYOUT','main');
try{
    require_once '../common.php';
    LoginController::checkLogin();
    LoginController::authorityCheck();

    if( !empty($_GET['btn_logout']) ) {
        LoginController::logout();
    }

}catch(\Exception $e){
    Template::exception($e);
}finally{
    $loginUser = LoginController::getLoginUser();
    Template::assign("name",$loginUser->getName());
    Template::assign("page_title","ジョブ照会");
    Template::display();
}

function logout()
{
    LoginController::logout();
}
?>