<?php
namespace frontend\widgets;

use common\models\City;
use yii\base\Widget;

class MapWidget extends Widget
{
	public $title;

	public function run()
	{
		$model = City::find()->where([ 'status' => City::ENABLE])->asArray()->all();

		return $this->render('map', [
			'model' => $model,
			'title' => $this->title,
		]);
	}
}