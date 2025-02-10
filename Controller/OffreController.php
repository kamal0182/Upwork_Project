<?php 
namespace app\Controller;

use app\Core\Request;
use app\Models\OffreModel;

class OffreController  extends Controller
{
    public function create(Request $request)
    {
        $offremodel = new OffreModel() ;
        if($request->isPost()){
         $offremodel->loadData($request->getBody());
    }
    return  $this->render('Client',[
        'model' => $offremodel
    ]
    );
    }

}