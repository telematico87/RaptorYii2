<?php

namespace app\controllers;

use Yii;
use yii\filters\AccessControl;
use yii\web\Controller;
use yii\web\Response;
use yii\filters\VerbFilter;
use app\models\LoginForm;
use app\models\ContactForm;
use app\models\Post;

class SiteController extends Controller
{
    /**
     * {@inheritdoc}
     */
    public function behaviors()
    {
        return [
            'access' => [
                'class' => AccessControl::className(),
                'only' => ['logout'],
                'rules' => [
                    [
                        'actions' => ['logout'],
                        'allow' => true,
                        'roles' => ['@'],
                    ],
                ],
            ],
            'verbs' => [
                'class' => VerbFilter::className(),
                'actions' => [
                    'logout' => ['post'],
                ],
            ],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function actions()
    {
        return [
            'error' => [
                'class' => 'yii\web\ErrorAction',
            ],
            'captcha' => [
                'class' => 'yii\captcha\CaptchaAction',
                'fixedVerifyCode' => YII_ENV_TEST ? 'testme' : null,
            ],
        ];
    }

    /**
     * Displays homepage.
     *
     * @return string
     */
    public function actionIndex()
    {
        $posts=Post::find()->all();
        return $this->render('home',['posts'=>$posts]);
    }

    public function actionNuevo(){
        $posts=new Post();
        $formData=Yii::$app->request->post();


        if($posts->load($formData)){

            if($posts->save()){

                yii::$app->getSession()->setFlash('message','Registro creado con éxito');
                return $this->redirect(['index']);
            }
            else{
            
                 yii::$app->getSession()->setFlash('message','Error al registrar');
            }


        }
        return $this->render('nuevo',['posts'=>$posts]);
           

           }

    public function actionVer($id){

        $posts= Post::findOne($id);
         return $this->render('ver',['posts'=>$posts]);
    }
    

    public function actionActualizar($id){
        $posts= Post::findOne($id);
        if($posts->load(Yii::$app->request->post())&& $posts->save()){
            yii::$app->getSession()->setFlash('message','Registro actualizado con éxito');
                return $this->redirect(['index','id'=>$posts->id]);

        }else{
             return $this->render('actualizar',['posts'=>$posts]);
        }
       
    }

    public function actionEliminar($id){
       $posts=Post::findOne($id)->delete();
       if($posts){
            yii::$app->getSession()->setFlash('message','Registro borrado con éxito');
            return $this->redirect(['index']);
       }


    }

}
