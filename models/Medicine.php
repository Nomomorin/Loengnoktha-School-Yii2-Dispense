<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "medicine".
 *
 * @property int $id
 * @property string $name_medicine
 * @property string $detail_medicine
 * @property int $status_medicine
 */
class Medicine extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'medicine';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['name_medicine', 'detail_medicine',], 'required'],
            [['detail_medicine'], 'string'],
            [['status_medicine'],'default', 'value' =>true],
            [['name_medicine'], 'string', 'max' => 255],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'name_medicine' => 'ชื่อยา',
            'detail_medicine' => 'รายละเอียดยา',
            'status_medicine' => 'สถานะยา',
        ];
    }
}
