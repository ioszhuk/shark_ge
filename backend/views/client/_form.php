<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;
use vova07\imperavi\Widget;
use yii\helpers\Url;
use backend\components\ComponentHelper;
use yii\helpers\ArrayHelper;
use backend\widgets\MetronicBoostrapSelect;

/* @var $this yii\web\View */
/* @var $model backend\models\Client */
/* @var $form yii\widgets\ActiveForm */
?>

<?php $form = ActiveForm::begin(); ?>

    <div class="row justify-content-between">
        <div class="col like-box">
			<?= $form->field($model, 'position')->widget(MetronicBoostrapSelect::className(), [
				'items' => ArrayHelper::map( Yii::$app->params['position'], 'value', 'label')
			]) ?>
        </div>
        <div class="col like-box">
			<?= $form->field($model, 'sort_order')->widget(MetronicBoostrapSelect::className(), [
				'items' => ArrayHelper::map(Yii::$app->componentHelper->getSortOrderRange(), 'value', 'label'),
				'prompt' => 'Укажите порядок сортировки'
			]) ?>
        </div>
    </div>

    <div class="row justify-content-between">
        <div class="col like-box">
			<?= $form->field($model, 'name_ge')->textInput(['maxlength' => true]) ?>

			<?= $form->field($model, 'name_en')->textInput(['maxlength' => true]) ?>

			<?= $form->field($model, 'name_ru')->textInput(['maxlength' => true]) ?>
        </div>
    </div>

    <div class="row justify-content-between">
        <div class="col like-box">
			<?php if(!empty($model->image_ge)) : ?>
				<?= Html::img($model->getUploadUrl('image_ge'), ['class' => 'img-thumbnail']); ?>
			<?php endif ?>
			<?= $form->field($model, 'image_ge')->fileInput() ?>
        </div>
        <div class="col like-box">
			<?php if(!empty($model->image_en)) : ?>
				<?= Html::img($model->getUploadUrl('image_en'), ['class' => 'img-thumbnail']); ?>
			<?php endif ?>
			<?= $form->field($model, 'image_en')->fileInput() ?>
        </div>
        <div class="col like-box">
			<?php if(!empty($model->image_ru)) : ?>
				<?= Html::img($model->getUploadUrl('image_ru'), ['class' => 'img-thumbnail']); ?>
			<?php endif ?>
			<?= $form->field($model, 'image_ru')->fileInput() ?>
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