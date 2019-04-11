<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;
use backend\widgets\MetronicSingleCheckbox;
use vova07\imperavi\Widget;

/* @var $this yii\web\View */
/* @var $model backend\models\Testimonial */
/* @var $form yii\widgets\ActiveForm */
?>

<?php $form = ActiveForm::begin(); ?>

<div class="row justify-content-between">
    <div class="col like-box">
		<?= $form->field($model, 'name_ge')->textInput(['maxlength' => true]) ?>

		<?= $form->field($model, 'name_en')->textInput(['maxlength' => true]) ?>

		<?= $form->field($model, 'name_ru')->textInput(['maxlength' => true]) ?>
    </div>
</div>

<div class="row justify-content-between">
    <div class="col like-box">
		<?php if(!empty($model->avatar)) : ?>
			<?= Html::img($model->getUploadUrl('avatar'), ['class' => 'img-thumbnail']); ?>
		<?php endif ?>
		<?= $form->field($model, 'avatar')->fileInput() ?>
    </div>
    <div class="col like-box">
		<?= $form->field($model, 'status')->widget(MetronicSingleCheckbox::className(), [
			'label' => 'Видимый'
		]) ?>
    </div>
</div>

<div class="row justify-content-between">
    <div class="col like-box">
		<?= $form->field($model, 'body_ge')->widget(Widget::className(), [
			'settings' => [
				'lang' => 'ru',
				'minHeight' => 200,
				'removeWithoutAttr' => [],
				'buttons' => ['html', 'formatting', 'bold', 'italic', 'underline', 'deleted', 'unorderedlist', 'orderedlist', 'link', 'alignment', 'horizontalrule'],
				'formatting' => ['p'],
				'plugins' => [
					'fullscreen',
				],
			],
		]) ?>
		<?= $form->field($model, 'body_en')->widget(Widget::className(), [
			'settings' => [
				'lang' => 'ru',
				'minHeight' => 200,
				'removeWithoutAttr' => [],
				'buttons' => ['html', 'formatting', 'bold', 'italic', 'underline', 'deleted', 'unorderedlist', 'orderedlist', 'link', 'alignment', 'horizontalrule'],
				'formatting' => ['p'],
				'plugins' => [
					'fullscreen',
				],
			],
		]) ?>

		<?= $form->field($model, 'body_ru')->widget(Widget::className(), [
			'settings' => [
				'lang' => 'ru',
				'minHeight' => 200,
				'removeWithoutAttr' => [],
				'buttons' => ['html', 'formatting', 'bold', 'italic', 'underline', 'deleted', 'unorderedlist', 'orderedlist', 'link', 'alignment', 'horizontalrule'],
				'formatting' => ['p'],
				'plugins' => [
					'fullscreen',
				],
			],
		]) ?>
    </div>
</div>

<div class="row justify-content-between">
    <div class="col">
        <div class="form-group">
            <br>
			<?= Html::submitButton('Сохранить', ['class' => 'btn btn-primary']) ?>
        </div>
    </div>
</div>

<?php ActiveForm::end(); ?>