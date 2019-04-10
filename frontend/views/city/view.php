<?php

/**
 * @var $this \yii\web\View
 * @var string $language;
 * @var $model \common\models\City
 */

use yii\helpers\Html;

$this->title = $model["seo_title_{$language}"];

$this->registerMetaTag([
	'name' => 'description',
	'content' => $model["seo_description_{$language}"]
])

?>

<section class="back-to-cities">
    <div class="container new-sity">
        <div class="row">
            <div class="col-md-12">
				<?= Html::a(Yii::t('app', 'back_link'), ['city/index']) ?>
            </div>
        </div>
    </div>
</section>

<?= $this->render('@frontend/views/components/_download-our-apps', ['showOnly' => 'clients']) ?>

<section class="city-content">
    <div class="container new-sity">
        <div class="row">
            <div class="col-md-12 col-lg-12 col-sm-12 col-xs-12">
                <div class="big-new-block gorod_mezgorod">
                    <div class="driver">
                        <h1 class="zagolovok2"><?= $model["name_{$language}"] ?></h1>
                    </div>
					<?= $model["body_{$language}"] ?>
                </div>
            </div>
        </div>
    </div>
</section>