<?php

namespace app\Controller;

use app\Core\Application;
use app\Core\Request;
use app\Models\LoginModel;
use app\Models\OffreModel;
use app\Models\RegisterModel as ModelsRegisterModel;
use app\Models\UserModel;

class AuthController extends Controller
{
    public  UserModel $user;
    public function __construct()
    {
        $this->user = new UserModel;
    }
    public function register(Request $request)
    {
        $registerModel = new ModelsRegisterModel;
        if ($request->isPost()) 
        {

            $registerModel->loadData($request->getBody());
            if ($registerModel->validate() && $registerModel->register()) 
            {
                echo "Ascasc";
                $this->user->createInstanceWithoutId($registerModel->firstname, $registerModel->lastname, $registerModel->email, $registerModel->password, $registerModel->photo, $registerModel->phone);
                
              
                $this->user->create();
            }
        }
        $this->setLayout("Auth");
        return $this->render("register", [
            'model' => $registerModel
        ]);
    }
    public function login(Request $request)
    {
        
        $loginmodel = new LoginModel();
        if ($request->isPost()) {
            $loginmodel->loadData($request->getBody());
            if ($loginmodel->validate() && $loginmodel->login()) {
                $this->user->createInstanceWithEmailAndPassword($loginmodel->email, $loginmodel->password);
                // var_dump($this->user->findByEmailAndPassword());
                
                $this->user = $this->user->findByEmailAndPassword();
                var_dump($this->user);
                $offre = new OffreModel;
                $_SESSION['user'] = $this->user;
                  return $this->render("Client"); 
            }
        }
        $this->setLayout("Auth");
        return $this->render("login", [
            'model' => $loginmodel
        ]);
    }
}
