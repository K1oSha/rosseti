<?php

use yii\db\Migration;

/**
 * Handles the creation of table `{{%state_history_request}}`.
 */
class m201125_123110_create_state_history_request_table extends Migration
{
    /**
     * {@inheritdoc}
     */
    public function safeUp()
    {
        $this->createTable('{{%state_history_request}}', [
            'id' => $this->primaryKey(),
            'date'=>$this->date(),
            'requests_id'=>$this->integer(),
            'status_id'=>$this->integer()
        ]);
    }

    /**
     * {@inheritdoc}
     */
    public function safeDown()
    {
        $this->dropTable('{{%state_history_request}}');
    }
}
