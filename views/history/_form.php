<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;
use unclead\multipleinput\MultipleInput;

/** @var yii\web\View $this */
/** @var app\models\History $model */
/** @var yii\widgets\ActiveForm $form */
?>

<div class="history-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'dispensary')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'recipient')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'illness')->textInput(['maxlength' => true]) ?>

    <?php echo $form->field($model, 'list_drug')->widget(MultipleInput::className(), [
        'min'               => 1, // should be at least 2 rows
        'allowEmptyList'    => false,
        'enableGuessTitle'  => true,
        'cloneButton' => '<button type="button" class="btn btn-success"><i class="glyphicon glyphicon-plus"></i></button>',
        'options' => [
            'class' => 'btn btn-success',
            'id' => 'btn btn-success',
        ],
        
        'addButtonPosition' => MultipleInput::POS_HEADER, // show add button in the header 
        ])->label(false);
    //$form->field($model, 'list_drug')->textarea(['rows' => 6]) ?>

    <?php // $form->field($model, 'time')->textInput() ?>

    <div class="form-group">
        <?= Html::submitButton('Save', ['class' => 'btn btn-success']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
