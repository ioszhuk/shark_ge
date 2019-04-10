<?php

use frontend\widgets\MapWidget;

$this->title = Yii::t('app', 'cities__title');

?>

<?= $this->render('@frontend/views/components/_download-our-apps', ['showOnly' => 'clients']) ?>

<?= MapWidget::widget([
	'title' => Yii::t('app', 'cities_title')
]) ?>