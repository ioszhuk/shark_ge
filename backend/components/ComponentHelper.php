<?php
namespace backend\components;

class ComponentHelper extends \yii\base\Component
{
	public function getSortOrderRange()
	{
		$range = [];

		for($i = 1; $i < 101; $i++) {
			$range[$i] = [ 'value' => $i, 'label' => $i ];
		}

		return $range;
	}

}