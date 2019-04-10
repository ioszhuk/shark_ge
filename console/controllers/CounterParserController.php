<?php
namespace console\controllers;

use common\models\settings\CounterSettings;
use yii\console\Controller;
use Yii;

class CounterParserController extends Controller
{
	public function actionUpdate()
	{
		$model = new CounterSettings();

		if($modelData = $model->parseCounterData()) {
			$model->setAttributes($modelData);
			$model->save();
			echo "Updated!";
		}

		Yii::$app->settings->clearCache();
	}
}