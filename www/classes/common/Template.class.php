<?php
namespace ProcessControl\common;

use ProcessControl\common\SystemErrorException;
class Template 
{
    const TEMPLATE_DIR = BASE_DIR . '/smarty/templates';
    const COMPILE_DIR = BASE_DIR . '/smarty/templates_c';
    const PLUGINS_DIR = BASE_DIR . '/smarty/plugins';
    const CONFIGS_DIR = BASE_DIR . '/smarty/configs';
    private static $instance = null;

    private function __construct()
    {

    }

    public static function getInstance()
    {
        if (is_null(self::$instance)) {
            self::$instance = new Smarty();
            self::init();
        }
        return self::$instance;
    }

    public final function __clone()
    {
        throw new \Exception('Clone is not allowed against' . get_class($this));
    }

    private static function init()
    {
        self::getInstance()->setTemplateDir(self::TEMPLATE_DIR);
        self::getInstance()->setCompileDir(self::COMPILE_DIR);
        self::getInstance()->addPluginsDir(self::PLUGINS_DIR);
        self::getInstance()->addConfigDir(self::CONFIGS_DIR);

        self::getInstance()->escape_html = true;
    }

    public static function assign($key, $value)
    {
        if ($key == 'exception') {
            throw new SystemErrorException(
                ExceptionCode::TEMPLATE_ARG_ERR, ['exception']
            );
        }
        self::getInstance()->assign($key, $value);
    }

    public static function exception(\Exception $e)
    {
        self::getInstance()->assign('exception', $e);
    }

    public static function display($template = null)
    {
        if (is_null($template)) {
            $template = preg_replace("/\/(.+)\.php/"
                , self::TEMPLATE_DIR . "/$1.tpl"
                , filter_input(INPUT_SERVER, 'SCRIPT_NAME')
            );
        }
        if (!file_exists($template)) {
            // 「テンプレート[$template]が見つかりません。」
            throw new SystemErrorException(
                ExceptionCode::TEMPLATE_ERR, [$template]
            );
        }

        $temp = $template;

        if (defined('LAYOUT')) {
            $layout = sprintf("%s/layout/%s.tpl", self::TEMPLATE_DIR, LAYOUT);
            if (!file_exists($layout)) {
                // 「テンプレート[$layout]が見つかりません。」
                throw new SystemErrorException(
                    ExceptionCode::TEMPLATE_ERR, [$layout]
                );
            }
            $temp = "extends:{$layout}|{$template}";
        }
        self::getInstance()->display($temp);
    }
}
