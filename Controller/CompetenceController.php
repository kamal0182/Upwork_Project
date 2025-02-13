<?php

use app\Core\Request;
use app\Models\CompetenceModel;

class CompetenceController 
{
    public CompetenceModel $competencemodel ; 
    public function __construct()
    {
     $this->competencemodel = new CompetenceModel ;   
    }
    public function create (Request $request )
    {
        
        
    }
    public function update(Request $request)
    {


    }
}