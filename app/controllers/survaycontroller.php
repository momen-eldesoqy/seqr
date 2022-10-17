<?php


namespace PHPMVC\Controllers;


use PHPMVC\Models\UserModel;

class SurvayController extends AbstractController
{
    public function defaultAction()
    {
        $this->_view();
    }
    public function addAction()
    {
        if (isset($_POST['add']))
        {
            $quality = filter_input(INPUT_POST,'quality',FILTER_SANITIZE_STRING);
            $service = filter_input(INPUT_POST,'service',FILTER_SANITIZE_STRING);
            $clean = filter_input(INPUT_POST,'clean',FILTER_SANITIZE_STRING);
            $staff = filter_input(INPUT_POST,'staff',FILTER_SANITIZE_STRING);
            $money = filter_input(INPUT_POST,'money',FILTER_SANITIZE_STRING);
            $user = new UserModel('localhost','qrtech','root','');
            $res = $user::addSuravy($quality,$service,$clean,$staff,$money,$this->_params[0]);
            if($res)
            {
                session_start();
                $_SESSION['survay_added'] = "success";
                header('location:/survay/default/'.$this->_params[0]);
            }
        }
    }
}