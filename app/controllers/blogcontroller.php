<?php


namespace PHPMVC\Controllers;


class BlogController extends AbstractController
{
    public function defaultAction()
    {
        $this->_view();
    }
}