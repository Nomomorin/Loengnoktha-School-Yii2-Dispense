<?php

use yii\db\Migration;

/**
 * Handles the creation of table `{{%data}}`.
 */
class m230505_051648_create_data_table extends Migration
{
    /**
     * {@inheritdoc}
     */
    public function safeUp()
    {
        $this->createTable('{{%medicine}}', [
            'id' => $this->primaryKey(),
            'name_medicine' => $this->text()->notNull(),
            'detail_medicine' => $this->text(),
            'status_medicine' => $this->boolean()->defaultValue(false),
        ]);
        $this->createTable('{{%student}}', [
            'id' => $this->primaryKey(),
            'id_student' => $this->integer()->notNull(),
            'medicine_allergy' => $this->text(),
            'first_name' => $this->text(),
            'last_name' => $this->text(),
            'sex' => $this->string(),
            'level' => $this->integer(),
            'blood_type' => $this->string(),
            'more' => $this->text(),
        ]);
        $this->createTable('{{%history}}', [
            'id' => $this->primaryKey(),
            'recipient' => $this->text(),
            'illness' => $this->text(),
            'list_drug' => $this->text(),
            'dispenser' => $this->text(),
            'time' => $this->dateTime(),
        ]);
    }

    /**
     * {@inheritdoc}
     */
    public function safeDown()
    {
        $this->dropTable('{{%medicine}}');
        $this->dropTable('{{%student}}');
        $this->dropTable('{{%history}}');
    }
}
