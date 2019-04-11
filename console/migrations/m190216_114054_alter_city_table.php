<?php

use yii\db\Migration;

/**
 * Class m190216_114054_alter_city_table
 */
class m190216_114054_alter_city_table extends Migration
{
    /**
     * {@inheritdoc}
     */
    public function safeUp()
    {
		$this->addColumn('city', 'seo_title_ge', 'VARCHAR(255) NULL');
		$this->addColumn('city', 'seo_title_en', 'VARCHAR(255) NULL');
		$this->addColumn('city', 'seo_title_ru', 'VARCHAR(255) NULL');

	    $this->addColumn('city', 'seo_description_ge', 'VARCHAR(255) NULL');
	    $this->addColumn('city', 'seo_description_en', 'VARCHAR(255) NULL');
	    $this->addColumn('city', 'seo_description_ru', 'VARCHAR(255) NULL');
    }

    /**
     * {@inheritdoc}
     */
    public function safeDown()
    {
        echo "m190216_114054_alter_city_table cannot be reverted.\n";

	    $this->dropColumn('city', 'seo_title_ge');
	    $this->dropColumn('city', 'seo_title_en');
	    $this->dropColumn('city', 'seo_title_ru');

	    $this->dropColumn('city', 'seo_description_ge');
	    $this->dropColumn('city', 'seo_description_en');
	    $this->dropColumn('city', 'seo_description_ru');

        return true;
    }

}
