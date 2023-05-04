<?php

use app\models\History;
use yii\helpers\Html;
use yii\helpers\Url;
use yii\grid\ActionColumn;
use yii\grid\GridView;
use yii\widgets\Pjax;

/** @var yii\web\View $this */
/** @var app\models\HistorySearch $searchModel */
/** @var yii\data\ActiveDataProvider $dataProvider */

$htr = new History();

$this->title = 'ประวัติการจ่ายยา';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="history-index">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('จ่ายยา', ['create'], ['class' => 'btn btn-success']) ?>
    </p>

    <?php yii\widgets\Pjax::begin(['id' => 'grid-user-pjax','timeout'=>5000]) ?>


    <?php  echo $this->render('_search', ['model' => $searchModel]); ?>

    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        //'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            //'id',
            'dispensary',
            'recipient',
            'illness',
            [
                'attribute' => 'list_drug',
                /* 'value' => function ($model) {
                    return $model->getListMedicine($model);
                } */
            ],
            'time',
            [
                'class' => ActionColumn::className(),
                'options'=>['style'=>'width:120px;'],
                      'buttonOptions'=>['class'=>'btn btn-default'],
                      'template'=>'<div class="btn-group btn-group-sm text-center" role="group"> {view} {update} {delete} </div>',
                'urlCreator' => function ($action, History $model, $key, $index, $column) {
                    return Url::toRoute([$action, 'id' => $model->id]);
                 }
            ],
        ],
    ]); ?>

<?php yii\widgets\Pjax::end() ?>


</div>
