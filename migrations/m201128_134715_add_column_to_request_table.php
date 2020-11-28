<?php

use yii\db\Migration;

/**
 * Handles adding columns to table `{{%request}}`.
 */
class m201128_134715_add_column_to_request_table extends Migration
{
    /**
     * {@inheritdoc}
     */
    public function safeUp()
    {
        $this->addColumn('{{%request}}', 'comment', $this->string());
    }

    /**
     * {@inheritdoc}
     */
    public function safeDown()
    {
    }
}
