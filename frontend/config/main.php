<?php
$params = array_merge(
    require __DIR__ . '/../../common/config/params.php',
    require __DIR__ . '/../../common/config/params-local.php',
    require __DIR__ . '/params.php',
    require __DIR__ . '/params-local.php'
);

return [
    'id' => 'app-frontend',
    'basePath' => dirname(__DIR__),
    'bootstrap' => ['log', 'languages'],
    'language' => 'pl-PL',
    'controllerNamespace' => 'frontend\controllers',
    'on beforeRequest' => function () {
	    $pathInfo = Yii::$app->request->pathInfo;
	    $query = Yii::$app->request->queryString;

	    if (!empty($pathInfo)) {

		    $isStringHasUpperCase = preg_match('/[A-Z]/', $pathInfo);
		    $isStringHasSlash = substr($pathInfo, -1) === '/';

		    if($isStringHasSlash || $isStringHasUpperCase) {

			    if($isStringHasUpperCase) {
				    $pathInfo = strtolower($pathInfo);
			    }

			    $url = $isStringHasSlash ? '/' . substr($pathInfo, 0, -1) : '/' . $pathInfo;

			    if ($query) {
				    $url .= '?' . $query;
			    }

			    Yii::$app->response->redirect($url, 301);
			    Yii::$app->end();
		    }

	    }
    },
    'components' => [
        'request' => [
	        'class' => 'common\components\Request', // custom
	        'baseUrl' => '',
            'csrfParam' => '_csrf-frontend',
        ],
        'user' => [
            'identityClass' => 'common\models\User',
            'enableAutoLogin' => true,
            'identityCookie' => ['name' => '_identity-frontend', 'httpOnly' => true],
        ],
        'session' => [
            'name' => 'advanced-frontend',
        ],
        'log' => [
            'traceLevel' => YII_DEBUG ? 3 : 0,
            'targets' => [
                [
                    'class' => 'yii\log\FileTarget',
                    'levels' => ['error', 'warning'],
                ],
            ],
        ],
        'errorHandler' => [
            'errorAction' => 'site/error',
        ],
        'urlManager' => [
	        'class' => 'common\components\UrlManager',  // custom
	        'enablePrettyUrl' => true,
	        'showScriptName' => false,
	        'rules' => require (__DIR__ . '/routes.php'),
        ],
        'i18n' => [
	        'translations' => [
		        'app' => [
			        'class' => 'yii\i18n\PhpMessageSource',
			        'basePath' => '@common/messages',
		        ],
	        ],
        ],
        'assetManager' => [
	        'bundles' => [
		        'yii\web\JqueryAsset' => [
			        'sourcePath' => null,
			        'basePath' => '@webroot',
			        'baseUrl' => '@web',
			        'js' => [
				        'js/jquery.min.js',
			        ]
		        ]
	        ]
        ],
        'siteSettingsComponent' => [
	        'class' => 'frontend\components\SiteSettingsComponent'
        ],
    ],
    'modules' => [
	    'languages' => [
		    'class' => 'common\modules\languages\Module',  // custom
		    'languages' => [
			    'ge' => 'ge',
			    'en' => 'en',
			    'ru' => 'ru',
		    ],
		    'default_language' => 'ge',
		    'show_default' => false,
	    ],
    ],
    'params' => $params,
];
