<?php

use yii\helpers\Html;

/** @var yii\web\View $this */
/** @var app\models\History $model */

$this->title = 'จ่ายยา';
$this->params['breadcrumbs'][] = ['label' => 'Histories', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="history-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
