<?php

use yii\helpers\Html;
use kartik\form\ActiveForm;
use kartik\select2\Select2;

/** @var yii\web\View $this */
/** @var app\models\Student $model */
/** @var yii\widgets\ActiveForm $form */
?>

<div class="student-form">

    <?php $form = ActiveForm::begin([
        'id' => 'login-form-horizontal',
        'type' => ActiveForm::TYPE_HORIZONTAL,
    ]); ?>

    <?= $form->field($model, 'id_student')->textInput() ?>

    <?= $form->field($model, 'first_name')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'last_name')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'sex')->widget(Select2::classname(), [
            'data' => [
                'male'=>'ชาย',
                'female'=>'หญิง'],
            'options' => ['placeholder' => 'เลือกเพศนักเรียน'],
            'pluginOptions' => [
                'allowClear' => true
            ],
        ]);
    /*  $form->field($model, 'sex')->textInput(['maxlength' => true])  */?>

    <?= $form->field($model, 'level')->widget(Select2::classname(), [
            'data' => [
                '1'=>'ชั้นมัธยมศึกษาปีที่ 1',
                '2'=>'ชั้นมัธยมศึกษาปีที่ 2',
                '3'=>'ชั้นมัธยมศึกษาปีที่ 3',
                '4'=>'ชั้นมัธยมศึกษาปีที่ 4',
                '5'=>'ชั้นมัธยมศึกษาปีที่ 5',
                '6'=>'ชั้นมัธยมศึกษาปีที่ 6'],
            'options' => ['placeholder' => 'เลือกชั้นของนักเรียน'],
            'pluginOptions' => [
                'allowClear' => true
            ],
        ]);
    /* $form->field($model, 'level')->textInput() */ ?>

    <?= $form->field($model, 'blood_type')->widget(Select2::classname(), [
            'data' => [
                'A'=>'A',
                'B'=>'B',
                'O'=>'O',
                'AB'=>'AB',
            ],
            'options' => ['placeholder' => 'เลือกกรุ๊ปเลือดนักเรียน'],
            'pluginOptions' => [
                'allowClear' => true
            ],
        ]);
    /* $form->field($model, 'blood_type')->textInput(['maxlength' => true]) */ ?>

    <?= $form->field($model, 'medicine_allergy')->textarea(['rows' => 6]) ?>

    <?= $form->field($model, 'more')->textarea(['rows' => 6]) ?>

    <div class="form-group">
        <?= Html::submitButton('Save', ['class' => 'btn btn-success']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
