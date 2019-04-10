<?php
namespace common\modules\languages\widgets;

use Yii;
use yii\base\Widget;
use yii\helpers\Html;


class LanguageWidget extends Widget
{

	public $array_languages;

	public function init() {

		$current_language = Yii::$app->language;

		$languages = Yii::$app->getModule('languages')->languages;

		$array_lang = [];

		foreach ($languages as $key => $value) {

			if($languages[$current_language] === $value) {

				$array_lang += [$value => Html::tag('span', ucfirst($key), ['class' => 'act'])];

			} else {

				$array_lang  += [$value => Html::a(ucfirst($key), ['languages/default/index', 'lang' => $value])];
			}

		}

		$this->array_languages = $array_lang;
	}

	public function run() {

		return $this->render('list',[
			'array_lang' => $this->array_languages
		]);
	}

}