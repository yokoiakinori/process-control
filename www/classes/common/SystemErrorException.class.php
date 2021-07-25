<?php
namespace ProcessControl\common;
class SystemErrorException extends \Exception
{
    public function __construct($code,array $args=[])
    {
        $message = ExceptionCode::getMessage($code);
        self::writeLog(vsprintf($message, $args));
        self::sendMail(vsprintf($message, $args));
        parent::__construct('システムエラーが発生しました。',$code);
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
