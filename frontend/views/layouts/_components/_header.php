<?php

use common\modules\languages\widgets\LanguageWidget;
use yii\helpers\Url;
use frontend\widgets\CityListWidget;

?>
<header>
    <div class="container">
        <div class="row">
            <div class="col-md-3 col-xs-3 main-header-block">
                <a class="logo" href="<?= Url::to(['site/index']) ?>" title="Shark Taxi Poland">
                    <img src="/image/logo.svg" alt="Shark Taxi" width="230" height="100">
                </a>
            </div>
            <div class="col-md-9 col-xs-9 additional-business" style="padding-top: 10px;">
                <div class="social-red">
                    <a href="https://www.youtube.com/channel/UCvJwBcJMkc7O_vZnwDGiHtg" rel="nofollow" target="_blank"><span class="pe-so-youtube-1"></span></a>
                    <a href="https://www.facebook.com/sharktaxii" rel="nofollow" target="_blank"><span class="pe-so-facebook"></span></a>
                    <a href="https://www.instagram.com/shark.taxi" rel="nofollow" target="_blank"><span class="pe-so-instagram"></span></a>
                </div>
                <div class="countries pull-right ">
					<?= LanguageWidget::widget() ?>
                </div>
                <ul class="main-menu">
                    <li><a href="<?= Url::to(['site/index']) ?>"><?= Yii::t('app', 'home') ?></a></li>
                    <li class="drop">
                        <a href="<?= Url::to(['city/index']) ?>"><?= Yii::t('app', 'cities') ?></a>
                        <div class="liswrap">
	                        <?= CityListWidget::widget([
		                        'type' => 'menu'
	                        ]) ?>
                        </div>
                    </li>
                    <li class="drop">
                        <a href="<?= Url::to(['site/clients']) ?>"><?= Yii::t('app', 'clients') ?></a>
                        <div class="liswrap">
                            <ul>
                                <li><a href="<?= Url::to(['site/testimonials']) ?>"><?= Yii::t('app', 'comments') ?></a></li>
                            </ul>
                        </div>
                    </li>
                    <li><a href="<?= Url::to(['site/drivers']) ?>"><?= Yii::t('app', 'drivers') ?></a></li>
                    <li><a href="<?= Url::to(['site/help']) ?>"><?= Yii::t('app', 'help') ?></a></li>
                    <li><a href="<?= Url::to(['site/contacts']) ?>"><?= Yii::t('app', 'contacts') ?></a></li>
                </ul>
                <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" id="mobile-menu-button" onclick="mobileMenuHandler()" data-target="#menu" aria-expanded="false">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
            </div>
        </div>
    </div>
</header>

<section class="header-mobile">
    <div class="container">
        <div class="navbar-collapse collapse" id="menu-mobile" style="display: none;">
            <ul class="nav navbar-nav">
                <li><a href="<?= Url::to(['site/index']) ?>"><?= Yii::t('app', 'home') ?></a></li>
                <li class="drop">
                    <a class="expand" href="<?= Url::to(['city/index']) ?>"><?= Yii::t('app', 'cities') ?></a>
                    <div class="expand"></div>
                    <?= CityListWidget::widget([
                            'type' => 'menu'
                    ]) ?>
                </li>
                <li  class="drop">
                    <a class="expand" href="<?= Url::to(['site/clients']) ?>"><?= Yii::t('app', 'clients') ?></a>
                    <div class="expand"></div>
                    <ul>
                        <li><a href="<?= Url::to(['site/testimonials']) ?>"><?= Yii::t('app', 'comments') ?></a></li>
                    </ul>
                </li>
                <li><a href="<?= Url::to(['site/drivers']) ?>"><?= Yii::t('app', 'drivers') ?></a></li>
                <li><a href="<?= Url::to(['site/help']) ?>"><?= Yii::t('app', 'help') ?></a></li>
                <li><a href="<?= Url::to(['site/contacts']) ?>"><?= Yii::t('app', 'contacts') ?></a></li>
            </ul>
        </div>
    </div>
</section>