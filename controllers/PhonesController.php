<?php

namespace app\controllers;

use Yii;
use app\models\customer\PhoneRecord;
use yii\data\ActiveDataProvider;
use yii\web\Controller;
use yii\web\NotFoundHttpException;
use yii\filters\VerbFilter;
use app\utilities\SubmodelController;

/**
 * PhonesController implements the CRUD actions for PhoneRecord model.
 */
class PhonesController extends SubmodelController{
	public $recordClass ='app\models\customer\PhoneRecord';

}
