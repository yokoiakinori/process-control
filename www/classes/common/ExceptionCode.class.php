<?php
namespace ProcessControl\common;
class ExceptionCode
{
    const INVALID_ERR = 1000;
    const INVALID_LOCK = 1001;
    const INVALID_LOGIN_FAIL = 1002;
    const APPLICATION_ERR = 2000;
    const SYSTEM_ERR = 3000;
    const TEMPLATE_ERR = 3001;

    static private $_arrMessage=array(
        self::INVALID_ERR => 'エラーが発生しました。',
        self::INVALID_LOCK => 'アカウントがロックされています。',
        self::INVALID_LOGIN_FAIL => 'ログインに失敗しました。',
        self::APPLICATION_ERR => 'アプリケーション・エラーが発生しました。',
        self::SYSTEM_ERR => 'テンプレート[%s]が見つかりません',
    );

    static public function getMessage($intcode)
    {
        if(array_key_exists($intcode,self::$_arrMessage)){
            return self::$_arrMessage[$intcode];
        }
    }
}