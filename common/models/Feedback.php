<?php
namespace common\models;

use Yii;

class Feedback extends \noIT\feedback\models\Feedback
{
	public function rules()
	{
		$rules = [
			[['name', 'email', 'message'], 'string'],
		];

		return array_merge(parent::rules(), $rules);
	}

	public function getEmailBody() {

		return "Имя: $this->name\n".
		       "Email: $this->email\n".
		       "Сообщение:\n$this->message\n".
		       "Источник: ". $this->getSource();
	}

	public function sendEmail()
	{
		return mail(
			Yii::$app->params['adminEmailTo'],
			'Письмо с сайта Shark Taxi (Georgia)',
			$this->getEmailBody(),
			Yii::$app->params['adminEmailFrom']
		);
	}

}