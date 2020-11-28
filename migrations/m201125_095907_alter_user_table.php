<?php

use yii\db\Migration;

/**
 * Class m201125_095907_alter_user_table
 */
class m201125_095907_alter_user_table extends Migration
{
    /**
     * {@inheritdoc}
     */
    public function safeUp()
    {
        $this->addColumn('user', 'avatar_url', $this->string());
        $this->addColumn('user', 'subdivision_id', $this->integer());
    }

    /**
     * {@inheritdoc}
     */
    public function safeDown()
    {
        echo "m201125_095907_alter_user_table cannot be reverted.\n";

        return false;
    }

    /*
    // Use up()/down() to run migration code without a transaction.
    public function up()
    {

    }

    public function down()
    {
        echo "m201125_095907_alter_user_table cannot be reverted.\n";

        return false;
    }
    */
}
