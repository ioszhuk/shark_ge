<?php
namespace backend\models;

class Testimonial extends \common\models\Testimonial
{
	/**
	 * {@inheritdoc}
	 */
	public function attributeLabels()
	{
		return [
			'id' => 'ID',
			'name_pl' => 'ФИО (Польский)',
			'name_en' => 'ФИО (Английский)',
			'name_ru' => 'ФИО (Русский)',
			'avatar' => 'Аватар',
			'body_pl' => 'Описание (Польский)',
			'body_en' => 'Описание (Английский)',
			'body_ru' => 'Описание (Русский)',
			'status' => 'Статус',
		];
	}
}