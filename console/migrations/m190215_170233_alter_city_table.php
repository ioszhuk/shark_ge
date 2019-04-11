<?php

use yii\db\Migration;

/**
 * Class m190215_170233_alter_city_table
 */
class m190215_170233_alter_city_table extends Migration
{
    /**
     * {@inheritdoc}
     */
    public function safeUp()
    {
		$this->addColumn('city', 'anchor', 'VARCHAR(255) NOT NULL');
    }

    /**
     * {@inheritdoc}
     */
    public function safeDown()
    {
        echo "m190215_170233_alter_city_table cannot be reverted.\n";

	    $this->dropColumn('city', 'anchor');

        return true;
    }

}
