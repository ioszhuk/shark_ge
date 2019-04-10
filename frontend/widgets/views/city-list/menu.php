<?php

use yii\helpers\Url;

?>
<?php if(!empty($model)) : ?>
    <ul>
		<?php foreach($model as $item) : ?>
            <li>
                <a href="<?= Url::to(['city/view', 'slug' => $item['slug']]) ?>"><?= Yii::t('app', $item['anchor']) ?></a>
            </li>
		<?php endforeach ?>
    </ul>
<?php endif ?>