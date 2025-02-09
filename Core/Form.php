<?php 
namespace app\Core;
class Form 
{
    public static function begin($action , $method)
    {
        sprintf('<form class="mx-1 mx-md-4" action="%s" method="%s">',$action , $method);
        return new Form();
    }
    public function  end()
    {
        return '</form>';
    
    }
    public function field($model,$attribute){
        return new Field($model,$attribute);
    }
   


}