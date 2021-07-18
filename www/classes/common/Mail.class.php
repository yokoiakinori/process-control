<?php
namespace ProcessControl\common;
class Mail
{
    const SEND_ONLY_EMAIL = "送信用メールアドレス";
    const SEND_ONLY_EMAIL_NAME = "ProcessControl";
    const SEND_ONLY_EMAIL_LANGUAGE = "japanese";
    const SEND_ONLY_EMAIL_ENCODING = 'utf-8';
    const MAIL_HOST = 'mail.example.com';
    const MAIL_PORT = '25';
    const MAIL_USER = 'contact@example.com';
    const MAIL_PASS = 'smtp_password';

    public static function send($strRecipient,$strSubject,$strBody,array $binAttachment=[])
    {
        if (empty($strRecipient)) {
            throw new \Exception('宛先が設定されていません。');
        }
        if (empty($strSubject)) {
            throw new \Exception('メールタイトルが設定されていません。');
        }
        if (empty($strBody)) {
            throw new \Exception('メール本文が設定されていません。');
        }

        mb_language(self::SEND_ONLY_EMAIL_LANGUAGE);
        mb_internal_encoding(self::SEND_ONLY_EMAIL_ENCODING);

        $from = self::SEND_ONLY_EMAIL;
        $fromname = self::SEND_ONLY_EMAIL_NAME;

        $mail = new \PHPMailer();

        $mail->isSMTP();
        $mail->SMTPAuth = TRUE;
        $mail->Host = self::MAIL_HOST;
        $mail->Port = self::MAIL_PORT;
        $mail->Username = self::MAIL_USER;
        $mail->Password = self::MAIL_PASS;

        $mail->CharSet = "iso-2022-jp";
        $mail->Encoding = "7bit";
        $mail->AddAddress($strRecipient);
        $mail->From = $from;
        $mail->FromName = mb_encode_mimeheader(
            mb_convert_encoding(
                $fromname
                , "JIS"
                , self::SEND_ONLY_EMAIL_ENCODING
            )
        );
        foreach($binAttachment as $attachment){
            if(array_key_exists('path',$attachment)&&array_key_exists('name',$attachment)&&file_exists($attachment['path'])){
                $mail->AddAttachment(
                    $attachment['path'],
                    $attachment['name']
                );
            }else if(array_key_exists('path',$attachment)&&file_exists($attachment['path'])){
                $mail->AddAttachment(
                    $attachment['path'],
                );
            }else if(file_exists($attachment)){
                $mail->AddAttachment($attachment);
            } 
        }

        if (!$mail->Send()) {
            throw new \Exception($mail->ErrorInfo);
        }
    }

    static public function getTemplate($templateName, array $args = [])
    {
        $smarty = new \Smarty();
        $smarty->setTemplateDir(BASE_DIR . '/smarty/templates/mail/');
        foreach ($args as $k => $v) {
            $smarty->assign($k, $v);
        }
        return $smarty->fetch($templateName);
    }
}
