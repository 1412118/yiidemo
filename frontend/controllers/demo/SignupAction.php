<?php
namespace frontend\controllers\demo;
use yii\base\Action;

use Yii;
use yii\web\Controller;
use backend\models\SignupForm;

class SignupAction extends Action{
    public function run(){
        $model = new SignupForm();
        if ($model->load(Yii::$app->request->post()) && $model->signup()) {
            Yii::$app->session->setFlash('success', 'Thank you for registration. Please check your inbox for verification email.');
            //return $this->controller->goHome();
            return $this->controller->redirect(array('/demo'));
        }

        return $this->controller->render('signup', [
            'model' => $model,
        ]);
    }
}
?>