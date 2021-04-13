<?php

use yii\helpers\html;
use yii\widgets\ActiveForm;
$this->title = 'Mi aplicacion tutorial';
?>


<div class="site-index">
<h3> Tecnología :</h3>

<div class="body-content">
<div class="list-group">
  <a href="#" class="list-group-item list-group-item-action flex-column align-items-start active">
    <div class="d-flex w-100 justify-content-between">
      <h5 class="mb-1">   <?php echo $posts->titulo;?></h5>
    </div>
    <p class="mb-1">   <?php echo $posts->descripcion;?></p>
    <small> Categoria: <?php echo $posts->categoria;?></small>
  </a>
  
</div>



<div class="row">
	  <a href=<?php echo yii::$app->homeUrl;?>  class=" btn btn-primary"> Atras </a>
	</div>

</div>

</div>
