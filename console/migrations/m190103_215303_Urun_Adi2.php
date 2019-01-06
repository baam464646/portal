<?php

use yii\db\Migration;

/**
 * Class m190103_215303_Urun_Adi2
 */
class m190103_215303_Urun_Adi2 extends Migration
{
    /**
     * {@inheritdoc}
     */
    public function safeUp()
    {
	$this->createTable('Urun_Adi2', [
			'ID' => $this->integer(),
            'Urun_Adi' => $this->string(30),
			'Urun_Tipi_ID' => $this->integer(),
            'PRIMARY KEY(ID)',
        ]);
    }

    /**
     * {@inheritdoc}
     */
    public function safeDown()
    {
        echo "m190103_215303_Urun_Adi2 cannot be reverted.\n";

        return false;
    }

    /*
    // Use up()/down() to run migration code without a transaction.
    public function up()
    {

    }

    public function down()
    {
        echo "m190103_215303_Urun_Adi2 cannot be reverted.\n";

        return false;
    }
    */
}
