<?php
namespace frontend\controllers;

use Yii;
use yii\web\Controller;
use backend\models\LoginForm;

class DemoController extends Controller{
    // public function actionIndex(){
    //    return $this->render('index');
    // }
    public function actions(){
        return array(
            'index' => 'frontend\controllers\demo\IndexAction',
            'login' => 'frontend\controllers\demo\LoginAction',
            'signup' => 'frontend\controllers\demo\SignupAction'
        );
    }
}
?>