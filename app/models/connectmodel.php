<?php


namespace PHPMVC\Models;


use PHPMVC\LIB\Database;

Class ConnectModel extends Database
{
    public static function Create($tableName,$name , $email , $message)
    {

        $sql = 'INSERT INTO '.$tableName.' SET name = "' . $name .'" , email = "' .$email .'" , message = "'.$message . '"';

        UserModel::$conn->query($sql);
    }
}