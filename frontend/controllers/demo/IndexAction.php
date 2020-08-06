<?php
namespace frontend\controllers\demo;
use yii\base\Action;

class IndexAction extends Action{
    public function run(){
        return $this->controller->render('index');
        //print_r($this->controller);
    }
}
?>