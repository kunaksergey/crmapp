<?php

namespace app\utilities;

use Yii;
use app\models\customer\AddressRecord;
use yii\data\ActiveDataProvider;
use yii\web\Controller;
use yii\web\NotFoundHttpException;
use yii\filters\VerbFilter;

/**
 * AddressController implements the CRUD actions for AddressRecord model.
 */
class SubmodelController extends Controller
{
    public $recordClass;
    public function behaviors()
    {
        return [
            'verbs' => [
                'class' => VerbFilter::className(),
                'actions' => [
                    'delete' => ['post'],
                ],
            ],
        ];
    }

    /**
     * Lists all AddressRecord models.
     * @return mixed
     */
    

    /**
     * Displays a single AddressRecord model.
     * @param integer $id
     * @return mixed
     */
    public function actionView($id)
    {
        return $this->render('view', [
            'model' => $this->findModel($id),
        ]);
    }

    /**
     * Creates a new AddressRecord model.
     * If creation is successful, the browser will be redirected to the 'view' page.
     * @return mixed
     */
    public function actionCreate()
    {   /** @var ActiveRecord $model */
        $model = new $this->recordClass;

        if ($model->load(Yii::$app->request->post())
         && $model->save())
            return $this->redirect(['view', 'id' => $model->id]);
        
        return $this->render('create', compact('model'));
        }
    }

    /**
     * Updates an existing AddressRecord model.
     * If update is successful, the browser will be redirected to the 'view' page.
     * @param integer $id
     * @return mixed
     */
    public function actionUpdate($id)
    {
        $model = $this->findModel($id);

        if ($model->load(Yii::$app->request->post())
         && $model->save()) 
         return $this->redirect(['view', 'id' => $model->id]);
        
        return $this->render('update', compact('model'));
        }
    }

    /**
     * Deletes an existing AddressRecord model.
     * If deletion is successful, the browser will be redirected to the 'index' page.
     * @param integer $id
     * @return mixed
     */
    public function actionDelete($id)
    {
        $this->findModel($id)->delete();

        return $this->redirect(['index']);
    }

    /**
     * Finds the AddressRecord model based on its primary key value.
     * If the model is not found, a 404 HTTP exception will be thrown.
     * @param integer $id
     * @return AddressRecord the loaded model
     * @throws NotFoundHttpException if the model cannot be found
     */
    protected function findModel($id)
    {
        $model = call_user_func([$this->recordClass,'findOne'],$id);

        if (!$model) 
           throw new NotFoundHttpException('The requested page does not exist.');
        return $model;
    }
}
