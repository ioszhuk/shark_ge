<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;
use unclead\multipleinput\MultipleInput;
use vova07\imperavi\Widget;
use yii\helpers\Url;

/* @var $this yii\web\View */
/* @var $model common\models\settings\DriverSettings */

$this->title = 'Страница - "Водителям"';
$this->params['breadcrumbs'][] = ['label' => $this->title, 'url' => ['settings/driver-page']];

?>

<?php $form = ActiveForm::begin(); ?>

    <div class="custom-form-section">

        <div class="m-portlet m-portlet--tab">
            <div class="m-portlet__head">
                <div class="m-portlet__head-caption">
                    <div class="m-portlet__head-title">
						<span class="m-portlet__head-icon m--hide">
						<i class="la la-gear"></i>
						</span>
                        <h3 class="m-portlet__head-text">Контент на страницу "Водителям"</h3>
                    </div>
                </div>
            </div>
        </div>

        <div class="custom-form-section-box">

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

            <br>

            <div class="row justify-content-between">
                <div class="col like-box">
					<?= $form->field($model, 'work_standart_name_ge')->textInput(['maxlength' => true]) ?>
					<?= $form->field($model, 'work_standart_body_ge')->widget(Widget::className(), [
						'settings' => [
							'lang' => 'ru',
							'minHeight' => 420,
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
                <div class="col like-box">
					<?= $form->field($model, 'work_standart_name_en')->textInput(['maxlength' => true]) ?>
					<?= $form->field($model, 'work_standart_body_en')->widget(Widget::className(), [
						'settings' => [
							'lang' => 'ru',
							'minHeight' => 420,
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
                <div class="col like-box">
					<?= $form->field($model, 'work_standart_name_ru')->textInput(['maxlength' => true]) ?>
					<?= $form->field($model, 'work_standart_body_ru')->widget(Widget::className(), [
						'settings' => [
							'lang' => 'ru',
							'minHeight' => 420,
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

            <br>

            <div class="row justify-content-between">
                <div class="col">
                    <div class="form-group">
                        <br>
						<?= Html::submitButton('Сохранить', ['class' => 'btn btn-primary']) ?>
                    </div>
                </div>
            </div>

        </div>
    </div>

    <br>
<?php ActiveForm::end(); ?>