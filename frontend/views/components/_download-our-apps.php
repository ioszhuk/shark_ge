<?php

/**
 * @var string $showOnly
 */

?>
<section class="download-our-apps">
    <div class="container new-sity  grey-line">
        <div class="row">
            <div class="col-md-12">
                <div class="downlad-apps-block no-padding">
                    <div class="pages">
                        <div class="zagolovok2"><?= Yii::t('app', 'download_app__title') ?></div>
                        <p><?= Yii::t('app', 'download_app__caption') ?></p>
                    </div>
                    <div class="downlad-apps-block.downlad-apps-block-main.soc-f">
						<?php if($showOnly === 'clients') : ?>
                            <div class="for-clients" style="margin-right: 10px; margin-top: 20px;">
                                <a class="btn btn-orange as" href="https://itunes.apple.com/us/app/shark-taxi/id779587448?mt=8" target="_blank" rel="nofollow noopener">APPSTORE</a>
                            </div>
                            <div class="for-clients" style="margin-right: 10px; margin-top: 20px;">
                                <a class="btn btn-orange as" href="https://play.google.com/store/apps/details?id=com.shark.taxi.client" target="_blank" rel="nofollow noopener">GOOGLE PLAY</a>
                            </div>
						<?php elseif($showOnly === 'drivers') : ?>
                            <div class="for-clients" style="margin-right: 10px; margin-top: 20px;">
                                <a class="btn btn-orange as" href="https://play.google.com/store/apps/details?id=com.shark.taxi.driver" target="_blank" rel="nofollow noopener">GOOGLE PLAY</a>
                            </div>
						<?php endif ?>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>