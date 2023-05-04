<?php

namespace app\models;

use yii\db\Expression;
use Yii;

/**
 * This is the model class for table "history".
 *
 * @property int $id
 * @property string $dispensary
 * @property string $recipient
 * @property string $illness
 * @property string $list_drug
 * @property string $time
 */
class History extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'history';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['dispensary', 'recipient', 'illness', 'list_drug'], 'required'],
            [['time','list_drug'], 'safe'],
            [['time'], 'default', 'value' => new Expression('NOW()')],
            [['dispensary', 'recipient', 'illness'], 'string', 'max' => 255],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ไอดี',
            'dispensary' => 'ชื่อผู้จ่ายยา',
            'recipient' => 'ชื่อผู้รับยา',
            'illness' => 'อาการป่วย',
            'list_drug' => 'ยาที่จ่ายทั้งหมด',
            'time' => 'วันที่',
        ];
    }


    public function getListMedicine($model) {
        //echo '<script>console.log("'.htmlspecialchars(stripslashes(str_replace(array("\r", "\n"), '', var_export($model, true)))).'")</script>';
        $Medicines = $model->list_drug;
        $Medicines = substr($Medicines, 0, -1);
        $Medicines = substr($Medicines, 1);
        return $Medicines; 
    }

    public function getTest(){
        //echo '<script>console.log("'.htmlspecialchars(stripslashes(str_replace(array("\r", "\n"), '', var_export($i, true)))).'")</script>';
        return "gfhfghfgh";
    }
}
