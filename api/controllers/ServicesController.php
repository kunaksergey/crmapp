<?php
namespace app\api\controllers;
use yii\web\Controller;
use app\models\service\ServiceRecord;
use app\utilities\YamlResponseFormatter;
use yii\web\Response;
use YII;

class ServicesController extends Controller{
	public function actionJson(){
        $models=ServiceRecord::find()->all();
        $data=array_map(function($model){
                               return $model->attributes;
                        },
                        $models
              );
        $response=YII::$app->response;
       $response->format=Response::FORMAT_JSON;
        $response->data=$data;
        return $response;

    }

      public function actionYaml(){
        $models=ServiceRecord::find()->all();
        $data=array_map(function($model){
                               return $model->attributes;
                        },
                        $models
              );
        $response=YII::$app->response;
       $response->format=YamlResponseFormatter::FORMAT;
        $response->data=$data;
        return $response;

    }
}