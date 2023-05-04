<?php


use yii\helpers\Html;
use kartik\grid\GridView;
use yii\grid\ActionColumn;
use yii\helpers\Url;
/** @var yii\web\View $this */

use app\models\Student;
/** @var yii\data\ActiveDataProvider $dataProviderstudent */

use app\models\Medicine;
/** @var yii\data\ActiveDataProvider $dataProvidermedicine */

$this->title = 'Loengnoktha school';


?>
<h1 class='mt-3 mb-3'>รายชื่อนักเรียน</h1>
<p>
    <?= Html::a('เพิ่มรายชื่อนักเรียน', ['student/create'], ['class' => 'btn btn-success']) ?>
</p>

<?php // echo $this->render('../student/_search.php', ['model' => $searchModelstudent]); ?>


<?= GridView::widget([
        'dataProvider' => $dataProviderstudent,
        'pjax' => true,
        'responsive' => false,
        'bordered' => true,
        'striped' => false,
        'condensed' => true,
        'hover' => true,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            //'id',
            'id_student',
            'first_name',
            'last_name',
            'sex',
            'level',
            'blood_type',
            'medicine_allergy:ntext',
            'more:ntext',
            [
                'class' => ActionColumn::className(),
                'urlCreator' => function ($action, Student $model, $key, $index, $column) {
                    return Url::toRoute([$action, 'id' => $model->id]);
                }
            ],
        ],
    ]); ?>


<h1 class='mt-3 mb-3'>รายชื่อยา</h1>
<p>
    <?= Html::a('เพิ่มรายชื่อยา', ['medicine/create'], ['class' => 'btn btn-success']) ?>
</p>

<?php // echo $this->render('../medicine/_search.php', ['model' => $searchModelmedicine]); ?>

    <?= GridView::widget([
        'dataProvider' => $dataProvidermedicine,
        'pjax' => true,
        'responsive' => false,
        'bordered' => true,
        'striped' => false,
        'condensed' => true,
        'hover' => true,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            //'id',
            'name_medicine',
            'detail_medicine:ntext',
            'status_medicine:boolean',
            [
                'class' => ActionColumn::className(),
                'urlCreator' => function ($action, Medicine $model, $key, $index, $column) {
                    return Url::toRoute([$action, 'id' => $model->id]);
                 }
            ],
        ],
    ]); ?>