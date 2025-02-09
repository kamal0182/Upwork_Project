<?php
 namespace app\Controller;

use app\Core\Application;
use app\Core\Request;
use app\Models\LoginModel;
use app\Models\RegisterModel as ModelsRegisterModel;


class AuthController extends Controller
{
    
    public function register (Request $request){
    //    echo "ascasc";
       $registerModel = new ModelsRegisterModel;
       if($request->isPost()){

        $registerModel->loadData($request->getBody());
        if($registerModel->validate() && $registerModel->register()){
            return "Success";
        }
       }
        $this->setLayout("Auth"); 
        return $this->render("register",[
            'model' => $registerModel]);    
    }
    public function login (Request $request){
        $loginmodel = new LoginModel() ;
        if($request->isPost()){
         $loginmodel->loadData($request->getBody());
         if($loginmodel->validate() && $loginmodel->login()){
             return "Success";
         }
        }
         $this->setLayout("Auth"); 
         return $this->render("Login");  
       
    }    
   
}