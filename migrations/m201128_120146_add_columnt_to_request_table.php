<?php

use yii\db\Migration;

/**
 * Class m201128_120146_add_columnt_to_request_table
 */
class m201128_120146_add_columnt_to_request_table extends Migration
{
    /**
     * {@inheritdoc}
     */
    public function safeUp()
    {
        $this->addColumn('{{%request}}', 'id_subdivision', $this->integer());
        $this->addColumn('{{%request}}', 'id_state', $this->integer());
    }

    /**
     * {@inheritdoc}
     */
    public function safeDown()
    {
        echo "m201128_120146_add_columnt_to_request_table cannot be reverted.\n";

        return false;
    }

    /*
    // Use up()/down() to run migration code without a transaction.
    public function up()
    {

    }

    public function down()
    {
        echo "m201128_120146_add_columnt_to_request_table cannot be reverted.\n";

        return false;
    }
    */
}
