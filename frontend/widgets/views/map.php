<?php

/**
 * @var $this \yii\web\View
 * @var string $title
 * @var $model \common\models\City
 */

use yii\helpers\Url;

?>
<section class="map">
	<div class="container map_b main">
		<div class="row">
			<div class="col-md-12 col-lg-12 col-sm-12 col-xs-12">

				<?php if(isset($title) && !empty($title)) : ?>
					<h1 style="text-align: center;"><?= $title ?></h1>
				<?php endif ?>

				<div id="map">
					<div class="row">
						<div class="col-xs-12">
							<div class="georgia-map">

                                <div class="static-map">
                                    <img src="/image/static-map.png">
                                </div>

								<ul>
									<?php foreach($model as $item) : ?>
									<li class="<?= $item['anchor'] ?>">
										<a href="<?= Url::to(['city/view', 'slug' => $item['slug']]) ?>"><span><?= Yii::t('app', $item['anchor']) ?></span></a>
									</li>
									<?php endforeach ?>
								</ul>
							</div>
						</div>
					</div>
				</div>

			</div>
		</div>
	</div>
</section>