<?php

use yii\helpers\Html;
use yii\widgets\DetailView;

/** @var yii\web\View $this */
/** @var app\models\Medicine $model */

$this->title = $model->id;
$this->params['breadcrumbs'][] = ['label' => 'Medicines', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
\yii\web\YiiAsset::register($this);
?>
<div class="medicine-view">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('Update', ['update', 'id' => $model->id], ['class' => 'btn btn-primary']) ?>
        <?= Html::a('Delete', ['delete', 'id' => $model->id], [
            'class' => 'btn btn-danger',
            'data' => [
                'confirm' => 'Are you sure you want to delete this item?',
                'method' => 'post',
            ],
        ]) ?>
    </p>

    <?= DetailView::widget([
        'model' => $model,
        'attributes' => [
            'id',
            'name_medicine',
            'detail_medicine:ntext',
            [
                'label'=>'สถานะยา',
                'format'=>'html',
                'value'=>function($model){
                    return $model->status_medicine==0?'<i class="glyphicon glyphicon-remove"></i> <span class="text-danger">ไม่มี</span>':'<i class="glyphicon glyphicon-ok"></i> <span class="text-success">มี</span>';
                }
            ],
            //'status_medicine',
        ],
    ]) ?>

</div>
