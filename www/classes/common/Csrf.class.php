<?php
namespace ProcessControl\common;
class Csrf
{
  private static $token = null;
  static private function init()
  {
    self::$token = sha1(uniqid());
  }

  public static function get()
    {
        if (is_null(self::$token)) {
            self::init();
        }
        $_SESSION['csrf_token'] = self::$token;
        return self::$token;
    }

    public static function check()
    {
        $csrf_token = (isset($_SESSION['csrf_token'])) ? $_SESSION['csrf_token'] : null;
        $_SESSION['csrf_token'] = null;

        if (filter_input(INPUT_POST, 'csrf_token') !== $csrf_token) {
            // 二重送信されたので処理を中断しました。
            throw new InvalidErrorException(ExceptionCode::INVALID_CSRF_ERR);
        }
        return true;
    }
}
