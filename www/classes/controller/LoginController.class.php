<?php

namespace ProcessControl\controller;
use \ProcessControl\model\UserModel;
use \ProcessControl\common\Db;
use \ProcessControl\common\InvalidErrorException;
use \ProcessControl\common\ExceptionCode;
use \ProcessControl\common\Csrf;
use \ProcessControl\common\Log;
use \ProcessControl\common\Mail;
use ProcessControl\dao\UserDao;

class LoginController
{
    const TARGET_PAGE = '/dashboard.php';
    const LOGINUSER = 'loginUserModel';
    const AUTHORITY = '管理者';

    static public function login()
    {
        if(!filter_input_array(INPUT_POST)){
            return;
        }

        Csrf::check(filter_input(INPUT_POST, 'csrf_token'));

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
            self::noticeAccountLockForMail($objUserModel);
            throw new InvalidErrorException(ExceptionCode::INVALID_LOGIN_FAIL);
        }

        $objUserModel->loginFailureReset();

        Db::commit();

        session_regenerate_id(true);
        $_SESSION[self::LOGINUSER] = serialize($objUserModel);

        header(sprintf("location: %s", self::TARGET_PAGE));
    }

    static public function  checkLogin()
    {
        if (!empty($_SESSION[self::LOGINUSER])) {
            $unserialize = unserialize($_SESSION[self::LOGINUSER]);
            $objUserModel = (isset($unserialize))? $unserialize : null;
            if(is_object($objUserModel)&&0<$objUserModel->getId()){
                return;
            }
        }
        header('Location: /');
    }

    static public function  authorityCheck()
    {
        if (!empty($_SESSION[self::LOGINUSER])) {
            $unserialize = unserialize($_SESSION[self::LOGINUSER]);
            $objUserModel = (isset($unserialize))? $unserialize : null;
            if ($objUserModel->getPosition_name()==self::AUTHORITY) {
                return;
            }
            header('Location: /dashboard.php');
        }else {
            header('Location: /');
        }
    }

    static public function  getLoginUser()
    {
        return unserialize($_SESSION[self::LOGINUSER]);
    }

    static public function  getAllUser()
    {
        return UserDao::allUser();
    }

    static public function  logout()
    {
        $_SESSION = [];
        session_destroy();
        header('Location: /');
    }

    private static function noticeAccountLockForMail(UserModel $objUserModel)
    {
        if(UserModel::LOCK_COUNT>$objUserModel->getLogin_failure_count()){
            return;
        }

        $strRecipient=$objUserModel->getEmail();
        $strSubject='アカウントをロックしました。';
        $strBody='例文';
        Mail::send($strRecipient, $strSubject,$strBody);

        throw new InvalidErrorException(ExceptionCode::INVALID_LOCK);
    }

    static public function isAccountLock()
    {
        $token = filter_input(INPUT_GET,'token');
        $objUserModel = new UserModel();
        $objUserModel->getModelByToken($token);
        return $objUserModel->isAccountLock();
    }

    static public function unlock()
    {
        if (filter_input_array(INPUT_POST==null)) {
            return;
        }

        Csrf::check(filter_input(INPUT_POST, 'csrf_token'));

        $token = filter_input(INPUT_GET,'token');

        Db::transaction();
        $objUserModel = new UserModel();
        $objUserModel->getModelByToken($token);
        $objUserModel->setLogin_failure_count(0)
            ->setLogin_failure_datetime(NULL)
            ->setToken('')
            ->save();
        Db::commit();
        return true;
    }
}
