<?php
namespace frontend\controllers;

use common\models\Feedback;
use Yii;
use yii\web\NotFoundHttpException;
use yii\web\Controller;
use yii\web\Response;

/**
 * Feedback controller
 */
class FeedbackController extends Controller
{

	public function actionIndex()
	{
		if (Yii::$app->request->isAjax) {

			Yii::$app->response->format = Response::FORMAT_JSON;

			$model = new Feedback();

			if ($model->load(Yii::$app->request->post())) {

				if ($model->sendEmail()) {
					return true;
				} else {
					throw new NotFoundHttpException();
				}

			} else {
				throw new NotFoundHttpException();
			}

		} else {
			return $this->redirect(['site/index']);
		}

	}
}
