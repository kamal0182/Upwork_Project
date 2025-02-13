<?php 
namespace app\Controller;

use app\Core\Request;
use app\Models\ClientModel;
use app\Models\Model;
use app\Models\OffreModel;

class OffreController  extends Controller
{ 
    public ClientModel $client;
    public OffreModel $offremodel;
    public function __construct( ) {
        $this->offremodel = new OffreModel;
     
        
    }
    public function create(Request $request)
    {
        $offremodel = new OffreModel() ;
        
        $this->client = new ClientModel($_SESSION['user']);
        
        $offremodel->setClientmodal($this->client);
        if($request->isPost()){ 
            $offremodel->loadData($request->getBody());
            if($offremodel->validate()){
                $offremodel->create();
                // $request->getBody() = [];
                header("Location:/contact");
                // return  $this->render('Client',[
                //     'model' => $offremodel
                // 
            }
            return  $this->render('Client',[
                'model' => $offremodel
            ]);
        }
        
    // return  $this->render('Client');
    }
    public function ShowNonValideForms()
    {
        $this->offremodel->showNonValidOffre();
    }
    public function DeleteOffre($id){   
        $this->offremodel->createInstanceWithId($id);
        $this->offremodel->delete();
        header("Location:/contact");
    }

}