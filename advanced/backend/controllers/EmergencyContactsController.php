<?php

namespace backend\controllers;

use Yii;
use backend\models\EmergencyContacts;
use backend\models\EmergencyContactsSearch;
use yii\web\Controller;
use yii\web\NotFoundHttpException;
use yii\filters\VerbFilter;

/**
 * EmergencyContactsController implements the CRUD actions for EmergencyContacts model.
 */
class EmergencyContactsController extends Controller
{
    /**
     * @inheritdoc
     */
    public function behaviors()
    {
        return [
            'verbs' => [
                'class' => VerbFilter::className(),
                'actions' => [
                    'delete' => ['POST'],
                ],
            ],
        ];
    }

    /**
     * Lists all EmergencyContacts models.
     * @return mixed
     */
    public function actionIndex()
    {
        $searchModel = new EmergencyContactsSearch();
        $dataProvider = $searchModel->search(Yii::$app->request->queryParams);

        return $this->render('index', [
            'searchModel' => $searchModel,
            'dataProvider' => $dataProvider,
        ]);
    }

    /**
     * Displays a single EmergencyContacts model.
     * @param integer $id
     * @param integer $volunteer_user_id
     * @return mixed
     */
    public function actionView($id, $volunteer_user_id)
    {
        return $this->render('view', [
            'model' => $this->findModel($id, $volunteer_user_id),
        ]);
    }

    /**
     * Creates a new EmergencyContacts model.
     * If creation is successful, the browser will be redirected to the 'view' page.
     * @return mixed
     */
    public function actionCreate()
    {
        $model = new EmergencyContacts();

        if ($model->load(Yii::$app->request->post()) && $model->save()) {
            return $this->redirect(['view', 'id' => $model->id, 'volunteer_user_id' => $model->volunteer_user_id]);
        } else {
            return $this->render('create', [
                'model' => $model,
            ]);
        }
    }

    /**
     * Updates an existing EmergencyContacts model.
     * If update is successful, the browser will be redirected to the 'view' page.
     * @param integer $id
     * @param integer $volunteer_user_id
     * @return mixed
     */
    public function actionUpdate($id, $volunteer_user_id)
    {
        $model = $this->findModel($id, $volunteer_user_id);

        if ($model->load(Yii::$app->request->post()) && $model->save()) {
            return $this->redirect(['view', 'id' => $model->id, 'volunteer_user_id' => $model->volunteer_user_id]);
        } else {
            return $this->render('update', [
                'model' => $model,
            ]);
        }
    }

    /**
     * Deletes an existing EmergencyContacts model.
     * If deletion is successful, the browser will be redirected to the 'index' page.
     * @param integer $id
     * @param integer $volunteer_user_id
     * @return mixed
     */
    public function actionDelete($id, $volunteer_user_id)
    {
        $this->findModel($id, $volunteer_user_id)->delete();

        return $this->redirect(['index']);
    }

    /**
     * Finds the EmergencyContacts model based on its primary key value.
     * If the model is not found, a 404 HTTP exception will be thrown.
     * @param integer $id
     * @param integer $volunteer_user_id
     * @return EmergencyContacts the loaded model
     * @throws NotFoundHttpException if the model cannot be found
     */
    protected function findModel($id, $volunteer_user_id)
    {
        if (($model = EmergencyContacts::findOne(['id' => $id, 'volunteer_user_id' => $volunteer_user_id])) !== null) {
            return $model;
        } else {
            throw new NotFoundHttpException('The requested page does not exist.');
        }
    }
}
