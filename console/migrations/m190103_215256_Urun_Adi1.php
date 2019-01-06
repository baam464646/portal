<?php

use yii\db\Migration;

/**
 * Class m190103_215256_Urun_Adi1
 */
class m190103_215256_Urun_Adi1 extends Migration
{
    /**
     * {@inheritdoc}
     */
    public function safeUp()
    {
	$this->createTable('Urun_Adi1', [
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
        echo "m190103_215256_Urun_Adi1 cannot be reverted.\n";

        return false;
    }

    /*
    // Use up()/down() to run migration code without a transaction.
    public function up()
    {

    }

    public function down()
    {
        echo "m190103_215256_Urun_Adi1 cannot be reverted.\n";

        return false;
    }
    */
}
