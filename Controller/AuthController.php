<?php
 namespace app\Controller;

use app\Core\Application;
use app\Core\Request;
use app\Models\RegisterModel as ModelsRegisterModel;
use RegisterModel;

class AuthController extends Controller
{
    
    public function register (Request $request){
        $register = new ModelsRegisterModel();
       if($request->isPost()){
        
       }
        $this->setLayout("Auth"); 
        return $this->render("Register");
    }
    public function login (){
        $this->setLayout("Auth"); 
        return $this->render("Login");
    }    
   
}