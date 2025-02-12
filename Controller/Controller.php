<?php 
namespace app\Controller;

use app\Core\Application;

class Controller {
    public $layout = "main";
    public function setLayout($layout){
        $this->layout = $layout ;
    }
    public   function render($View , $params= [])
    {
        return  Application::$app->router->renderView($View,$params);
    }
  
}

?>