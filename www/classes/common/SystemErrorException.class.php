<?php
namespace ProcessControl\common;
class SystemErrorException extends \Exception
{
    public function __construct($code,\Exception $previous=null)
    {
        $message = ExceptionCode::getMessage($code);
        self::writeLog($message);
        self::sendMail($message);
        parent::__construct('システムエラーが発生しました。',$code,$previous);
    }

    static private function writeLog($message)
    {
            # code...
    }

    static private function sendMail($message)
    {
            # code...
    }
}
