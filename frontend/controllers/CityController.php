<?php
namespace frontend\controllers;

use Yii;
use yii\web\Controller;
use yii\web\NotFoundHttpException;
use common\models\City;

class CityController extends Controller
{
	public function actionIndex()
	{
		return $this->render('index');
	}

	public function actionView($slug)
	{
		$model = $this->findModelBySlug($slug);

		return $this->render('view', [
			'language' => $language = Yii::$app->language,
			'model' => $model,
		]);
	}

	protected function findModelBySlug($slug)
	{
		if (($model = City::findOne(['slug' => $slug])) !== null) {
			return $model;
		} else {
			throw new NotFoundHttpException();
		}

		return null;

	}

}