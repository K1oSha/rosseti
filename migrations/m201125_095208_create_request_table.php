<?php

use yii\db\Migration;

/**
 * Handles the creation of table `{{%request}}`.
 */
class m201125_095208_create_request_table extends Migration
{
    /**
     * {@inheritdoc}
     */
    public function safeUp()
    {
        $this->createTable('{{%request}}', [
            'id' => $this->primaryKey(),
            'author_id' => $this->integer(),
            'problem' => $this->text(),
            'solution' => $this->text(),
            'creation_time' => $this->date(),
            'deleted' => $this->boolean()->defaultValue(0),
            'category_id' => $this->integer(),
        ]);
    }

    /**
     * {@inheritdoc}
     */
    public function safeDown()
    {
        $this->dropTable('{{%request}}');
    }
}
