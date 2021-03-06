<?php

use yii\db\Migration;

/**
 * Class m190103_214805_UrunList1
 */
class m190103_214805_UrunList1 extends Migration
{
    /**
     * {@inheritdoc}
     */
    public function safeUp()
    {
	 $this->createTable('UrunList1', [
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
        echo "m190103_214805_UrunList1 cannot be reverted.\n";

        return false;
    }

    /*
    // Use up()/down() to run migration code without a transaction.
    public function up()
    {

    }

    public function down()
    {
        echo "m190103_214805_UrunList1 cannot be reverted.\n";

        return false;
    }
    */
}
