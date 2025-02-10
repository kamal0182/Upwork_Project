<?php 
namespace app\Core;
class Form 
{
    public static function begin($action , $method)
    {
       echo  sprintf('<form class="mx-1 mx-md-4" action="%s" method="%s">',$action , $method);
        return new Form();
    }
    public static function  end()
    {
        return '</form>';
    
    }
    public function field($model,$attribute){
        return new Field($model,$attribute);
    }
   


}