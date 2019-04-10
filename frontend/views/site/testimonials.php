<?php

/**
 * @var $this \yii\web\View
 * @var array $seoModel
 * @var string $language
 * @var $model \common\models\Testimonial
 */

use yii\helpers\Html;

$this->title = $seoModel["seo_title"];

$this->registerMetaTag([
	'name' => 'description',
	'content' => $seoModel["seo_description"]
])

?>
<section class="testimonials-content">
    <div class="container">

		<?= $this->render('@frontend/views/components/_download-our-apps', ['showOnly' => 'clients']) ?>

        <div class="row">
            <div class="col-xs-12">

                <h1 class="zagolovok2"  style="text-align: center;"><?= Yii::t('app', 'testimonials__h1') ?></h1>

                <br><br>

                <div class="cont-mommentaries">

					<?php foreach($model as $item) : ?>
                        <div class="cont-comm">
                            <div class="name">
                                <div class="img person-avatar">
									<?= Html::img($item->getThumbUploadUrl('avatar', 'thumb'), [
										'width' => '76',
										'height' => '76',
										'class' => 'attachment-rew-md size-rew-md wp-post-image',
										'alt' => $item["name_{$language}"],
									]) ?>
                                </div>
                                <div class="name-persone"><?= $item["name_{$language}"] ?></div>
                            </div>
                            <div class="rewiew-text">
								<?= $item["body_{$language}"] ?>
                            </div>

                        </div>
					<?php endforeach ?>

                </div>
            </div>
        </div>
    </div>
</section>
