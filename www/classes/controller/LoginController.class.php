<?php

namespace ProcessControl\controller;
use \ProcessControl\model\UserModel;

class LoginController
{
    static public function login()
    {
        try{
            if(filter_input_array(INPUT_POST)){
                $email = filter_input(INPUT_POST,'email');
                $password = filter_input(INPUT_POST,'password');


                $objUserModel = new UserModel();
                $objUserModel->getModelByEmail($email);

                //アカウントロックチェック
                if($objUserModel->isAccountLock()){
                    throw new \Exception('アカウントはロックされています。');
                }

                //パスワードチェック
                if(!$objUserModel->checkPassword($password)){
                    $objUserModel->loginFailureIncrement();
                    throw new \Exception('ログインに失敗しました。');
                }

                $objUserModel->loginFailureReset();
                header("location: top.php");
            }
        }catch(\Exception $e){

        }
    }

    static public function  checkLogin()
    {
        # code...
    }

    static public function  logout()
    {
        # code...
    }
}
