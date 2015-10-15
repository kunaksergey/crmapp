<?php

namespace app\controllers;

use Yii;
use app\models\customer\AddressRecord;
use yii\data\ActiveDataProvider;
use yii\web\Controller;
use yii\web\NotFoundHttpException;
use yii\filters\VerbFilter;
use app\utilities\SubmodelController;
/**
 * AddressController implements the CRUD actions for AddressRecord model.
 */
class AddressController extends SubmodelController
{
  public $recordClass='app\models\customer\AddressRecord';
}
