<?php
namespace frontend\controllers;

use common\models\Client;
use common\models\Driver;
use common\models\Testimonial;
use Yii;
use yii\web\Controller;

/**
 * Site controller
 */
class SiteController extends Controller
{

	/**
	 * {@inheritdoc}
	 */
	public function actions()
	{
		return [
			'error' => [
				'class' => 'yii\web\ErrorAction',
				'layout' => 'error'
			],
		];
	}

	/**
	 * Displays homepage.
	 *
	 * @return mixed
	 */
	public function actionIndex()
	{
		$language = Yii::$app->language;

		$model = [
			'seo_title' => Yii::$app->settings->get("seo_title_{$language}", 'HomeSettings'),
			'seo_description' => Yii::$app->settings->get("seo_description_{$language}", 'HomeSettings'),
			'name' => Yii::$app->settings->get("name_{$language}", 'HomeSettings'),
			'body' => Yii::$app->settings->get("body_{$language}", 'HomeSettings')
		];

		return $this->render('index', [
			'language' => $language,
			'model' => $model,
		]);
	}

	public function actionClients()
	{
		$language = Yii::$app->language;

		$model = Client::find()->orderBy('sort_order')->all();

		$seoModel = [
			'seo_title' => Yii::$app->settings->get("seo_title_{$language}", 'ClientSettings'),
			'seo_description' => Yii::$app->settings->get("seo_description_{$language}", 'ClientSettings'),
			'name' => Yii::$app->settings->get("name_{$language}", 'ClientSettings'),
		];

		return $this->render('clients', [
			'language' => $language,
			'model' => $model,
			'seoModel' => $seoModel,
		]);
	}

	public function actionTestimonials()
	{
		$language = Yii::$app->language;

		$model = Testimonial::find()->where(['status' => Testimonial::ENABLE])->all();

		$seoModel = [
			'seo_title' => Yii::$app->settings->get("seo_title_{$language}", 'TestimonialsSettings'),
			'seo_description' => Yii::$app->settings->get("seo_description_{$language}", 'TestimonialsSettings'),
		];

		return $this->render('testimonials', [
			'language' => $language,
			'model' => $model,
			'seoModel' => $seoModel,
		]);
	}

	public function actionDrivers()
	{
		$language = Yii::$app->language;

		$model = Driver::find()->orderBy('sort_order')->all();

		$seoModel = [
			'seo_title' => Yii::$app->settings->get("seo_title_{$language}", 'DriverSettings'),
			'seo_description' => Yii::$app->settings->get("seo_description_{$language}", 'DriverSettings'),
			'name' => Yii::$app->settings->get("name_{$language}", 'DriverSettings'),
			'work_standart_name' => Yii::$app->settings->get("work_standart_name_{$language}", 'DriverSettings'),
			'work_standart_body' => Yii::$app->settings->get("work_standart_body_{$language}", 'DriverSettings'),
		];

		return $this->render('drivers', [
			'language' => $language,
			'model' => $model,
			'seoModel' => $seoModel,
		]);
	}

	public function actionHelp()
	{
		$language = Yii::$app->language;


		$model = [
			'seo_title' => Yii::$app->settings->get("seo_title_{$language}", 'HelpSettings'),
			'seo_description' => Yii::$app->settings->get("seo_description_{$language}", 'HelpSettings'),
			'name' => Yii::$app->settings->get("name_{$language}", 'HelpSettings'),
			'common_question' => unserialize(Yii::$app->settings->get("common_question_{$language}", 'HelpSettings')),
			'help_for_driver' => unserialize(Yii::$app->settings->get("help_for_driver_{$language}", 'HelpSettings')),
			'help_for_client' => unserialize(Yii::$app->settings->get("help_for_client_{$language}", 'HelpSettings')),
		];

		return $this->render('help', [
			'language' => $language,
			'model' => $model,
		]);
	}

	public function actionContacts()
	{
		$language = Yii::$app->language;

		$model = [
			'seo_title' => Yii::$app->settings->get("seo_title_{$language}", 'ContactsSettings'),
			'seo_description' => Yii::$app->settings->get("seo_description_{$language}", 'ContactsSettings'),
		];

		return $this->render('contacts', [
			'language' => $language,
			'model' => $model,
		]);
	}

}