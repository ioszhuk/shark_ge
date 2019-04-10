<?php
namespace common\models\settings;

use Yii;

class HomeSettings extends Settings
{
	public static $SECTION = 'HomeSettings';

	public $seo_title_pl;
	public $seo_title_en;
	public $seo_title_ru;

	public $seo_description_pl;
	public $seo_description_en;
	public $seo_description_ru;

	public $name_pl;
	public $name_en;
	public $name_ru;

	public $body_pl;
	public $body_en;
	public $body_ru;

	public function attributeLabels()
	{
		return [
			'seo_title_pl' => 'SEO Title (Польский)',
			'seo_title_en' => 'SEO Title (Английский)',
			'seo_title_ru' => 'SEO Title (Русский)',

			'seo_description_pl' => 'SEO Description (Польский)',
			'seo_description_en' => 'SEO Description (Английский)',
			'seo_description_ru' => 'SEO Description (Русский)',

			'name_pl' => 'Заголовок (h1) (Польский)',
			'name_en' => 'Заголовок (h1) (Английский)',
			'name_ru' => 'Заголовок (h1) (Русский)',

			'body_pl' => 'Описание (Польский)',
			'body_en' => 'Описание (Английский)',
			'body_ru' => 'Описание (Русский)',
		];
	}

	public function rules()
	{
		return [
			[['name_pl', 'name_en', 'name_ru', 'body_pl', 'body_en', 'body_ru'], 'string'],
			[['seo_title_pl', 'seo_title_en', 'seo_title_ru', 'seo_description_pl', 'seo_description_en',
				'seo_description_ru'], 'string', 'max' => 255]
		];
	}

	public function init()
	{
		parent::init();

		$settings = Yii::$app->settings;

		$this->seo_title_pl = $settings->get('seo_title_pl', self::$SECTION);
		$this->seo_title_en = $settings->get('seo_title_en', self::$SECTION);
		$this->seo_title_ru = $settings->get('seo_title_ru', self::$SECTION);

		$this->seo_description_pl = $settings->get('seo_description_pl', self::$SECTION);
		$this->seo_description_en = $settings->get('seo_description_en', self::$SECTION);
		$this->seo_description_ru = $settings->get('seo_description_ru', self::$SECTION);

		$this->name_pl = $settings->get('name_pl', self::$SECTION);
		$this->name_en = $settings->get('name_en', self::$SECTION);
		$this->name_ru = $settings->get('name_ru', self::$SECTION);

		$this->body_pl = $settings->get('body_pl', self::$SECTION);
		$this->body_en = $settings->get('body_en', self::$SECTION);
		$this->body_ru = $settings->get('body_ru', self::$SECTION);
	}

	public function save()
	{
		$settings = Yii::$app->settings;

		$settings->set('seo_title_pl', $this->seo_title_pl, self::$SECTION, 'string');
		$settings->set('seo_title_en', $this->seo_title_en, self::$SECTION, 'string');
		$settings->set('seo_title_ru', $this->seo_title_ru, self::$SECTION, 'string');

		$settings->set('seo_description_pl', $this->seo_description_pl, self::$SECTION, 'string');
		$settings->set('seo_description_en', $this->seo_description_en, self::$SECTION, 'string');
		$settings->set('seo_description_ru', $this->seo_description_ru, self::$SECTION, 'string');

		$settings->set('name_pl', $this->name_pl, self::$SECTION, 'string');
		$settings->set('name_en', $this->name_en, self::$SECTION, 'string');
		$settings->set('name_ru', $this->name_ru, self::$SECTION, 'string');

		$settings->set('body_pl', $this->body_pl, self::$SECTION, 'string');
		$settings->set('body_en', $this->body_en, self::$SECTION, 'string');
		$settings->set('body_ru', $this->body_ru, self::$SECTION, 'string');

		return true;
	}
}