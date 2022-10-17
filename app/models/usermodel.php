<?php
namespace PHPMVC\Models;

use PHPMVC\LIB\Database;

class UserModel extends Database
{
    public $id;
    public $name;
    public $phone;
    public $address;
    public $email;
    public $password;


    public static function Create($tableName,$name , $phone , $address , $email , $password)
    {
        $hash = md5($password);
        $sql = 'INSERT INTO '.$tableName.' SET name = "'.$name .'" , phone = '.$phone.' , address = "'.$address
            .'" , email = "'.$email . '" , password = "'.$hash.'"';

       UserModel::$conn->query($sql);
       return true;
    }
    public static function auth($email , $pass)
    {
        $sql = "SELECT email , password , name FROM users WHERE email = '" .$email ."' AND password = '".$pass."'";
        $stmt = UserModel::$conn->query($sql);
        $result = $stmt->fetchAll();

        if (!empty($result))
        {
            return true;
        }else
        {
            return false;
        }

    }
    public static function getByMail($email)
    {
        $sql = "SELECT * FROM users WHERE email = '" . $email ."'";
        $stmt = UserModel::$conn->query($sql);
        $result = $stmt->fetch(\PDO::FETCH_ASSOC);
        return $result;
    }
    public static function getAllData($id)
    {
        $sql = "SELECT * FROM users WHERE id = " . $id ;
        $stmt = UserModel::$conn->query($sql);
        $result = $stmt->fetch(\PDO::FETCH_ASSOC);
        return $result;
    }
    public static function updataUserData($id,$name , $phone , $email , $address)
    {
        $sql = "UPDATE users SET name = '".$name."' , phone= '".$phone."' , email= '".$email."' , address= '".$address."' where id=".$id ;
        UserModel::$conn->query($sql);
        return true;
    }
    public static function sendMsg($id , $message)
    {
        $sql = "INSERT INTO chat SET user_id=".$id." , msg='".$message."'";
        UserModel::$conn->query($sql);
        return true;
    }
    public static function getallMessages($id)
    {
        $sql = "SELECT id , msg FROM chat WHERE user_id=".$id;
        $stmt = UserModel::$conn->query($sql);
        $result = $stmt->fetchAll(\PDO::FETCH_ASSOC);
        return $result;
    }
    public static function delMsg($id)
    {
        $sql = "DELETE FROM chat WHERE id = ".$id;
        UserModel::$conn->query($sql);
    }
    public static function addSuravy($quality,$service,$clean,$staff,$money,$user_id)
    {
        $sql = "INSERT INTO survay SET quality = '".$quality."' , service ='".$service."' , clean='".$clean."' , staff='".$staff."' , money='".$money."' , user_id=".$user_id;
        UserModel::$conn->query($sql);
        return true;
    }
    public static function getallSurvey($id)
    {
        $sql = "SELECT * FROM survay WHERE user_id=".$id;
        $stmt = UserModel::$conn->query($sql);
        $result = $stmt->fetchAll(\PDO::FETCH_ASSOC);
        return $result;
    }


}