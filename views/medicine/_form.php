<?php

use yii\helpers\Html;
use kartik\form\ActiveForm;

/** @var yii\web\View $this */
/** @var app\models\Medicine $model */
/** @var yii\widgets\ActiveForm $form */
?>

<div class="medicine-form">

    <?php $form = ActiveForm::begin([
         'id' => 'login-form-horizontal', 
         'type' => ActiveForm::TYPE_HORIZONTAL,
         'formConfig' => ['labelSpan' => 2, 'deviceSize' => ActiveForm::SIZE_SMALL]
    ]); ?>

    <?= $form->field($model, 'name_medicine')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'detail_medicine')->textarea(['rows' => 6]) ?>

    <?php // $form->field($model, 'status_medicine')->textInput() ?>

    <div class="form-group">
        <?= Html::submitButton('Save', ['class' => 'btn btn-success']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
