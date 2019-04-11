<?php

use yii\db\Migration;

/**
 * Handles the creation of table `city`.
 */
class m190215_063727_create_city_table extends Migration
{
    /**
     * {@inheritdoc}
     */
    public function safeUp()
    {
        $this->createTable('city', [
            'id' => $this->primaryKey(),

            'name_ge' => $this->string(255)->notNull(),
            'name_en' => $this->string(255)->notNull(),
            'name_ru' => $this->string(255)->notNull(),
            'slug' => $this->string(255)->notNull(),

            'body_ge' => $this->text()->null(),
            'body_en' => $this->text()->null(),
            'body_ru' => $this->text()->null(),

            'status' => $this->tinyInteger(2)->unsigned()->notNull(),
            'created_at' => $this->integer()->notNull(),
            'updated_at' => $this->integer()->notNull(),
        ]);
    }

    /**
     * {@inheritdoc}
     */
    public function safeDown()
    {
        $this->dropTable('city');
    }
}
