<?php
namespace MShop\Controller\Home;
use MShop\Controller\Common\HomeController;
class IndexController extends HomeController {

    public function indexAction()
    {
        $this->view->pick('Home/Index/index');
    }
    
    public function testAction()
    {
        echo 'test';
    }
}
