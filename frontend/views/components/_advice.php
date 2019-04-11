<?php

/**
 * @var $this \yii\web\View
 */

use yii\widgets\ActiveForm;
use yii\helpers\Url;
use yii\helpers\Html;
use common\models\Feedback;

?>
<section class="advice">
    <div class="container newblockform">
        <div class="detail-articles-box">
            <div class="visible-part">
                <h2><?= Yii::t('app', 'advice__title') ?></h2>
                <p><?= Yii::t('app', 'advice__caption') ?></p>
            </div>
        </div>

		<?php $form = ActiveForm::begin([
			'method' => 'post',
			'id' => 'formx',
			'action' => Url::to(['feedback/index']),
		]) ?>

		<?= Html::hiddenInput('model', base64_encode(Feedback::className())) ?>

		<?php $model = new Feedback(); ?>

        <p class="first">
            <label for="nameform"><?= Yii::t('app', 'form_name') ?>:</label>
			<?= Html::activeInput('text', $model, 'name', [
				'required' => 'required',
				'id' => 'nameform'
			]) ?>
        </p>
        <p class="second">
            <label for="emailform"><?= Yii::t('app', 'form_email') ?>:</label>
			<?= Html::activeInput('email', $model, 'email', [
				'required' => 'required',
				'id' => 'emailform'
			]) ?>
        </p>
        <label for="messform"><?= Yii::t('app', 'form_client_advice') ?>:<a href="mailto:support@shark-taxi.ge">support@shark-taxi.ge</a></label>
		<?= Html::activeTextarea($model, 'message', [
			'required' => 'required',
			'id' => 'messform',
			'style' => [
				'height' => '232px',
			]
		]) ?>
        <p class="mail">
            <input class="sub" type="submit" value="<?= Yii::t('app', 'form_send') ?>">
        </p>

		<?php ActiveForm::end() ?>

    </div>
</section>