<?php
namespace backend\models;

class City extends \common\models\City
{
	/**
	 * {@inheritdoc}
	 */
	public function attributeLabels()
	{
		return [
			'id' => 'ID',
			'name_pl' => 'Назавание (h1) (Польский)',
			'name_en' => 'Назавание (h1) (Английский)',
			'name_ru' => 'Назавание (h1) (Русский)',
			'slug' => 'URL',
			'anchor' => 'Анкор для переводов (pl,en,ru)',
			'body_pl' => 'Описание (Польский)',
			'body_en' => 'Описание (Английский)',
			'body_ru' => 'Описание (Русский)',
			'seo_title_pl' => 'SEO Title (Польский)',
			'seo_title_en' => 'SEO Title (Английский)',
			'seo_title_ru' => 'SEO Title (Русский)',
			'seo_description_pl' => 'SEO Description (Польский)',
			'seo_description_en' => 'SEO Description (Английский)',
			'seo_description_ru' => 'SEO Description (Русский)',
			'status' => 'Статус',
		];
	}
}