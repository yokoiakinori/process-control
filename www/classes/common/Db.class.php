<?php

namespace ProcessControl\common;

use PDO;

class Db 
{
    const DSN = 'mysql:dbname=%s;host=db;charset=utf8';
    const DBNAME = 'process_control';
    const USER_NAME = 'root';
    const PASSWORD = 'secret';

    static private $instance = null;

    private function __construct()
    {

    }

    private static function getInstance()
    {
        if(is_null(self::$instance)){
            $options = array(
                \PDO::ATTR_ERRMODE=> \PDO::ERRMODE_EXCEPTION,\PDO::ATTR_DEFAULT_FETCH_MODE=> \PDO::FETCH_ASSOC,\PDO::ATTR_AUTOCOMMIT=> true
            );
            self::$instance = new \PDO(
                sprintf(self::DSN,self::DBNAME),self::USER_NAME,self::PASSWORD,$options
            );
        }
        return self::$instance;
    }

    final public function __clone()
    {
        $msg = sprintf('Clone is not allowed against %s', get_class($this));
        throw new \Exception($msg);
    }

    public static function transaction()
    {
       self::getInstance()->beginTransaction();
    }

    public static function commit()
    {
       self::getInstance()->commit();
    }

    public static function rollBack()
    {
       self::getInstance()->rollBack();
    }

    public static function select($sql,array $arr=array())
    {
        $stmt = self::getInstance()->prepare($sql);
        $stmt->execute($arr);
        return $stmt->fetchAll();
    }

    public static function insert($sql,array $arr)
    {
        if(!self::getInstance()->inTransaction()){
            throw new \Exception('Not in Transaction');
        }
        $stmt = self::getInstance()->prepare($sql);
        $stmt->execute($arr);
        return self::getInstance()->lastInsertId();
    }

    public static function update($sql,array $arr)
    {
        if(!self::getInstance()->inTransaction()){
            throw new \Exception('Not in Transaction');
        }
        $stmt = self::getInstance()->prepare($sql);
        return $stmt->execute($arr);
    }

    public static function delete($sql,array $arr)
    {
        if(!self::getInstance()->inTransaction()){
            throw new \Exception('Not in Transaction');
        }
        $stmt = self::getInstance()->prepare($sql);
        return $stmt->execute($arr);
    }
}
