<?php
namespace frontend\widgets;

use common\models\Testimonial;
use Yii;
use yii\base\Widget;

class ReviewsWidget extends Widget
{
	public function run()
	{
		$language = Yii::$app->language;

		$model = Testimonial::find()->where(['status' => Testimonial::ENABLE])->all();

		return $this->render('reviews', [
			'model' => $model,
			'language' => $language,
		]);
	}
}