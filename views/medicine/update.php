<?php

use yii\helpers\Html;

/** @var yii\web\View $this */
/** @var app\models\Medicine $model */

$this->title = 'แก้ไขข้อมูลยา: ' . $model->name_medicine;
$this->params['breadcrumbs'][] = ['label' => 'Medicines', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->id, 'url' => ['view', 'id' => $model->id]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="medicine-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_formForUpdate', [
        'model' => $model,
    ]) ?>

</div>
