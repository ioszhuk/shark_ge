<?php
namespace frontend\widgets;

use common\models\City;
use yii\base\Widget;

class CityListWidget extends Widget
{
	public $type;

	public function run()
	{
		if(isset($this->type) && !empty($this->type)) {
			$model = City::find()->where( [ 'status' => City::ENABLE ] )->asArray()->all();

			if ($this->type === 'menu') {
				return $this->render('city-list/menu', ['model' => $model ]);
			}

		}
	}

}