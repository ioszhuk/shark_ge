<?php

/**
 * @var $this \yii\web\View
 * @var array $model
 */

$this->title = $model["seo_title"];

$this->registerMetaTag([
	'name' => 'description',
	'content' => $model["seo_description"]
])

?>
<section class="help-content">
    <div class="container">

        <div class="row">
            <div class="col-md-12">
                <div class="help-block">
                    <div class="big-block-title mess">
                        <h1><?= $model['name'] ?></h1>
                    </div>
                    <p class="lead"><?= Yii::t('app', 'help__caption') ?></p>
                </div>
            </div>
        </div>

        <div class="row">
            <div class="col-md-12">
                <div class="tabbable">
                    <ul class="help-tabs" id="help-tabs">
                        <li><button type="button" class="help-tab-btn active" data-toggle="tab"><?= Yii::t('app', 'help_tab_1') ?></button></li>
                        <li><button type="button" class="help-tab-btn" data-toggle="tab"><?= Yii::t('app', 'help_tab_2') ?></button></li>
                        <li><button type="button" class="help-tab-btn" data-toggle="tab"><?= Yii::t('app', 'help_tab_3') ?></button></li>
                    </ul>

                    <div class="tab-content">
                        <!-- 1 -->
                        <div class="tab-pane" style="display: block;">

                            <div class="panel-group">

								<?php foreach($model['common_question'] as $item) : ?>
                                    <div class="question">
                                        <div class="title"><?= $item['question'] ?></div>
										<?= $item['answer'] ?>
                                    </div>
								<?php endforeach ?>

                            </div>
                        </div>
                        <!-- 2 -->
                        <div class="tab-pane" style="display: none;">

                            <div class="panel-group">

								<?php foreach($model['help_for_driver'] as $item) : ?>

                                    <div class="question">
                                        <div class="title"><?= $item['question'] ?></div>
										<?= $item['answer'] ?>
                                    </div>
								<?php endforeach ?>

                            </div>
                        </div>
                        <!-- 3 -->
                        <div class="tab-pane" style="display: none;">

                            <div class="panel-group">

								<?php foreach($model['help_for_client'] as $item) : ?>
                                    <div class="question">
                                        <div class="title"><?= $item['question'] ?></div>
										<?= $item['answer'] ?>
                                    </div>
								<?php endforeach ?>

                            </div>
                        </div>
                        <!-- *** -->
                    </div>
                </div>
            </div>
        </div>

    </div>
</section>

<?= $this->render('@frontend/views/components/_download-our-apps', ['showOnly' => 'clients']) ?>
