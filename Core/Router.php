<?php 
namespace app\Core;

use app\Controller\SiteController;
use app\Core\Request as CoreRequest;
use app\Core\Response as CoreResponse;

class Router {
    public CoreRequest $request ;
    public CoreResponse $response ;
    protected array $routes ;
    public function __construct(CoreRequest $request,CoreResponse $response) {
        $this->request = $request ;
        $this->response = $response ;
    }
    public function get($path,$callback){   
        $this->routes['get'][$path] = $callback ;
    }
    public function post($path,$callback){
        $this->routes['post'][$path] = $callback ;
    }
    public function resolve (){
        $path = $this->request->getPath();
        $method = $this->request->getMethod();
        $callback = $this->routes[$method][$path] ?? false ;
        if($callback == false){
           $this->response->setStatusCode(404);
           return $this->renderView(404);
        }
        if(is_string($callback))
        {   
            return $this->renderView($callback);
        }
        if(is_array($callback)){
            Application::$app->controller = new $callback[0];
            $callback[0] = Application::$app->controller ;
        }
        return  call_user_func($callback,$this->request);
    }
    public function renderView($View,$params=[])
    {
      $viewcontent = $this->changeContente($View,$params); 
      $layoutcontent = $this->layoutContent();
      return str_replace("{{Content}}",$viewcontent ,$layoutcontent);
    }
    protected function layoutContent()
    {
       $layout =  Application::$app->controller->layout;
       
        ob_start();
        include_once application::$root_dir."/views/layouts/$layout.php";
       return  ob_get_clean() ;
    }
    protected  function changeContente($View,$params=[])
    {
        foreach($params as $key=>$value){
            $$key = $value ;
        }
            ob_start();
            include_once application::$root_dir."/views/$View.php";
           return  ob_get_clean() ;
    }
}

?>