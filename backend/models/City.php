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
			'name_ge' => 'Назавание (h1) (Грузинский)',
			'name_en' => 'Назавание (h1) (Английский)',
			'name_ru' => 'Назавание (h1) (Русский)',
			'slug' => 'URL',
			'anchor' => 'Анкор для переводов (ge,en,ru)',
			'body_ge' => 'Описание (Грузинский)',
			'body_en' => 'Описание (Английский)',
			'body_ru' => 'Описание (Русский)',
			'seo_title_ge' => 'SEO Title (Грузинский)',
			'seo_title_en' => 'SEO Title (Английский)',
			'seo_title_ru' => 'SEO Title (Русский)',
			'seo_description_ge' => 'SEO Description (Грузинский)',
			'seo_description_en' => 'SEO Description (Английский)',
			'seo_description_ru' => 'SEO Description (Русский)',
			'status' => 'Статус',
		];
	}
}