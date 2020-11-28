<?php

use yii\db\Migration;

/**
 * Handles the creation of table `{{%message}}`.
 */
class m300001_000000_create_file_table extends Migration
{
    /**
     * {@inheritdoc}
     */
    public function safeUp()
    {
        $this->createTable('{{%file}}', [
            'id' => $this->primaryKey(),
            'name' => $this->string(),
            'request_id' => $this->integer(),
            // 'request_id' => $this->integer(),
            // 'creation_time' => $this->dateTime(),
        ]);
    }

    /**
     * {@inheritdoc}
     */
    public function safeDown()
    {
        $this->dropTable('{{%file}}');
    }
}
