<?php 
namespace app\Controller;

use app\Core\Request;
use app\Models\ClientModel;
use app\Models\Model;
use app\Models\OffreModel;

class OffreController  extends Controller
{ 
    public ClientModel $client;
    public function create(Request $request)
    {
        $offremodel = new OffreModel() ;
        
        $this->client = new ClientModel($_SESSION['user']);

        $offremodel->setClientmodal($this->client);
        if($request->isPost()){ 
            $offremodel->loadData($request->getBody());
            if($offremodel->validate()){
                $offremodel->create();
                
            }
            var_dump($offremodel);
            return  $this->render('Client',[
                'model' => $offremodel
            ]);
        }
    // return  $this->render('Client');
    }

}