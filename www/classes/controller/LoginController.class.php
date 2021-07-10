<?php

namespace ProcessControl\controller;
use \ProcessControl\model\UserModel;
use \ProcessControl\common\Db;
use \ProcessControl\common\InvalidErrorException;
use \ProcessControl\common\ExceptionCode;

class LoginController
{
    const TARGET_PAGE = '/dashbord.php';
    const LOGINUSER = 'loginUserModel';

    static public function login()
    {
        if(!filter_input_array(INPUT_POST)){
            return;
        }

        $email = filter_input(INPUT_POST,'email');
        $password = filter_input(INPUT_POST,'password');

        if($email == ''||$password == ''){
            return;
        }

        Db::transaction();

        $objUserModel = new UserModel();
        $objUserModel->getModelByEmail($email);

        //アカウントロックチェック
        if($objUserModel->isAccountLock()){
            Db::commit();
            throw new InvalidErrorException(ExceptionCode::INVALID_LOCK);
        }

        //パスワードチェック
        if(!$objUserModel->checkPassword($password)){
            $objUserModel->loginFailureIncrement();
            Db::commit();
            throw new InvalidErrorException(ExceptionCode::INVALID_LOGIN_FAIL);
        }

        $objUserModel->loginFailureReset();

        Db::commit();

        session_regenerate_id(true);
        $_SESSION[self::LOGINUSER] = $objUserModel;

        header(sprintf("location: %s", self::TARGET_PAGE));
    }

    static public function  checkLogin()
    {
        $objUserModel = (isset($_SESSION[self::LOGINUSER]))? $_SESSION[self::LOGINUSER] : null;
        if(is_object($objUserModel)&&0<$objUserModel->getUserId()){
            return;
        }
        header('Location: /');
    }

    static public function  getLoginUser()
    {
        return $_SESSION[self::LOGINUSER];
    }

    static public function  logout()
    {
        $_SESSION = [];
        session_destroy();
        header('Location: /');
    }
}
