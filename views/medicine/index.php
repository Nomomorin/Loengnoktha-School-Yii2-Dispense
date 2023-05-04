<?php

use app\models\Medicine;
use yii\helpers\Html;
use yii\helpers\Url;
use yii\grid\ActionColumn;
use yii\grid\GridView;
use yii\widgets\Pjax;

/** @var yii\web\View $this */
/** @var app\models\MedicineSearch $searchModel */
/** @var yii\data\ActiveDataProvider $dataProvider */

$this->title = 'รายชื่อยา';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="medicine-index">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('เพิ่มรายชื่อยา', ['create'], ['class' => 'btn btn-success']) ?>
    </p>

    <?php yii\widgets\Pjax::begin(['id' => 'grid-user-pjax','timeout'=>5000]) ?>

    <?php  echo $this->render('_search', ['model' => $searchModel]); ?>

    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        //'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],
            'id',
            'name_medicine',
            'detail_medicine:ntext',
            //'status_medicine:boolean',
            [
                'label'=>'สถานะยา',
                'format'=>'html',
                'value'=>function($model){
                    return $model->status_medicine==0?'<i class="glyphicon glyphicon-remove"></i> <span class="text-danger">ไม่มี</span>':'<i class="glyphicon glyphicon-ok"></i> <span class="text-success">มี</span>';
                }
            ],
            [
                'class' => ActionColumn::className(),
                'options'=>['style'=>'width:120px;'],
                      'buttonOptions'=>['class'=>'btn btn-default'],
                      'template'=>'<div class="btn-group btn-group-sm text-center" role="group"> {view} {update} {delete} </div>',
                'urlCreator' => function ($action, Medicine $model, $key, $index, $column) {
                    return Url::toRoute([$action, 'id' => $model->id]);
                 }
            ],
        ],
    ]); ?>

<?php yii\widgets\Pjax::end() ?>
</div>
