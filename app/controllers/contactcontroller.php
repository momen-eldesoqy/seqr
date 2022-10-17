<?php


namespace PHPMVC\Controllers;


use PHPMVC\Models\ConnectModel;
use PHPMVC\Models\UserModel;

class ContactController extends AbstractController
{
    public function defaultAction()
    {
        $this->_view();
    }
    public function addAction()
    {
        if (isset($_POST['submit']))
        {
            $name = filter_input(INPUT_POST , 'name' , FILTER_SANITIZE_STRING);
            $email = filter_input(INPUT_POST , 'email' , FILTER_SANITIZE_EMAIL);
            $msg = filter_input(INPUT_POST , 'message' , FILTER_SANITIZE_STRING);

            $conn = new ConnectModel('localhost','qrtech','root','');
            $add = $conn::Create('connect',$name,$email , $msg);
            session_start();
            $_SESSION['connect_send'] = "Thank you For Your Message ";
            header("Location:/contact");


        }
    }
}