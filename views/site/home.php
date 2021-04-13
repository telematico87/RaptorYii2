<?php

use yii\helpers\html;
$this->title = ' Tecnologías PHP';
?>
<?php if(yii::$app->session->hasFlash('message')):?>

	<div class="alert alert-dismissible alert-success">
  <button type="button" class="close" data-dismiss="alert">&times;</button>
  <?php echo yii::$app->session->getFlash('message');?>
</div>

	
<?php endif;?>
<div class="site-index">
<div class="jumbotron">
<h1 style="color:orange"> Tecnologías PHP </h1>
</div>

<div class="row">
<?=Html::a('Nuevo',['site/nuevo'],['class'=>'btn btn-primary']);?>
</div>
<br/>
    <div class="body-content">

    <table class="table table-hover">
  <thead>
      <th scope="col">ID</th>
      <th scope="col">TITULO</th>
      <th scope="col">DESCRIPCION</th>
      <th scope="col">CATEGORIA</th>
      <th scope="col">ACCION</th>
    </tr>
  </thead>
  <tbody>
  	<?php 
 
  		foreach($posts as $post):
  		?>
      <tr class="table-success">
      <td ><?php echo $post->id;?></td>
  
      <td><?php echo $post->titulo?></td>
        <td><?php echo $post->descripcion?></td>
         <td><?php echo $post->categoria?></td>
       <td><?=Html::a('Ver',['ver','id'=>$post->id],['class'=>'label label-primary']);?>
       	<?=Html::a('Editar',['actualizar','id'=>$post->id],['class'=>'label label-success']);?>
       	<?=Html::a('Eliminar',['eliminar','id'=>$post->id],['class'=>'label label-danger']);?>
       </td>
     </tr>
       	<?php
       endforeach;
      
	?>
  </tbody>
</table>  


   
       

    </div>
</div>