<?php

namespace frontend\assets;

use yii\web\AssetBundle;

/**
 * Main frontend application asset bundle.
 */
class AppAsset extends AssetBundle
{
	public static $antiCacheCode;

	public $basePath = '@webroot';

	public $baseUrl = '@web';

	public $css = [
		'css/common-style.css?6664564',
		'css/style.css?6664564',
		'css/map-style.css?6664564',
	];

	public $js = [
		'js/owl-carousel.js?6664564',
		'js/youtube-resizer.js?6664564',
		'js/carousel-after-load.js?6664564',
		'js/custom.js?6664564'
	];

	public $depends = [
		'yii\web\YiiAsset',
	];

}
