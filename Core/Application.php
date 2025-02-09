<?php 
namespace app\Core;

use app\Controller\AuthController;
use app\Controller\Controller;
use app\Controller\SiteController;
use app\Core\Request as CoreRequest;
use Request;
class Application {
    public Router $router  ;
    public Response $response ; 
    public CoreRequest $request ;
    public static Application $app ;
    public static string $root_dir ; 
    public Controller $controller ;
    public SiteController $sitecontroller ;
    public function __construct($path) {
      $this->sitecontroller = new SiteController ;
      $this->controller = new Controller ;
      Application::$app = $this ;
      $this->response = new Response ;
       self::$root_dir = $path ;
        $this->request  = new CoreRequest();
        $this->router  = new Router($this->request, $this->response);
    }
    public function run ()
    {
      echo  $this->router->resolve();
    }
}

?>