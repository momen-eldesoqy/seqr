<?php


namespace PHPMVC\Controllers;


use PHPMVC\LIB\QR;
use PHPMVC\Models\UserModel;

class ProfileController extends AbstractController
{
    public function defaultAction()
    {

        $qr = QR::create("http://mvcapp.com/message/default/".$this->_params[0],200,'');
        $link = $qr->getDataUri();
        $this->data['qrLink'] = $link;
        $this->_view();
    }
    public function surveyAction()
    {
        $user = new UserModel('localhost','qrtech','root','');
        $sur = $user::getallSurvey($this->_params[0]);
        $this->data=$sur;
        $this->_view();
    }
    public function messageAction()
    {
        $user = new UserModel('localhost','qrtech','root','');
        $msg = $user::getallMessages($this->_params[0]);
        $this->data= $msg;
        $this->_view();
    }
    public function accountAction()
    {
        $user = new UserModel('localhost','qrtech','root','');
        $data = $user::getAllData($this->_params[0]);
        $this->data = $data;
        $this->_view();
    }
    public function editAction()
    {

        if (isset($_POST['edit']))
        {
            $name = filter_input(INPUT_POST,'name',FILTER_SANITIZE_STRING);
            $phone = filter_input(INPUT_POST,'phone',FILTER_SANITIZE_STRING);
            $email = filter_input(INPUT_POST,'email',FILTER_SANITIZE_EMAIL);
            $address = filter_input(INPUT_POST,'address',FILTER_SANITIZE_STRING);
            $user = new UserModel('localhost','qrtech','root','');
            $user::updataUserData($this->_params[0],$name,$phone,$email,$address);
            header('location:/profile/account/'.$this->_params[0]);
        }
    }
    public function delMsgAction()
    {
        $user = new UserModel('localhost','qrtech','root','');
        $user::delMsg($this->_params[1]);
        header('location:/profile/message/'.$this->_params[0]);

    }
    public function logoutAction()
    {
        session_start();
        session_unset();
        session_destroy();
        header('location:/signin');
    }

}