<?php

use yii\helpers\Html;

/** @var yii\web\View $this */
/** @var app\models\Medicine $model */

$this->title = 'เพิ่มรายชื่อยา';
$this->params['breadcrumbs'][] = ['label' => 'Medicines', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="medicine-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
