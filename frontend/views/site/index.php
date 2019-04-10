<?php

/**
 * @var $this \yii\web\View
 * @var array $model
 */

use yii\helpers\Html;
use yii\helpers\Url;
use frontend\widgets\OurFeaturesWidget;
use frontend\widgets\ReviewsWidget;
use frontend\widgets\MapWidget;
use frontend\widgets\CounterWidget;

$this->title = $model['seo_title'];

$this->registerMetaTag([
	'name' => 'description',
	'content' => $model['seo_description']
])

?>
<section class="app-statistics">
    <div class="container">
        <div class="row page-header">
            <div class="col-sm-6">
                <div class="small-title"><?= Yii::t('app', 'download__how_to_use') ?><br><small><?= Yii::t('app', 'download__app_is_free') ?></small></div>
            </div>
            <div class="col-sm-6">
                <div class="downlad-apps-block downlad-apps-block-main soc-f">
                    <div class="for-clients">
                        <a href="https://itunes.apple.com/us/app/shark-taxi/id779587448?mt=8" rel="nofollow" target="_blank" class="btn btn-orange as" title="Приложение такси Shark в AppStore">APPSTORE</a>
                        <a href="https://play.google.com/store/apps/details?id=com.shark.taxi.client" rel="nofollow" target="_blank" class="btn btn-orange gp" title="Приложение такси Shark в Google Play">GOOGLE PLAY</a>
                    </div>
                </div>
            </div>
        </div>
        <div class="row text-center">
            <div class="col-lg-offset-2 col-sm-8">
                <p class="lead"><?= Yii::t('app', 'home__slogan', [
						'link' => Html::a('Shark Taxi', ['site/clients'])
					]) ?></p>
            </div>
        </div>
        <div class="row">
            <div class="col-md-3 col-sm-12">
                <div class="visible-md visible-lg">
                  <?= CounterWidget::widget() ?>
                </div>
            </div>
            <div class="col-md-5 col-sm-12">
                <div class="downlad-apps-block-pic">
                    <img src="/image/main-page/big-phones.png" alt="<?= Yii::t('app', 'download__app') ?>" title="<?= Yii::t('app', 'download__app') ?>" class="img-responsive">
                </div>
                <div class="visible-sm visible-xs">
	                <?= CounterWidget::widget() ?>
                </div>
            </div>
            <div class="col-md-4 col-sm-12">
                <div class="reviews-main-title"><?= Yii::t('app', 'testimonials__from_client') ?>:</div>
                <?= ReviewsWidget::widget() ?>
                <div class="more-reviews-link">
                    <a href="<?= Url::to(['site/testimonials']) ?>"><?= Yii::t('app', 'testimonials__more') ?></a>
                </div>
            </div>
        </div>

		<?= OurFeaturesWidget::widget() ?>

    </div>
</section>

<?= MapWidget::widget() ?>

<?= $this->render('@frontend/views/components/_advice') ?>

<section class="content">
    <div class="container">
        <div class="over-scroll">
            <div class="detail-articles-box">
                <div class="visible-part">
                    <?php if(!empty($model['name'])) : ?>
                        <h2><?= $model['name'] ?></h2>
                    <?php endif ?>
					<?= $model['body'] ?>
                </div>
            </div>
        </div>
    </div>
</section>