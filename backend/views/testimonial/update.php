<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model backend\models\Testimonial */

$__params = require __DIR__ .'/__params.php';

$this->title = $model->name_ge;

$this->params['breadcrumbs'][] = ['label' => $__params['items'], 'url' => ['testimonial/index']];
$this->params['breadcrumbs'][] = ['label' => $__params['update'], 'url' => ['testimonial/update', 'id' => $model->id]];

?>
<div class="custom-form-section">
    <div class="custom-form-section-box">

		<?= $this->render('_form', [
			'model' => $model,
		]) ?>

    </div>
</div>