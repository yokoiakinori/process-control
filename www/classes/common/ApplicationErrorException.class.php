<?php
namespace ProcessControl\common;
class ApplicationErrorException extends \Exception
{
    public function __construct($code,\Exception $previous=null)
    {
        $message = ExceptionCode::getMessage($code);
        self::writeLog($message);
        parent::__construct('アプリケーションエラーが発生しました。',$code,$previous);
    }

    static private function writeLog($message)
    {
            # code...
    }
}
