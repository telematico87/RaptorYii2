<?php

use yii\helpers\html;
use yii\widgets\ActiveForm;
$this->title = 'Mi aplicacion tutorial';
?>


<div class="site-index">

<h3> Editar Tecnología:</h3>
<br/>
<div class="body-content">

<?php $form=ActiveForm::begin();
?>

<div class="row">
  <div class="form-group">
<div class="col-lg-6">
  <?= $form->field($posts,'titulo'); ?>
</div>
</div>
</div>
<div class="row">
 <div class="form-group">
<div class="col-lg-6">
  <?= $form->field($posts,'descripcion')->textarea(['rows'=>'6']); ?>
</div>
</div>
</div>
<div class="row">
 <div class="form-group">
<div class="col-lg-6">
  <?php $items=['e-comerce'=>'e-comerce','CMS'=>'CMS','MVC'=>'MVC','MicroFramework'=>'MicroFramework']?>
  <?= $form->field($posts,'categoria')->dropDownlist($items,['promt'=>'select']); ?>
</div>
</div>
</div>
<br/>
<div class="row">
 <div class="form-group">
<div class="col-lg-6">
  <div class="col-lg-3">
   <?= Html::submitButton('Actualizar',['class'=>'btn btn-primary']); ?>
</div>
<div class="col-lg-2">
  <a href=<?php echo yii::$app->homeUrl;?>  class=" btn btn-primary"> Atras </a>
</div>
</div>
</div>
</div>

    <?php ActiveForm::end();?>
</div>

</div>
