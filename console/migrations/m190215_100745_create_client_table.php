<?php

use yii\db\Migration;

/**
 * Handles the creation of table `client`.
 */
class m190215_100745_create_client_table extends Migration
{
    /**
     * {@inheritdoc}
     */
    public function safeUp()
    {
        $this->createTable('client', [
            'id' => $this->primaryKey(),
	        'position' => $this->string(50)->notNull(),
            'name_ge' => $this->string(255)->null(),
            'name_en' => $this->string(255)->null(),
            'name_ru' => $this->string(255)->null(),
			'image_ge' => $this->string(255)->null(),
			'image_en' => $this->string(255)->null(),
			'image_ru' => $this->string(255)->null(),
	        'body_ge' => $this->text()->null(),
	        'body_en' => $this->text()->null(),
	        'body_ru' => $this->text()->null(),
	        'sort_order' => $this->tinyInteger(2)->unsigned()->notNull(),
            'created_at' => $this->integer()->notNull(),
            'updated_at' => $this->integer()->notNull(),
        ]);
    }

    /**
     * {@inheritdoc}
     */
    public function safeDown()
    {
        $this->dropTable('client');
    }
}
