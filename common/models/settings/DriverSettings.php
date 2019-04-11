<?php
namespace common\models\settings;

use Yii;

class DriverSettings extends Settings
{
	public static $SECTION = 'DriverSettings';

	public $seo_title_ge;
	public $seo_title_en;
	public $seo_title_ru;

	public $seo_description_ge;
	public $seo_description_en;
	public $seo_description_ru;

	public $name_ge;
	public $name_en;
	public $name_ru;

	public $work_standart_name_ge;
	public $work_standart_name_en;
	public $work_standart_name_ru;

	public $work_standart_body_ge;
	public $work_standart_body_en;
	public $work_standart_body_ru;

	public function attributeLabels()
	{
		return [
			'seo_title_ge' => 'SEO Title (Грузинский)',
			'seo_title_en' => 'SEO Title (Английский)',
			'seo_title_ru' => 'SEO Title (Русский)',

			'seo_description_ge' => 'SEO Description (Грузинский)',
			'seo_description_en' => 'SEO Description (Английский)',
			'seo_description_ru' => 'SEO Description (Русский)',

			'name_ge' => 'Заголовок (h1) (Грузинский)',
			'name_en' => 'Заголовок (h1) (Английский)',
			'name_ru' => 'Заголовок (h1) (Русский)',

			'work_standart_name_ge' => 'Заголовок (стандарты Shark Taxi - Грузинский)',
			'work_standart_name_en' => 'Заголовок (стандарты Shark Taxi - Английский)',
			'work_standart_name_ru' => 'Заголовок (стандарты Shark Taxi - Русский)',

			'work_standart_body_ge' => 'Описание (стандарты Shark Taxi - Грузинский)',
			'work_standart_body_en' => 'Описание (стандарты Shark Taxi - Английский)',
			'work_standart_body_ru' => 'Описание (стандарты Shark Taxi - Русский)',
		];
	}

	public function rules()
	{
		return [
			[['name_ge', 'name_en', 'name_ru'], 'string'],
			[['seo_title_ge', 'seo_title_en', 'seo_title_ru', 'seo_description_ge', 'seo_description_en',
				'seo_description_ru'], 'string', 'max' => 255],
			[['work_standart_name_ge', 'work_standart_name_en', 'work_standart_name_ru'], 'string', 'max' => 255],
			[['work_standart_body_ge', 'work_standart_body_en', 'work_standart_body_ru'], 'string'],
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

		$this->work_standart_name_ge = $settings->get('work_standart_name_ge', self::$SECTION);
		$this->work_standart_name_en = $settings->get('work_standart_name_en', self::$SECTION);
		$this->work_standart_name_ru = $settings->get('work_standart_name_ru', self::$SECTION);

		$this->work_standart_body_ge = $settings->get('work_standart_body_ge', self::$SECTION);
		$this->work_standart_body_en = $settings->get('work_standart_body_en', self::$SECTION);
		$this->work_standart_body_ru = $settings->get('work_standart_body_ru', self::$SECTION);

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

		$settings->set('work_standart_name_ge', $this->work_standart_name_ge, self::$SECTION, 'string');
		$settings->set('work_standart_name_en', $this->work_standart_name_en, self::$SECTION, 'string');
		$settings->set('work_standart_name_ru', $this->work_standart_name_ru, self::$SECTION, 'string');

		$settings->set('work_standart_body_ge', $this->work_standart_body_ge, self::$SECTION, 'string');
		$settings->set('work_standart_body_en', $this->work_standart_body_en, self::$SECTION, 'string');
		$settings->set('work_standart_body_ru', $this->work_standart_body_ru, self::$SECTION, 'string');

		return true;
	}
}