<?php
namespace common\models;

use mohorev\file\UploadImageBehavior;
use Yii;
use yii\behaviors\TimestampBehavior;
use noIT\upload\UploadsBehavior;
use Imagine\Image\ManipulatorInterface;

/**
 * This is the model class for table "testimonial".
 *
 * @property int $id
 * @property string $name_ge
 * @property string $name_en
 * @property string $name_ru
 * @property string $avatar
 * @property string $body_ge
 * @property string $body_en
 * @property string $body_ru
 * @property int $status
 * @property int $created_at
 * @property int $updated_at
 */
class Testimonial extends \yii\db\ActiveRecord
{
	const DISABLE = 0;
	const ENABLE = 10;

    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'testimonial';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['name_ge', 'name_en', 'name_ru', 'status'], 'required'],
            [['body_ge', 'body_en', 'body_ru'], 'string'],
            [['status', 'created_at', 'updated_at'], 'integer'],
            [['name_ge', 'name_en', 'name_ru'], 'string', 'max' => 255],

	        [['avatar'], 'image', 'extensions' => 'jpeg, jpg, png'],
	        [['avatar'], 'image', 'skipOnEmpty' => false, 'on' => ['default']],
	        [['avatar'], 'image', 'skipOnEmpty' => true, 'on' => ['update']],
        ];
    }

	public function behaviors()
	{
		return [
			'timestamp' => [
				'class' => TimestampBehavior::className(),
			],
			'imageUploads' => [
				'class' => UploadsBehavior::className(),
				'attributes' => [
					'avatar' => [
						'class' => UploadImageBehavior::className(),
						'createThumbsOnSave' => true,
						'createThumbsOnRequest' => true,
						'generateNewName' => true,
						'thumbs' => [
							'thumb' => [
								'width' => 120,
								'height' => 120,
								'quality' => 90,
								'mode' => ManipulatorInterface::THUMBNAIL_OUTBOUND
							],
						],
						'attribute' => 'avatar',
						'scenarios' => ['default', 'update'],
						'path' => '@cdn/testimonials/{id}',
						'url' => '@cdnUrl/testimonials/{id}',
					],
				],
			],
		];
	}

}
