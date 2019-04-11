<?php

use common\modules\languages\widgets\LanguageWidget;
use yii\helpers\Url;

?>
<footer>
    <div class="container">
        <div class="row">
            <div class="col-md-8">
                <ul class="main-menu hidden-sm hidden-xs">
                    <li><a href="<?= Url::to(['site/index']) ?>"><?= Yii::t('app', 'home') ?></a></li>
                    <li><a href="<?= Url::to(['site/clients']) ?>"><?= Yii::t('app', 'clients') ?></a></li>
                    <li><a href="<?= Url::to(['site/drivers']) ?>"><?= Yii::t('app', 'drivers') ?></a></li>
                    <li><a href="<?= Url::to(['site/help']) ?>"><?= Yii::t('app', 'help') ?></a></li>
                    <li><a href="<?= Url::to(['site/contacts']) ?>"><?= Yii::t('app', 'contacts') ?></a></li>
                </ul>
            </div>
            <div class="col-md-4 col-xs-12 soc-f">
                <div class="social-red">
                    <a href="https://www.youtube.com/channel/UCvJwBcJMkc7O_vZnwDGiHtg" rel="nofollow" target="_blank"><span class="pe-so-youtube-1"></span></a>
                    <a href="https://www.facebook.com/sharktaxii" rel="nofollow" target="_blank"><span class="pe-so-facebook"></span></a>
                    <a href="https://www.instagram.com/shark.taxi" rel="nofollow" target="_blank"><span class="pe-so-instagram"></span></a>
                </div>
				<?= LanguageWidget::widget() ?>
            </div>
            <div class="border"></div>
        </div>
        <div class="row">
            <div class="col-sm-3 col-xs-12 soc-f">
                <table class="phone-adress">
                    <tr>
                        <td class="icon-footer"><span class="glyphicon glyphicon-envelope"></span></td>
                        <td><?= Yii::t('app', 'email__support_title') ?>:<br/><a href="mailto:support@shark-taxi.ge">support@shark-taxi.ge</a></td>
                    </tr>
                </table>
            </div>
            <div class="col-sm-3 col-xs-12 soc-f">
                <table class="phone-adress">
                    <tr>
                        <td class="icon-footer"><span class="glyphicon glyphicon-envelope"></span></td>
                        <td><?= Yii::t('app', 'email__information_title') ?>:<br/><a href="mailto:info@shark-taxi.ge">info@shark-taxi.ge</a></td>
                    </tr>
                </table>
            </div>
            <div class="col-sm-6 shark-img col-xs-12">
                <ul class="lang-choose visible-xs">
					<?= LanguageWidget::widget() ?>
                </ul>
            </div>
        </div>
    </div>
</footer>

<section class="black-footer">
    <div class="container">
        <div class="row">
            <div class="col-sm-8 copy-r"><?= Yii::t('app', 'copyright') ?> &copy; <?= date('Y') ?> Shark Taxi</div>
            <div class="col-sm-4 hidden-xs">
                <ul class="black-footer-menu">
                    <li><a href="<?= Url::to(['site/contacts']) ?>"><?= Yii::t('app', 'contacts') ?></a></li>
                    <li>|</li>
                    <li><a href="<?= Url::to(['site/help']) ?>"><?= Yii::t('app', 'help') ?></a></li>
                    <!--					<li>|</li>-->
                    <!--					<li><a href="/karta-sajta" title="Карта сайта">Карта сайта</a></li>-->
                </ul>
            </div>
        </div>
        <p class="copy"><?= Yii::t('app', 'seo__company') ?> — <a href="https://inweb.ua/" target="_blank" rel="nofollow">Inweb.ua</a></p>
    </div>
</section>