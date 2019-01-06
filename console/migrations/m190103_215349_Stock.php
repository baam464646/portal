<?php

use yii\db\Migration;

/**
 * Class m190103_215349_Stock
 */
class m190103_215349_Stock extends Migration
{
    /**
     * {@inheritdoc}
     */
    public function safeUp()
    {
	$this->createTable('Stock', [
			'ID' => $this->integer(),
            'Urun_Sayisi' => $this->integer(),
            'PRIMARY KEY(ID)',
        ]);
    }

    /**
     * {@inheritdoc}
     */
    public function safeDown()
    {
        echo "m190103_215349_Stock cannot be reverted.\n";

        return false;
    }

    /*
    // Use up()/down() to run migration code without a transaction.
    public function up()
    {

    }

    public function down()
    {
        echo "m190103_215349_Stock cannot be reverted.\n";

        return false;
    }
    */
}
