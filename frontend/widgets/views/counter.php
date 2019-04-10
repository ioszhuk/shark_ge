<?php

/**
 * @var $this \yii\web\View
 * @var $model \common\models\settings\CounterSettings
 */

?>
<div class="driver-info-culc">
	<p><span> <?= $model['days'] ?> </span><br> <?= Yii::t('app', 'calculator__day') ?></p>
	<p><span> <?= $model['trips'] ?> </span><br> <?= Yii::t('app', 'calculator__drives') ?></p>
	<p><span> <?= $model['customers'] ?> </span><br> <?= Yii::t('app', 'calculator__clients') ?> </p>
	<p><span> <?= $model['drivers'] ?> </span><br> <?= Yii::t('app', 'calculator__drivers') ?> </p>
</div>