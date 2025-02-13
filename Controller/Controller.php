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
<<<<<<< HEAD
=======
    //    var_dump($View);
>>>>>>> ff45fba1327a113e160bb708362fdadc15780a3a
        return  Application::$app->router->renderView($View,$params);
    }
    public function checkValue($data){
        return $data ?? 'Create Your First Offre';
    }
  
}

?>