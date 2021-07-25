<?php
namespace ProcessControl\common;
class Csrf
{
  private static $token = null;
  const HASH_ALGO = 'sha256';

  public static function get()
    {
        return hash(self::HASH_ALGO, session_id());
    }

    public static function check($token)
    {
        $success = self::get() === $token;
        if (!$success) {
            // 二重送信されたので処理を中断しました。
            throw new InvalidErrorException(ExceptionCode::INVALID_CSRF_ERR);
        }
        return $success;
    }
}
