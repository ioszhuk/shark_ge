<?php
namespace common\models\settings;

use Yii;

class HelpSettings extends Settings
{
	public static $SECTION = 'HelpSettings';

	public $seo_title_ge;
	public $seo_title_en;
	public $seo_title_ru;

	public $seo_description_ge;
	public $seo_description_en;
	public $seo_description_ru;

	public $name_ge;
	public $name_en;
	public $name_ru;

	public $common_question_ge;
	public $common_question_en;
	public $common_question_ru;

	public $help_for_driver_ge;
	public $help_for_driver_en;
	public $help_for_driver_ru;

	public $help_for_client_ge;
	public $help_for_client_en;
	public $help_for_client_ru;

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

			'common_question_ge' => 'Общие вопросы (Грузинский)',
			'common_question_en' => 'Общие вопросы (Английский)',
			'common_question_ru' => 'Общие вопросы (Русский)',

			'help_for_driver_ge' => 'Помощь водителям (Грузинский)',
			'help_for_driver_en' => 'Помощь водителям (Английский)',
			'help_for_driver_ru' => 'Помощь водителям (Русский)',

			'help_for_client_ge' => 'Помощь клиентам (Грузинский)',
			'help_for_client_en' => 'Помощь клиентам (Английский)',
			'help_for_client_ru' => 'Помощь клиентам (Русский)',
		];
	}

	public function rules()
	{
		return [

			[['seo_title_ge', 'seo_title_en', 'seo_title_ru', 'seo_description_ge', 'seo_description_en',
				'seo_description_ru'], 'string', 'max' => 255],
			[['name_ge', 'name_en', 'name_ru'], 'string', 'max' => 255],
			[['common_question_ge', 'common_question_en', 'common_question_ru',
				'help_for_driver_ge', 'help_for_driver_en', 'help_for_driver_ru',
				'help_for_client_ge', 'help_for_client_en', 'help_for_client_ru'], 'safe']

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

		$this->common_question_ge = $this->unserializeAttribute('common_question_ge', self::$SECTION);
		$this->common_question_en = $this->unserializeAttribute('common_question_en', self::$SECTION);
		$this->common_question_ru = $this->unserializeAttribute('common_question_ru', self::$SECTION);

		$this->help_for_driver_ge = $this->unserializeAttribute('help_for_driver_ge', self::$SECTION);
		$this->help_for_driver_en = $this->unserializeAttribute('help_for_driver_en', self::$SECTION);
		$this->help_for_driver_ru = $this->unserializeAttribute('help_for_driver_ru', self::$SECTION);

		$this->help_for_client_ge = $this->unserializeAttribute('help_for_client_ge', self::$SECTION);
		$this->help_for_client_en = $this->unserializeAttribute('help_for_client_en', self::$SECTION);
		$this->help_for_client_ru = $this->unserializeAttribute('help_for_client_ru', self::$SECTION);

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

		$this->serializeAttribute('common_question_ge', self::$SECTION);
		$this->serializeAttribute('common_question_en', self::$SECTION);
		$this->serializeAttribute('common_question_ru', self::$SECTION);

		$this->serializeAttribute('help_for_driver_ge', self::$SECTION);
		$this->serializeAttribute('help_for_driver_en', self::$SECTION);
		$this->serializeAttribute('help_for_driver_ru', self::$SECTION);

		$this->serializeAttribute('help_for_client_ge', self::$SECTION);
		$this->serializeAttribute('help_for_client_en', self::$SECTION);
		$this->serializeAttribute('help_for_client_ru', self::$SECTION);

		return true;
	}
}