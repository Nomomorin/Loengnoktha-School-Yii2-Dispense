<?php

use app\models\Student;
use yii\helpers\Html;
use yii\helpers\Url;
use yii\grid\ActionColumn;
use yii\grid\GridView;
use yii\widgets\Pjax;

/** @var yii\web\View $this */
/** @var app\models\StudentSearch $searchModel */
/** @var yii\data\ActiveDataProvider $dataProvider */

$this->title = 'รายชื่อนักเรียน';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="student-index">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('เพิ่มรายชื่อนักเรียน', ['create'], ['class' => 'btn btn-success']) ?>
    </p>
    <?php yii\widgets\Pjax::begin(['id' => 'grid-user-pjax','timeout'=>5000]) ?>
    
        <?php  echo $this->render('_search', ['model' => $searchModel]); ?>

    
        <?= GridView::widget([
            'dataProvider' => $dataProvider,
            //'filterModel' => $searchModel,
            'tableOptions' => [
                'class' => 'table table-bordered  table-striped table-hover',
              ],
            'columns' => [
                ['class' => 'yii\grid\SerialColumn'],

                //'id',
                'id_student',
                'first_name',
                'last_name',
                'sex',
                'level',
                'blood_type',
                'medicine_allergy:ntext',
                'more:ntext',
                [
                    'class' => ActionColumn::className(),
                    'options'=>['style'=>'width:120px;'],
                      'buttonOptions'=>['class'=>'btn btn-default'],
                      'template'=>'<div class="btn-group btn-group-sm text-center" role="group"> {view} {update} {delete} </div>',
                    'urlCreator' => function ($action, Student $model, $key, $index, $column) {
                        return Url::toRoute([$action, 'id' => $model->id]);
                    }
                ],
            ],
        ]); ?>

    <?php yii\widgets\Pjax::end() ?>

</div>
