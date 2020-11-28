<?php

use yii\db\Migration;

/**
 * Handles the creation of table `{{%categorie}}`.
 */
class m201125_143110_create_categorie_table extends Migration
{
    /**
     * {@inheritdoc}
     */
    public function safeUp()
    {
        $this->createTable('{{%categorie}}', [
            'id' => $this->primaryKey(),
            'name'=>$this->string()->unique()
        ]);
    }

    /**
     * {@inheritdoc}
     */
    public function safeDown()
    {
        $this->dropTable('{{%categorie}}');
    }
}
