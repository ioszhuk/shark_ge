<?php
namespace common\models;

use yii\behaviors\SluggableBehavior;
use yii\behaviors\TimestampBehavior;

/**
 * This is the model class for table "city".
 *
 * @property int $id
 * @property string $name_ge
 * @property string $name_en
 * @property string $name_ru
 * @property string $slug
 * @property string $anchor
 * @property string $body_ge
 * @property string $body_en
 * @property string $body_ru
 * @property string $seo_title_ge
 * @property string $seo_title_en
 * @property string $seo_title_ru
 * @property string $seo_description_ge
 * @property string $seo_description_en
 * @property string $seo_description_ru
 * @property int $status
 * @property int $created_at
 * @property int $updated_at
 */

class City extends \yii\db\ActiveRecord
{
	const DISABLE = 0;
	const ENABLE = 10;

    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'city';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['name_ge', 'name_en', 'name_ru', 'status', 'anchor'], 'required'],
            [['body_ge', 'body_en', 'body_ru'], 'string'],
            [['status', 'created_at', 'updated_at'], 'integer'],
            [['name_ge', 'name_en', 'name_ru', 'slug', 'anchor'], 'string', 'max' => 255],
	        [['seo_title_ge', 'seo_title_en', 'seo_title_ru', 'seo_description_ge', 'seo_description_en',
		        'seo_description_ru'], 'string', 'max' => 255]
        ];
    }

	public function behaviors()
	{
		return [
			'timestamp' => [
				'class' => TimestampBehavior::className(),
			],
			'slug' => [
				'class' => SluggableBehavior::className(),
				'attribute' => 'name_en',
				'immutable' => true,
			],
		];
	}

}
