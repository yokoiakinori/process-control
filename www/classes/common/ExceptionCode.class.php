<?php
namespace ProcessControl\common;
class ExceptionCode
{
    const INVALID_ERR = 1000;

    static private $_arrMessage=array(
        INVALID_ERR => 'エラーが発生しました。'
    );

    static public function getMessage($intcode)
    {
        if(array_key_exists($intcode,self::$_arrMessage)){
            return self::$_arrMessage[$intcode];
        }
    }
}