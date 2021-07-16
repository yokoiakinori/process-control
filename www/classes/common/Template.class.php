<?php
namespace ProcessControl\common;

use ProcessControl\common\SystemErrorException;
class Template 
{
    const TEMPLATE_DIR = BASE_DIR.'/template/';
    static function display($tpl_file_path){
        include(self::TEMPLATE_DIR. $tpl_file_path);
    }
}
