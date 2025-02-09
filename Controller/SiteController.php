<?php 
namespace app\Controller;
include_once "Controller.php";
use app\Core\Application;
use app\Core\Request;
use app\Models\test;
use app\test\test as TestTest;

class SiteController extends Controller
{
    public   function AdminDashboard()
    {
        $params = [
            "name"=>'Younes kamal'
        ];
        return  $this->render('Admin',$params);
    }
    public   function freelancerDashboard()
    {
        return  $this->render('Freelancer');
    }
    public   function ClientDashboard()
    {
        return  $this->render('Client');
    }
    public function test(){
        $t = new TestTest;
        $t->vartest();
        return $this->render('test');
    }

    public  function handleContact(Request $request)
    {
        $body = $request->getBody();
    }

}


?>