<?php 
namespace app\test;

use app\Models\ClientModel;
use app\Models\OffreModel;
use app\Models\RoleModel;
use app\Models\UserModel;

class test 
{
    public function test()
    {
        $role = new RoleModel;
        $role->createInstanceaWithName("Client");
        $user = new UserModel("younes", "kamal","kamal@emaple.com",$role);
        $client = new ClientModel($user);
        $offre = new OffreModel();
        $offre->constructer("youdemy","a platform of courses",4000,20,$client);
        $offre1 = new OffreModel();
        $offre1->constructer("Upwork","a platform of courses",4000,20,$client);
        $client->setOffre($offre);
        $client->setOffre($offre1);
        foreach($client->getOffres() as $ofre){
            return  $ofre->getClient();
        }
        
    }
    public function vartest(){
        echo "<pre>";
        var_dump($this->test());
    }
}
