<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;
use unclead\multipleinput\MultipleInput;
use vova07\imperavi\Widget;
use yii\helpers\Url;

/* @var $this yii\web\View */
/* @var $model common\models\settings\HelpSettings */

$this->title = 'Страница - "Помощь"';
$this->params['breadcrumbs'][] = ['label' => $this->title, 'url' => ['settings/help-page']];

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
                        <h3 class="m-portlet__head-text">Контент на страницу "Помощь"</h3>
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
					<?= $form->field($model, 'common_question_ge')->widget(MultipleInput::className(), [
						'allowEmptyList'    => true,
						'enableGuessTitle'  => false,
						'sortable' => false,
						'addButtonPosition' => MultipleInput::POS_FOOTER,
						'rendererClass' => \noIT\multipleInput\renderers\ListRenderer::className(),
						'columns' => [
							[
								'name' => 'question',
								'title' => 'Вопрос',
							],
							[
								'name' => 'answer',
								'title' => 'Ответ',
								'type' => Widget::className(),
								'options' => [
									'options' => [
										'settings' => [
											'lang' => 'ru',
											'minHeight' => 340,
											'removeWithoutAttr' => [],
											'buttons' => ['html', 'formatting', 'bold', 'italic', 'underline', 'deleted', 'unorderedlist', 'orderedlist', 'link', 'alignment', 'horizontalrule'],
											'formatting' => ['p', 'blockquote', 'pre'],
											'plugins' => [
												'fullscreen',
											],
										],
									]
								]
							],
						]

					]) ?>
					<?= $form->field($model, 'common_question_en')->widget(MultipleInput::className(), [
						'allowEmptyList'    => true,
						'enableGuessTitle'  => false,
						'sortable' => false,
						'addButtonPosition' => MultipleInput::POS_FOOTER,
						'rendererClass' => \noIT\multipleInput\renderers\ListRenderer::className(),
						'columns' => [
							[
								'name' => 'question',
								'title' => 'Вопрос',
							],
							[
								'name' => 'answer',
								'title' => 'Ответ',
								'type' => Widget::className(),
								'options' => [
									'options' => [
										'settings' => [
											'lang' => 'ru',
											'minHeight' => 340,
											'removeWithoutAttr' => [],
											'buttons' => ['html', 'formatting', 'bold', 'italic', 'underline', 'deleted', 'unorderedlist', 'orderedlist', 'link', 'alignment', 'horizontalrule'],
											'formatting' => ['p', 'blockquote', 'pre'],
											'plugins' => [
												'fullscreen',
											],
										],
									]
								]
							],
						]

					]) ?>
					<?= $form->field($model, 'common_question_ru')->widget(MultipleInput::className(), [
						'allowEmptyList'    => true,
						'enableGuessTitle'  => false,
						'sortable' => false,
						'addButtonPosition' => MultipleInput::POS_FOOTER,
						'rendererClass' => \noIT\multipleInput\renderers\ListRenderer::className(),
						'columns' => [
							[
								'name' => 'question',
								'title' => 'Вопрос',
							],
							[
								'name' => 'answer',
								'title' => 'Ответ',
								'type' => Widget::className(),
								'options' => [
									'options' => [
										'settings' => [
											'lang' => 'ru',
											'minHeight' => 340,
											'removeWithoutAttr' => [],
											'buttons' => ['html', 'formatting', 'bold', 'italic', 'underline', 'deleted', 'unorderedlist', 'orderedlist', 'link', 'alignment', 'horizontalrule'],
											'formatting' => ['p', 'blockquote', 'pre'],
											'plugins' => [
												'fullscreen',
											],
										],
									]
								]
							],
						]

					]) ?>
                </div>

            </div>

            <br>

            <div class="row justify-content-between">

                <div class="col like-box">
					<?= $form->field($model, 'help_for_driver_ge')->widget(MultipleInput::className(), [
						'allowEmptyList'    => true,
						'enableGuessTitle'  => false,
						'sortable' => false,
						'addButtonPosition' => MultipleInput::POS_FOOTER,
						'rendererClass' => \noIT\multipleInput\renderers\ListRenderer::className(),
						'columns' => [
							[
								'name' => 'question',
								'title' => 'Вопрос',
							],
							[
								'name' => 'answer',
								'title' => 'Ответ',
								'type' => Widget::className(),
								'options' => [
									'options' => [
										'settings' => [
											'lang' => 'ru',
											'minHeight' => 340,
											'removeWithoutAttr' => [],
											'buttons' => ['html', 'formatting', 'bold', 'italic', 'underline', 'deleted', 'unorderedlist', 'orderedlist', 'link', 'alignment', 'horizontalrule'],
											'formatting' => ['p', 'blockquote', 'pre'],
											'plugins' => [
												'fullscreen',
											],
										],
									]
								]
							],
						]
					]) ?>
					<?= $form->field($model, 'help_for_driver_en')->widget(MultipleInput::className(), [
						'allowEmptyList'    => true,
						'enableGuessTitle'  => false,
						'sortable' => false,
						'addButtonPosition' => MultipleInput::POS_FOOTER,
						'rendererClass' => \noIT\multipleInput\renderers\ListRenderer::className(),
						'columns' => [
							[
								'name' => 'question',
								'title' => 'Вопрос',
							],
							[
								'name' => 'answer',
								'title' => 'Ответ',
								'type' => Widget::className(),
								'options' => [
									'options' => [
										'settings' => [
											'lang' => 'ru',
											'minHeight' => 340,
											'removeWithoutAttr' => [],
											'buttons' => ['html', 'formatting', 'bold', 'italic', 'underline', 'deleted', 'unorderedlist', 'orderedlist', 'link', 'alignment', 'horizontalrule'],
											'formatting' => ['p', 'blockquote', 'pre'],
											'plugins' => [
												'fullscreen',
											],
										],
									]
								]
							],
						]
					]) ?>
					<?= $form->field($model, 'help_for_driver_ru')->widget(MultipleInput::className(), [
						'allowEmptyList'    => true,
						'enableGuessTitle'  => false,
						'sortable' => false,
						'addButtonPosition' => MultipleInput::POS_FOOTER,
						'rendererClass' => \noIT\multipleInput\renderers\ListRenderer::className(),
						'columns' => [
							[
								'name' => 'question',
								'title' => 'Вопрос',
							],
							[
								'name' => 'answer',
								'title' => 'Ответ',
								'type' => Widget::className(),
								'options' => [
									'options' => [
										'settings' => [
											'lang' => 'ru',
											'minHeight' => 340,
											'removeWithoutAttr' => [],
											'buttons' => ['html', 'formatting', 'bold', 'italic', 'underline', 'deleted', 'unorderedlist', 'orderedlist', 'link', 'alignment', 'horizontalrule'],
											'formatting' => ['p', 'blockquote', 'pre'],
											'plugins' => [
												'fullscreen',
											],
										],
									]
								]
							],
						]
					]) ?>
                </div>

            </div>

            <br>

            <div class="row justify-content-between">

                <div class="col like-box">
					<?= $form->field($model, 'help_for_client_ge')->widget(MultipleInput::className(), [
						'allowEmptyList'    => true,
						'enableGuessTitle'  => false,
						'sortable' => false,
						'addButtonPosition' => MultipleInput::POS_FOOTER,
						'rendererClass' => \noIT\multipleInput\renderers\ListRenderer::className(),
						'columns' => [
							[
								'name' => 'question',
								'title' => 'Вопрос',
							],
							[
								'name' => 'answer',
								'title' => 'Ответ',
								'type' => Widget::className(),
								'options' => [
									'options' => [
										'settings' => [
											'lang' => 'ru',
											'minHeight' => 340,
											'removeWithoutAttr' => [],
											'buttons' => ['html', 'formatting', 'bold', 'italic', 'underline', 'deleted', 'unorderedlist', 'orderedlist', 'link', 'alignment', 'horizontalrule'],
											'formatting' => ['p', 'blockquote', 'pre'],
											'plugins' => [
												'fullscreen',
											],
										],
									]
								]
							],
						]
					]) ?>
					<?= $form->field($model, 'help_for_client_en')->widget(MultipleInput::className(), [
						'allowEmptyList'    => true,
						'enableGuessTitle'  => false,
						'sortable' => false,
						'addButtonPosition' => MultipleInput::POS_FOOTER,
						'rendererClass' => \noIT\multipleInput\renderers\ListRenderer::className(),
						'columns' => [
							[
								'name' => 'question',
								'title' => 'Вопрос',
							],
							[
								'name' => 'answer',
								'title' => 'Ответ',
								'type' => Widget::className(),
								'options' => [
									'options' => [
										'settings' => [
											'lang' => 'ru',
											'minHeight' => 340,
											'removeWithoutAttr' => [],
											'buttons' => ['html', 'formatting', 'bold', 'italic', 'underline', 'deleted', 'unorderedlist', 'orderedlist', 'link', 'alignment', 'horizontalrule'],
											'formatting' => ['p', 'blockquote', 'pre'],
											'plugins' => [
												'fullscreen',
											],
										],
									]
								]
							],
						]
					]) ?>
					<?= $form->field($model, 'help_for_client_ru')->widget(MultipleInput::className(), [
						'allowEmptyList'    => true,
						'enableGuessTitle'  => false,
						'sortable' => false,
						'addButtonPosition' => MultipleInput::POS_FOOTER,
						'rendererClass' => \noIT\multipleInput\renderers\ListRenderer::className(),
						'columns' => [
							[
								'name' => 'question',
								'title' => 'Вопрос',
							],
							[
								'name' => 'answer',
								'title' => 'Ответ',
								'type' => Widget::className(),
								'options' => [
									'options' => [
										'settings' => [
											'lang' => 'ru',
											'minHeight' => 340,
											'removeWithoutAttr' => [],
											'buttons' => ['html', 'formatting', 'bold', 'italic', 'underline', 'deleted', 'unorderedlist', 'orderedlist', 'link', 'alignment', 'horizontalrule'],
											'formatting' => ['p', 'blockquote', 'pre'],
											'plugins' => [
												'fullscreen',
											],
										],
									]
								]
							],
						]
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

        </div>
    </div>

    <br>
<?php ActiveForm::end(); ?>