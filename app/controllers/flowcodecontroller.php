<?php


namespace PHPMVC\Controllers;
use PHPMVC\LIB\QR;

class FlowCodeController extends AbstractController
{
    public function defaultAction()
    {
        $this->_view();
    }
    public function createAction()
    {
        if (isset($_POST['data']))
        {
            $result = QR::create($_POST['data'],200,'');
            echo $result->getDataUri();
        }
    }
}