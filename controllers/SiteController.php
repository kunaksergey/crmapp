<?php
namespace app\controllers;
use \yii\web\Controller;
use app\models\user\LoginForm;
use \yii\web\ForbiddenHttpException;
use yii\filters\AccessControl;
use YII;

class SiteController extends Controller{
	public function behaviors(){
		return [
		  'access'=>[
		    'class'=>AccessControl::className(),
		    'only'=>['login','logout'],
		    'rules'=>[
		    	[
		    		'actions'=>['login'],
		    		'roles'=>['?'],
		    		'allow'=>true,
		    	],
		    	[
		    		'actions'=>['logout'],
		    		'roles'=>['@'],
		    		'allow'=>true,
		    	]
		    ]
		  ]
		];
	}


	public function actionIndex(){
		return $this->render('homepage');
	}

	public function actionDocs(){
		return $this->render('docindex.md');
	}

	public function actionLogin(){
		if (!\Yii::$app->user->isGuest)
			return $this->goHome();

		$model=new LoginForm();

			if($model->load(Yii::$app->request->post()) and $model->login())
				return $this->goBack();

			return $this->render('login',compact('model'));
		
	}

	public function actionLogout(){

		Yii::$app->user->logout();
		return $this->goHome();
	}	

	/*public function beforeAction($action){
		
		$parentAllowed=parent::beforeAction($action);
		$meAllowed=!Yii::$app->user->isGuest;
	//	return $parentAllowed and $meAllowed;
		/*if (Yii::$app->user->isGuest)
			throw new ForbiddenHttpException;
		return $parentAllowed;
 	return true;
	}*/
}