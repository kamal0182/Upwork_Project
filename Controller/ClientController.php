<?php 
namespace app\Controller;

use app\Models\ClientModel;
use app\Models\OffreModel;

class ClientController  extends Controller
{
    public ClientModel $client;
    public function  ShowAllMyOffres(){
        $this->client = new ClientModel($_SESSION['user']);
        $offres = new OffreModel;
         return  $this->checkValue($offres->findAll());
    }

}
?>