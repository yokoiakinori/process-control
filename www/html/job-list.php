<?php
namespace ProcessControl;

use ProcessControl\common\Template;
use ProcessControl\controller\LoginController;

define('LAYOUT','main');
try{
    require_once '../common.php';
    LoginController::checkLogin();
    if( !empty($_GET['btn_logout']) ) {
        LoginController::logout();
    }
}catch(\Exception $e){
    Template::exception($e);
}finally{
    $loginUser = LoginController::getLoginUser();
    Template::assign("name",$loginUser->getName());
    Template::display();
}

?>