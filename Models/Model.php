<?php
namespace app\Models;
abstract class Model 
{
    public function loadData(array $data){
        foreach($data as $key=>$value)
        {
            $this->{$key} = $value ;
        }
    }
    public function validate()
    {

    }
}



?>