<?php 
namespace app\Controller;
include_once "Controller.php";
use app\Core\Application;
use app\Core\Request;

class SiteController extends Controller
{
    public   function home()
    {
        $params = [
            "name"=>'Younes kamal'
        ];
        return  $this->render('Home',$params);
    }
    public   function contact()
    {
        return  $this->render('contact');
    }   
    public  function handleContact(Request $request)
    {
        $body = $request->getBody();
    
    }

}


?>