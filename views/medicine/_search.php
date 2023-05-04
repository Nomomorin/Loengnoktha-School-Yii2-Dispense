<?php

use yii\helpers\Html;
use kartik\form\ActiveForm;
use kartik\select2\Select2;


/** @var yii\web\View $this */
/** @var app\models\MedicineSearch $model */
/** @var yii\widgets\ActiveForm $form */
?>

<div class="medicine-search">

    <?php $form = ActiveForm::begin([
        'action' => ['index'],
        'method' => 'get',
        'options' => ['data-pjax' => true ],
        'id' => 'login-form-inline', 
        'type' => ActiveForm::TYPE_INLINE,
        'fieldConfig' => ['options' => ['class' => 'form-group mb-0 mr-2 me-2']] // spacing form field groups
    ]); ?>

    <?php // $form->field($model, 'id') ?>

    <?= $form->field($model, 'name_medicine') ?>

    <?php //$form->field($model, 'detail_medicine') ?>

    <?=  $form->field($model, 'status_medicine')->widget(Select2::classname(), [
            'data' => [
                true=>'มี',
                false=>'ไม่มี'],
            'options' => ['placeholder' => 'สถานะยา...'],
            'pluginOptions' => [
                'allowClear' => true
            ],
        ]); 
    /* $form->field($model, 'status_medicine') */ ?>

    <div class="form-group">
        <?= Html::submitButton('Search', ['class' => 'btn btn-primary']) ?>
        <?= Html::resetButton('Reset', ['class' => 'btn btn-outline-secondary']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
