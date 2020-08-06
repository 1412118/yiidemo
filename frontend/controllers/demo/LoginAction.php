<?php
namespace frontend\controllers\demo;
use yii\base\Action;

use Yii;
use yii\web\Controller;
use backend\models\LoginForm;

class LoginAction extends Action{
    public function run(){
        if (!Yii::$app->user->isGuest) {
            return $this->controler->goHome();
        }

        $model = new LoginForm();
        if ($model->load(Yii::$app->request->post()) && $model->login()) {
            //return $this->goBack();
            return $this->controller->redirect(['/demo']);
        } else {
            $model->password = '';

            return $this->controller->render('login', [
                'model' => $model,
            ]);
        }
    }
}
?>