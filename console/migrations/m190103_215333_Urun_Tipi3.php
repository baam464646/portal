<?php

use yii\db\Migration;

/**
 * Class m190103_215333_Urun_Tipi3
 */
class m190103_215333_Urun_Tipi3 extends Migration
{
    /**
     * {@inheritdoc}
     */
    public function safeUp()
    {
	$this->createTable('Urun_Tipi3', [
			'ID' => $this->integer(),
            'Tipi' => $this->string(30),
            'PRIMARY KEY(ID)',
        ]);
    }

    /**
     * {@inheritdoc}
     */
    public function safeDown()
    {
        echo "m190103_215333_Urun_Tipi3 cannot be reverted.\n";

        return false;
    }

    /*
    // Use up()/down() to run migration code without a transaction.
    public function up()
    {

    }

    public function down()
    {
        echo "m190103_215333_Urun_Tipi3 cannot be reverted.\n";

        return false;
    }
    */
}
