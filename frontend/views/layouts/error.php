<?php

/* @var $this \yii\web\View */
/* @var $content string */

use yii\helpers\Html;
use frontend\assets\AppAsset;

AppAsset::register($this);
?>
<?php $this->beginPage() ?>
<!DOCTYPE html>
<html lang="<?= Yii::$app->language ?>">
<head>
	<meta charset="<?= Yii::$app->charset ?>">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<?= Html::csrfMetaTags() ?>
	<title><?= Html::encode($this->title) ?></title>
    <link rel="shortcut icon" href="/favicon.ico">
    <link rel="alternate" hreflang="ru-UA" href="https://shark-taxi.ge">
    <link rel="alternate" hreflang="en-UA" href="https://shark-taxi.ge/en">
    <link rel="alternate" hreflang="uk-UA" href="https://shark-taxi.ge/ru">
    <meta property="og:title" content="Shark Taxi ">
    <meta property="og:description" content="Taxi service">
    <meta property="og:image" content="https://shark-taxi.ge/image/yellow-logo-shark.png">
    <meta name="apple-itunes-app" content="app-id=779587448">
	<?php $this->head() ?>
</head>

<body>
<?php $this->beginBody() ?>
<img src="/image/yellow-logo-shark.png" style="display:none;">

<div class="wrap">
	<div class="container">
		<?= $content ?>
	</div>
</div>

<?php $this->endBody() ?>
</body>
</html>
<?php $this->endPage() ?>