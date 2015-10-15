<?php
namespace app\controllers;
use yii\web\Controller;
use app\models\Test;
use \Yii;

class TestController extends Controller {

	public $layout='test';

	public function actionAdd(){
		$model=new Test;
		if ($model->load(Yii::$app->request->post()) && $model->save()){
			return $this->render('ok');	
		}
		return $this->render('add',['model' => $model]);
	}
}
