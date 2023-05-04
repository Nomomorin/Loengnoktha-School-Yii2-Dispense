<?php

use yii\helpers\Html;
use kartik\form\ActiveForm;
use kartik\select2\Select2;

/** @var yii\web\View $this */
/** @var app\models\StudentSearch $model */
/** @var yii\widgets\ActiveForm $form */
?>

<div class="student-search">

    <?php $form = ActiveForm::begin([
        'action' => ['index'],
        'method' => 'get',
        'id' => 'login-form-inline', 
        'options' => ['data-pjax' => true ],
        'type' => ActiveForm::TYPE_INLINE,
        'fieldConfig' => ['options' => ['class' => 'form-group mb-0 mr-5 me-3']] // spacing form field groups
    ]); ?>

    <?php //$form->field($model, 'id') ?>

    <?= $form->field($model, 'id_student') ?>

    <?php //$form->field($model, 'medicine_allergy') ?>

    <?= $form->field($model, 'first_name') ?>

    <?= $form->field($model, 'last_name') ?>

    <?php // echo $form->field($model, 'sex') ?>

    <?php  //echo $form->field($model, 'level') ?>
    <?= $form->field($model, 'level')->widget(Select2::classname(), [
            'data' => [
                '1'=>'ชั้นมัธยมศึกษาปีที่ 1',
                '2'=>'ชั้นมัธยมศึกษาปีที่ 2',
                '3'=>'ชั้นมัธยมศึกษาปีที่ 3',
                '4'=>'ชั้นมัธยมศึกษาปีที่ 4',
                '5'=>'ชั้นมัธยมศึกษาปีที่ 5',
                '6'=>'ชั้นมัธยมศึกษาปีที่ 6'],
            'options' => ['placeholder' => 'เลือกชั้นของนักเรียน....'],
            'pluginOptions' => [
                'allowClear' => true
            ],
        ]);
    /* $form->field($model, 'level')->textInput() */ ?>

    <?php // echo $form->field($model, 'blood_type') ?>

    <?php // echo $form->field($model, 'more') ?>

    <div class="form-group">
        <?= Html::submitButton('Search', ['class' => 'btn btn-primary']) ?>
        <?= Html::resetButton('Reset', ['class' => 'btn btn-outline-secondary']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
