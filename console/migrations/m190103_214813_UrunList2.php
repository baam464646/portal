<?php

use yii\db\Migration;

/**
 * Class m190103_214813_UrunList2
 */
class m190103_214813_UrunList2 extends Migration
{
    /**
     * {@inheritdoc}
     */
    public function safeUp()
    {
	 $this->createTable('UrunList2', [
			'ID' => $this->integer(),
            'Urun_ID' => $this->integer(),
            'Stock_ID' => $this->integer(),
			'Stock_Sayisi' => $this->integer(),
            'Urun_Tipi' => $this->string(30),
            'PRIMARY KEY(ID)',
        ]);
    }

    /**
     * {@inheritdoc}
     */
    public function safeDown()
    {
        echo "m190103_214813_UrunList2 cannot be reverted.\n";

        return false;
    }

    /*
    // Use up()/down() to run migration code without a transaction.
    public function up()
    {

    }

    public function down()
    {
        echo "m190103_214813_UrunList2 cannot be reverted.\n";

        return false;
    }
    */
}
