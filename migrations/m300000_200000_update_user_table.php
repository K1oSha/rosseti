<?php

use yii\db\Migration;

/**
 * Handles the creation of table `{{%user}}`.
 */
class m300000_200000_update_user_table extends Migration
{
    /**
     * {@inheritdoc}
     */
    public function safeUp()
    {
        $this->addColumn('user', 'region', $this->string());
        $this->addColumn('user', 'rating', $this->string());
        $this->addColumn('user', 'subdivision', $this->string());
        $this->addColumn('user', 'telephone', $this->string());
        $this->addColumn('user', 'position', $this->string());
        $this->addColumn('user', 'education', $this->string());
        $this->addColumn('user', 'experience', $this->string());
    }

    /**
     * {@inheritdoc}
     */
    public function safeDown()
    {
        // $this->dropTable('{{%user}}');
    }
}