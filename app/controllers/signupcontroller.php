<?php


namespace PHPMVC\Controllers;


use PHPMVC\LIB\Database;
use PHPMVC\Models\UserModel;

class SignUpController extends AbstractController
{
    public function defaultAction()
    {
        $this->_view();
    }
    public function addAction()
    {
        if(isset($_POST['add']))
        {
            $name = filter_input(INPUT_POST,'name',FILTER_SANITIZE_STRING);
            $email = filter_input(INPUT_POST,'email',FILTER_SANITIZE_EMAIL);
            $address = filter_input(INPUT_POST,'address',FILTER_SANITIZE_STRING);
            $phone = filter_input(INPUT_POST,'phone',FILTER_SANITIZE_STRING);
            $password = filter_input(INPUT_POST,'password',FILTER_SANITIZE_STRING);
            $user = new UserModel('localhost','qrtech','root','');
            $sql = "SELECT * FROM users WHERE email = '" . $email ."'";
            $stmt = UserModel::$conn->query($sql);
            $result = $stmt->fetchAll();
            if (empty($result))
            {
                if($user->Create('users',$name,$phone,$address,$email,$password))
                {
                    $last_id = UserModel::$conn->lastInsertId();
                    session_start();
                    $_SESSION['name'] = $name ;
                    header('location:/profile/default/'.$last_id);
                }
            }else
            {
                session_start();
                $_SESSION['duplicateMail'] = "This Email is already regesterd";
                header('location:/signup');
            }



        }








    }
}