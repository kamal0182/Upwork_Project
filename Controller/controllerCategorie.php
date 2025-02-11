<?php
namespace app\Controller;

use Categorie;

class ControllerCategorie extends Controller
{
    public function create(Request $request)
    {
        $categorie = new Categorie()
        
        if ($request->isPost()) {
            $categorie->loadData($request->getBody()); 
        }
        return $this->render('Client', [
            'model' => $categorie
        ]);
    }
}



?>
