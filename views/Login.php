<div class="contaner-md">

  <div class="mb-3 ">
   
    <?php

use app\Core\Form;

    $form  = Form::begin('','post');
   echo  $form->field($model,"email");
   echo  $form->field($model,"password")->typePassword();
    ?>
  <button type="submit" class="btn btn-primary">Submit</button>
<?php Form::end(); ?>
</div>