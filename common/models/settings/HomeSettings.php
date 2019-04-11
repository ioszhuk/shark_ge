<?php
namespace common\models\settings;

use Yii;

class HomeSettings extends Settings
{
	public static $SECTION = 'HomeSettings';

	public $seo_title_ge;
	public $seo_title_en;
	public $seo_title_ru;

	public $seo_description_ge;
	public $seo_description_en;
	public $seo_description_ru;

	public $name_ge;
	public $name_en;
	public $name_ru;

	public $body_ge;
	public $body_en;
	public $body_ru;

	public function attributeLabels()
	{
		return [
			'seo_title_ge' => 'SEO Title (Грузинский)',
			'seo_title_en' => 'SEO Title (Английский)',
			'seo_title_ru' => 'SEO Title (Русский)',

			'seo_description_ge' => 'SEO Description (Грузинский)',
			'seo_description_en' => 'SEO Description (Английский)',
			'seo_description_ru' => 'SEO Description (Русский)',

			'name_ge' => 'Заголовок (h2) (Грузинский)',
			'name_en' => 'Заголовок (h2) (Английский)',
			'name_ru' => 'Заголовок (h2) (Русский)',

			'body_ge' => 'Описание (Грузинский)',
			'body_en' => 'Описание (Английский)',
			'body_ru' => 'Описание (Русский)',
		];
	}

	public function rules()
	{
		return [
			[['name_ge', 'name_en', 'name_ru', 'body_ge', 'body_en', 'body_ru'], 'string'],
			[['seo_title_ge', 'seo_title_en', 'seo_title_ru', 'seo_description_ge', 'seo_description_en',
				'seo_description_ru'], 'string', 'max' => 255]
		];
	}

	public function init()
	{
		parent::init();

		$settings = Yii::$app->settings;

		$this->seo_title_ge = $settings->get('seo_title_ge', self::$SECTION);
		$this->seo_title_en = $settings->get('seo_title_en', self::$SECTION);
		$this->seo_title_ru = $settings->get('seo_title_ru', self::$SECTION);

		$this->seo_description_ge = $settings->get('seo_description_ge', self::$SECTION);
		$this->seo_description_en = $settings->get('seo_description_en', self::$SECTION);
		$this->seo_description_ru = $settings->get('seo_description_ru', self::$SECTION);

		$this->name_ge = $settings->get('name_ge', self::$SECTION);
		$this->name_en = $settings->get('name_en', self::$SECTION);
		$this->name_ru = $settings->get('name_ru', self::$SECTION);

		$this->body_ge = $settings->get('body_ge', self::$SECTION);
		$this->body_en = $settings->get('body_en', self::$SECTION);
		$this->body_ru = $settings->get('body_ru', self::$SECTION);
	}

	public function save()
	{
		$settings = Yii::$app->settings;

		$settings->set('seo_title_ge', $this->seo_title_ge, self::$SECTION, 'string');
		$settings->set('seo_title_en', $this->seo_title_en, self::$SECTION, 'string');
		$settings->set('seo_title_ru', $this->seo_title_ru, self::$SECTION, 'string');

		$settings->set('seo_description_ge', $this->seo_description_ge, self::$SECTION, 'string');
		$settings->set('seo_description_en', $this->seo_description_en, self::$SECTION, 'string');
		$settings->set('seo_description_ru', $this->seo_description_ru, self::$SECTION, 'string');

		$settings->set('name_ge', $this->name_ge, self::$SECTION, 'string');
		$settings->set('name_en', $this->name_en, self::$SECTION, 'string');
		$settings->set('name_ru', $this->name_ru, self::$SECTION, 'string');

		$settings->set('body_ge', $this->body_ge, self::$SECTION, 'string');
		$settings->set('body_en', $this->body_en, self::$SECTION, 'string');
		$settings->set('body_ru', $this->body_ru, self::$SECTION, 'string');

		return true;
	}
}