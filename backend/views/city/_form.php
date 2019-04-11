<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;
use vova07\imperavi\Widget;
use backend\widgets\MetronicSingleCheckbox;

/* @var $this yii\web\View */
/* @var $model backend\models\City */
/* @var $form yii\widgets\ActiveForm */
?>

<?php $form = ActiveForm::begin(); ?>

    <div class="row justify-content-between">
        <div class="col like-box">
			<?= $form->field($model, 'seo_title_ge')->textInput(['maxlength' => true]) ?>

			<?= $form->field($model, 'seo_title_en')->textInput(['maxlength' => true]) ?>

			<?= $form->field($model, 'seo_title_ru')->textInput(['maxlength' => true]) ?>
        </div>
    </div>

    <div class="row justify-content-between">
        <div class="col like-box">
			<?= $form->field($model, 'seo_description_ge')->textInput(['maxlength' => true]) ?>

			<?= $form->field($model, 'seo_description_en')->textInput(['maxlength' => true]) ?>

			<?= $form->field($model, 'seo_description_ru')->textInput(['maxlength' => true]) ?>
        </div>
    </div>

    <br>

    <div class="row justify-content-between">
        <div class="col like-box">
			<?= $form->field($model, 'name_ge')->textInput(['maxlength' => true]) ?>

			<?= $form->field($model, 'name_en')->textInput(['maxlength' => true]) ?>

			<?= $form->field($model, 'name_ru')->textInput(['maxlength' => true]) ?>
        </div>
    </div>

    <div class="row justify-content-between">
        <div class="col like-box">
			<?= $form->field($model, 'slug')->textInput(['maxlength' => true]) ?>
        </div>
        <div class="col like-box">
			<?= $form->field($model, 'anchor')->textInput(['maxlength' => true]) ?>
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
					'minHeight' => 600,
					'removeWithoutAttr' => [],
					'buttons' => ['html', 'formatting', 'bold', 'italic', 'underline', 'deleted', 'unorderedlist', 'orderedlist', 'link', 'alignment', 'horizontalrule'],
					'formatting' => ['p', 'blockquote', 'pre', 'h2', 'h3', 'h4', 'h5', 'h6'],
					'plugins' => [
						'fullscreen',
						'table',
						'video',
					],
				],
			]) ?>
			<?= $form->field($model, 'body_en')->widget(Widget::className(), [
				'settings' => [
					'lang' => 'ru',
					'minHeight' => 600,
					'removeWithoutAttr' => [],
					'buttons' => ['html', 'formatting', 'bold', 'italic', 'underline', 'deleted', 'unorderedlist', 'orderedlist', 'link', 'alignment', 'horizontalrule'],
					'formatting' => ['p', 'blockquote', 'pre', 'h2', 'h3', 'h4', 'h5', 'h6'],
					'plugins' => [
						'fullscreen',
						'table',
						'video',
					],
				],
			]) ?>
			<?= $form->field($model, 'body_ru')->widget(Widget::className(), [
				'settings' => [
					'lang' => 'ru',
					'minHeight' => 600,
					'removeWithoutAttr' => [],
					'buttons' => ['html', 'formatting', 'bold', 'italic', 'underline', 'deleted', 'unorderedlist', 'orderedlist', 'link', 'alignment', 'horizontalrule'],
					'formatting' => ['p', 'blockquote', 'pre', 'h2', 'h3', 'h4', 'h5', 'h6'],
					'plugins' => [
						'fullscreen',
						'table',
						'video',
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