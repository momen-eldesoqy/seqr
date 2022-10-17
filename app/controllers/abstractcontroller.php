<?php
namespace PHPMVC\Controllers;
use PHPMVC\LIB\FrontController ; 
class AbstractController
{
    protected $_controller ;
    protected $_action ;
    protected $_params ;

    protected $data = [];

    public function NotFoundAction()
    {
        $this->_view();
    }

    public function setController($controllerName)
    {
        $this->_controller = $controllerName;

    }
    public function setAction($ActionName)
    {
        $this->_action = $ActionName;
        
    }
    public function setParams($ParamsName)
    {
        $this->_params = $ParamsName;
        
    }
    protected function _view()
    {
        if($this->_action == FrontController::NOT_FOUND_ACTION)
        {
            require_once VIEWS_PATH.'notfound'.DS.'notfound.view.php';
        }else {
            $view = VIEWS_PATH.$this->_controller.DS.$this->_action.'.view.php';
            if(file_exists($view))
            {
                require_once $view;
            }else
            {
                require_once VIEWS_PATH.'notfound'.DS.'noview.view.php';
            }
        }
      //  echo VIEWS_PATH.$this->_controller.DS.$this->_action.'.view.php';
    }
}