<?php 
namespace app\Models;

class RoleModel 
{
    private int $id;
    private string $name;
    private string $description;
    public  function __construct()
    {
        
    }
    public function __call($name, $arguments)
    {
        if($name == "createInstanceaWithName"){
            $this->name = $arguments[0];
        }
    }
    
}