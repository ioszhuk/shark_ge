<?php

/**
 * @var $this \yii\web\View
 * @var string $language
 * @var array $seoModel
 * @var $model \common\models\Client
 */

use yii\helpers\Html;

$this->title = $seoModel["seo_title"];

$this->registerMetaTag([
	'name' => 'description',
	'content' => $seoModel["seo_description"]
]);

?>
<section class="clients-content">
    <div class="container clients">

		<?= $this->render('@frontend/views/components/_download-our-apps', ['showOnly' => 'clients']) ?>

        <div class="row">
            <div class="col-md-12">
                <div class="big-block-title clients-page">
                    <h1><?= $seoModel['name'] ?></h1>
                </div>
            </div>
        </div>

        <div class="row">
            <div class="col-md-12">
                <div class="big-block just-info">

					<?php foreach($model as $item) : ?>
                        <div class="row grey-line" style="margin-top: 50px;">
							<?php if($item['position'] === 'left') : ?>
                                <div class="col-md-8 col-sm-8" style="display: table-cell;vertical-align: middle;">
                                    <div class="zagolovok3 drivers-title"><?= $item["name_{$language}"] ?></div>
                                    <div class="grey-pattern">
										<?= $item["body_{$language}"] ?>
                                    </div>
                                </div>
                                <div class="col-md-4 col-sm-4">
									<?= Html::img($item->getThumbUploadUrl("image_{$language}", 'thumb'), [
										'alt' => $item["name_{$language}"],
									]) ?>
                                </div>
							<?php elseif($item['position'] === 'right') : ?>
                                <div class="col-md-4 col-sm-4">
									<?= Html::img($item->getThumbUploadUrl("image_{$language}", 'thumb'), [
										'alt' => $item["name_{$language}"],
									]) ?>
                                </div>
                                <div class="col-md-8 col-sm-8" style="display: table-cell;vertical-align: middle;">
                                    <div class="zagolovok3 drivers-title"><?= $item["name_{$language}"] ?></div>
                                    <div class="grey-pattern">
										<?= $item["body_{$language}"] ?>
                                    </div>
                                </div>
							<?php endif ?>
                        </div>

					<?php endforeach ?>

                </div>
            </div>
        </div>

    </div>
</section>