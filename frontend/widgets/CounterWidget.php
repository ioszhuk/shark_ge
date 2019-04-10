<?php
namespace frontend\widgets;

use common\models\settings\CounterSettings;
use yii\base\Widget;
use Yii;

class CounterWidget extends Widget
{
	public function run()
	{
		$model = [
			'days' => Yii::$app->settings->get('days', CounterSettings::$SECTION),
			'trips' => Yii::$app->settings->get('trips', CounterSettings::$SECTION),
			'customers' => Yii::$app->settings->get('customers', CounterSettings::$SECTION),
			'drivers' => Yii::$app->settings->get('drivers', CounterSettings::$SECTION),
		];

		return $this->render('counter', ['model' => $model]);
	}
}