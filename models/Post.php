<?php

namespace app\models;
use yii\db\ActiveRecord;

class Post extends ActiveRecord
{   
    public $titulo1;
    public $descripcion1;
    public $categoria1;


    /**
     * {@inheritdoc}
     */
    public  function rules()
    {
        return  [[[ 'titulo','descripcion','categoria'],'required']];
      
    }

 
}
