<?php
namespace backend\controllers;

use common\models\settings\ClientSettings;
use common\models\settings\ContactsSettings;
use common\models\settings\DriverSettings;
use common\models\settings\HelpSettings;
use common\models\settings\HomeSettings;
use common\models\settings\TestimonialsSettings;
use yii\web\Controller;
use Yii;

class SettingsController extends Controller
{
	public function actionHomePage()
	{
		$model = new HomeSettings();

		if(Yii::$app->request->isPost && $model->load(Yii::$app->request->post())) {
			$model->save();
			return $this->refresh();
		}

		return $this->render('home', ['model' => $model]);
	}

	public function actionHelpPage()
	{
		$model = new HelpSettings();

		if(Yii::$app->request->isPost && $model->load(Yii::$app->request->post())) {
			$model->save();
			return $this->refresh();
		}

		return $this->render('help', ['model' => $model]);
	}

	public function actionClientPage()
	{
		$model = new ClientSettings();

		if(Yii::$app->request->isPost && $model->load(Yii::$app->request->post())) {
			$model->save();
			return $this->refresh();
		}

		return $this->render('client', ['model' => $model]);
	}

	public function actionTestimonialsPage()
	{
		$model = new TestimonialsSettings();

		if(Yii::$app->request->isPost && $model->load(Yii::$app->request->post())) {
			$model->save();
			return $this->refresh();
		}

		return $this->render('testimonials', ['model' => $model]);
	}

	public function actionDriverPage()
	{
		$model = new DriverSettings();

		if(Yii::$app->request->isPost && $model->load(Yii::$app->request->post())) {
			$model->save();
			return $this->refresh();
		}

		return $this->render('driver', ['model' => $model]);
	}

	public function actionContactsPage()
	{
		$model = new ContactsSettings();

		if(Yii::$app->request->isPost && $model->load(Yii::$app->request->post())) {
			$model->save();
			return $this->refresh();
		}

		return $this->render('contacts', ['model' => $model]);
	}

}