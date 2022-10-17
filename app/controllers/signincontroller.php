<?php


namespace PHPMVC\Controllers;


use PHPMVC\Models\UserModel;

class SignInController extends AbstractController
{
    public function defaultAction()
    {
        $this->_view();
    }
    public function authenticationAction()
    {
        if(isset($_POST['login']))
        {

            $email = filter_input(INPUT_POST,'email',FILTER_SANITIZE_EMAIL);
            $pass = filter_input(INPUT_POST,'password',FILTER_SANITIZE_STRING);
            $hash = md5($pass);

            $user = new UserModel('localhost','qrtech','root','');
            if ($user::auth($email , $hash)) {
                $data = UserModel::getByMail($email);
                $id = $data['id'];
                $name = $data['name'];
                session_start();
                $_SESSION['name'] = $name;
                $this->data['id'] = $id;
                header('Location:/profile/default/'.$id);
            }else{
                session_start();
                $_SESSION['error_login'] = "Not You";

                header('Location:/signin');

            }

        }
    }
}