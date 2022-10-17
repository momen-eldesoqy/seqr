<?php


namespace PHPMVC\Controllers;


use PHPMVC\Models\UserModel;

class MessageController extends AbstractController
{

    public function defaultAction()
    {
        $this->_view();
    }
    public function sendAction()
    {
        if(isset($_POST['msg_send']))
        {
            $msg = filter_input(INPUT_POST,'message',FILTER_SANITIZE_STRING);
            $id = $this->_params[0];
            $user = new UserModel('localhost','qrtech','root','');
            $res = $user::sendMsg($id,$msg);

            if($res==true)
            {
                session_start();
                $_SESSION['msg-sent'] = "success";
                header("location:/message/default/".$this->_params[0]);
            }

        }
    }
    public function successAction()
    {
        $this->_view();
    }
}