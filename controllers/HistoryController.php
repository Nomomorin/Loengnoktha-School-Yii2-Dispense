<?php

namespace app\controllers;

use app\models\History;
use app\models\HistorySearch;
use yii\web\Controller;
use yii\web\NotFoundHttpException;
use yii\filters\VerbFilter;

/**
 * HistoryController implements the CRUD actions for History model.
 */
class HistoryController extends Controller
{
    /**
     * @inheritDoc
     */
    public function behaviors()
    {
        return array_merge(
            parent::behaviors(),
            [
                'verbs' => [
                    'class' => VerbFilter::className(),
                    'actions' => [
                        'delete' => ['POST'],
                    ],
                ],
            ]
        );
    }

    /**
     * Lists all History models.
     *
     * @return string
     */
    public function actionIndex()
    {
        $searchModel = new HistorySearch();
        $dataProvider = $searchModel->search($this->request->queryParams);

        return $this->render('index', [
            'searchModel' => $searchModel,
            'dataProvider' => $dataProvider,
        ]);
    }

    /**
     * Displays a single History model.
     * @param int $id ID
     * @return string
     * @throws NotFoundHttpException if the model cannot be found
     */
    public function actionView($id)
    {
        return $this->render('view', [
            'model' => $this->findModel($id),
        ]);
    }

    /**
     * Creates a new History model.
     * If creation is successful, the browser will be redirected to the 'view' page.
     * @return string|\yii\web\Response
     */
    public function actionCreate()
    {
        $model = new History();
        if ($this->request->isPost) {
            $model->load($this->request->post());
            $model->list_drug = implode(" ",$model->list_drug) ;
            //$test = gettype($model->list_drug);
            //echo "<script type='text/javascript'>alert('$model->list_drug');</script>";
            if ($model->load($this->request->post())) {
                //echo "<script type='text/javascript'>alert('$model->list_drug');</script>";
                $model->list_drug =   implode(" ",$model->list_drug) ;
                $model->save();
                return $this->redirect(['view', 'id' => $model->id]);
            } 
            } else {
                $model->loadDefaultValues(); 
            }

        return $this->render('create', [
            'model' => $model,
        ]); 
    }

    /**
     * Updates an existing History model.
     * If update is successful, the browser will be redirected to the 'view' page.
     * @param int $id ID
     * @return string|\yii\web\Response
     * @throws NotFoundHttpException if the model cannot be found
     */
    public function actionUpdate($id)
    {
        $model = $this->findModel($id);

        if ($this->request->isPost && $model->load($this->request->post()) ) {
            $model->list_drug = implode(" ",$model->list_drug) ;
            $model->save();
            return $this->redirect(['view', 'id' => $model->id]);
        }

        return $this->render('update', [
            'model' => $model,
        ]);
    }

    /**
     * Deletes an existing History model.
     * If deletion is successful, the browser will be redirected to the 'index' page.
     * @param int $id ID
     * @return \yii\web\Response
     * @throws NotFoundHttpException if the model cannot be found
     */
    public function actionDelete($id)
    {
        $this->findModel($id)->delete();

        return $this->redirect(['index']);
    }

    /**
     * Finds the History model based on its primary key value.
     * If the model is not found, a 404 HTTP exception will be thrown.
     * @param int $id ID
     * @return History the loaded model
     * @throws NotFoundHttpException if the model cannot be found
     */
    protected function findModel($id)
    {
        if (($model = History::findOne(['id' => $id])) !== null) {
            return $model;
        }

        throw new NotFoundHttpException('The requested page does not exist.');
    }

    public function getListMedicine($model) {
        $Medicines = $model['list_drug'];
        $MedicinesStr = '';
        foreach ($Medicines as $i) {
            $MedicinesStr .= $i . ', ';
        }
        return rtrim($MedicinesStr, ', ');
    }
}
