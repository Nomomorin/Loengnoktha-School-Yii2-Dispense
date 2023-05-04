<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "student".
 *
 * @property int $id
 * @property int $id_student
 * @property string $medicine_allergy
 * @property string $first_name
 * @property string $last_name
 * @property string $sex
 * @property int $level
 * @property string $blood_type
 * @property string $more
 */
class Student extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'student';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['id_student', 'first_name', 'last_name', 'sex', 'level',], 'required'],
            [['id_student', 'level'], 'integer'],
            [['medicine_allergy', 'more'], 'string'],
            [['first_name', 'last_name'], 'string', 'max' => 255],
            [['sex'], 'string', 'max' => 100],
            [['blood_type'], 'string', 'max' => 10],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'id_student' => 'รหัสนักเรียน',
            'first_name' => 'ชื่อ',
            'last_name' => 'นายสกุล',
            'sex' => 'เพศ',
            'level' => 'ชั้นที่ศึกษา',
            'blood_type' => 'กรุ๊ปเลือด',
            'medicine_allergy' => 'ยาที่แพ้',
            'more' => 'เพิ่มเติม',
        ];
    }
}
