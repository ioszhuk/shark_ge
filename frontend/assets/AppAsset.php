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
		'css/common-style.css?314',
		'css/style.css?314',
		'css/map-style.css?314',
	];

	public $js = [
		'js/owl-carousel.js?314',
		'js/youtube-resizer.js?314',    
		'js/carousel-after-load.js?314',
		'js/custom.js?314'
	];

	public $depends = [
		'yii\web\YiiAsset',
	];

	public function init()
	{
		parent::init();

//		self::$antiCacheCode = rand(100, 99999999999999);
//
//		if ( self::$antiCacheCode ) {
//
//			foreach ($this->css as &$item) {
//				$item .= '?' . self::$antiCacheCode;
//			}
//
//			foreach ($this->js as &$item) {
//				$item .= '?' . self::$antiCacheCode;
//			}
//
//		}

	}

}
