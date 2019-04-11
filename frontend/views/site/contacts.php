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
<section class="contacts-content">
    <div class="container">
        <div class="row">
            <div class="col-md-8 col-sm-6 col-xs-12 contacts-line">
                <div class="contact-list-block">
                    <p class="contact-list-block-title"><?= Yii::t('app', 'our_email_title') ?></p>
                    <dl class="phone-contact-list">
                        <dt><?= Yii::t('app', 'email__support_title') ?></dt>
                        <dd><a href="mailto:support@shark-taxi.ge" style="text-decoration: none;">support@shark-taxi.ge</a></dd>
                        <dt><?= Yii::t('app', 'email__information_title') ?></dt>
                        <dd><a href="mailto:info@shark-taxi.ge" style="text-decoration: none;">info@shark-taxi.ge</a></dd>
                        <dt><?= Yii::t('app', 'email__advertising_title') ?></dt>
                        <dd><a href="mailto:advertising@shark-taxi.ge" style="text-decoration: none;">advertising@shark-taxi.ge</a></dd>
                    </dl>
                </div>
            </div>
            <div class="col-md-4 col-sm-12 col-xs-12 contacts-line">
                <div class="contact-list-block">
                    <p class="contact-list-block-title"><?= Yii::t('app', 'contacts__social_networks') ?>:</p>
                    <ul class="soc-network-links pe-social">
                        <li><a href="https://www.facebook.com/sharktaxii/" rel="nofollow" target="_blank"><i class="pe-so-facebook pe-bg pe-bg-rd pe-2x"></i></a></li>
                        <li><a href="https://www.instagram.com/shark.taxi/" rel="nofollow" target="_blank"><i class="pe-so-instagram pe-bg pe-bg-rd pe-2x"></i></a></li>
                        <li><a href="https://www.youtube.com/channel/UCvJwBcJMkc7O_vZnwDGiHtg" rel="nofollow" target="_blank"><i class="pe-so-youtube-1 pe-bg pe-bg-rd pe-2x"></i></a></li>
                    </ul>
                </div>
            </div>
        </div>

	    <?= $this->render('@frontend/views/components/_advice') ?>

        <br>

    </div>
</section>