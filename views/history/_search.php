<?php

use yii\helpers\Html;
use kartik\form\ActiveForm;

/** @var yii\web\View $this */
/** @var app\models\HistorySearch $model */
/** @var yii\widgets\ActiveForm $form */
?>

<div class="history-search">

    <?php $form = ActiveForm::begin([
        'action' => ['index'],
        'options' => ['data-pjax' => true ],
        'method' => 'get',
        'id' => 'login-form-inline', 
        'type' => ActiveForm::TYPE_INLINE,
        'fieldConfig' => ['options' => ['class' => 'form-group mb-0 mr-2 me-2']] // spacing form field groups
    ]); ?>

    <?php // $form->field($model, 'id') ?>

    <?= $form->field($model, 'dispensary') ?>

    <?= $form->field($model, 'recipient') ?>

    <?php // $form->field($model, 'illness') ?>

    <?= $form->field($model, 'list_drug')->textarea(['rows' => 1]) ?>

    <?php // echo $form->field($model, 'time') ?>

    <div class="form-group">
        <?= Html::submitButton('Search', ['class' => 'btn btn-primary']) ?>
        <?= Html::resetButton('Reset', ['class' => 'btn btn-outline-secondary']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
