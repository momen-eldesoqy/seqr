<?php


namespace PHPMVC\LIB;


class Database
{
    private $hostName ;
    private $username ;
    private $password;
    private $dbName;

    public static $conn ;
    public function __construct($hostName,$dbName,$username,$password)
    {
        $this->hostName = $hostName;
        $this->dbName = $dbName;
        $this->username = $username;
        $this->password = $password;
        $this::connection();
    }
    public function connection()
    {
        try {
            self::$conn = new \PDO(
                'mysql:host='.$this->hostName . '; dbname='.$this->dbName.'',$this->username , $this->password
            );
            self::$conn->setAttribute(\PDO::ATTR_ERRMODE, \PDO::ERRMODE_EXCEPTION);


        }catch (\PDOException $e)
        {
            return "connection faild";
        }
    }
}