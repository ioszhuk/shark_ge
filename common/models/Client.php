<?php

namespace common\models;

use Yii;
use mohorev\file\UploadImageBehavior;
use yii\behaviors\TimestampBehavior;
use noIT\upload\UploadsBehavior;
use Imagine\Image\ManipulatorInterface;

/**
 * This is the model class for table "client".
 *
 * @property int $id
 * @property string $position
 * @property string $name_ge
 * @property string $name_en
 * @property string $name_ru
 * @property string $image_ge
 * @property string $image_en
 * @property string $image_ru
 * @property string $body_ge
 * @property string $body_en
 * @property string $body_ru
 * @property int $sort_order
 * @property int $created_at
 * @property int $updated_at
 */
class Client extends \yii\db\ActiveRecord
{
	const DISABLE = 0;
	const ENABLE = 10;

    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'client';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['position', 'sort_order'], 'required'],
            [['body_ge', 'body_en', 'body_ru'], 'string'],
            [['sort_order', 'created_at', 'updated_at'], 'integer'],
            [['position'], 'string', 'max' => 50],
            [['name_ge', 'name_en', 'name_ru', ], 'string', 'max' => 255],

	        [['image_ge', 'image_en', 'image_ru'], 'image', 'extensions' => 'jpeg, jpg, png'],
	        [['image_ge', 'image_en', 'image_ru'], 'image', 'skipOnEmpty' => false, 'on' => ['default']],
	        [['image_ge', 'image_en', 'image_ru'], 'image', 'skipOnEmpty' => true, 'on' => ['update']],
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
					'image_ge' => [
						'class' => UploadImageBehavior::className(),
						'createThumbsOnSave' => true,
						'createThumbsOnRequest' => true,
						'generateNewName' => true,
						'thumbs' => [
							'thumb' => [
								'width' => 290,
								'height' => 483,
								'quality' => 90,
								'mode' => ManipulatorInterface::THUMBNAIL_OUTBOUND
							],
						],
						'attribute' => 'image_ge',
						'scenarios' => ['default', 'update'],
						'path' => '@cdn/clients/{id}',
						'url' => '@cdnUrl/clients/{id}',
					],
					'image_en' => [
						'class' => UploadImageBehavior::className(),
						'createThumbsOnSave' => true,
						'createThumbsOnRequest' => true,
						'generateNewName' => true,
						'thumbs' => [
							'thumb' => [
								'width' => 290,
								'height' => 483,
								'quality' => 90,
								'mode' => ManipulatorInterface::THUMBNAIL_OUTBOUND
							],
						],
						'attribute' => 'image_en',
						'scenarios' => ['default', 'update'],
						'path' => '@cdn/clients/{id}',
						'url' => '@cdnUrl/clients/{id}',
					],
					'image_ru' => [
						'class' => UploadImageBehavior::className(),
						'createThumbsOnSave' => true,
						'createThumbsOnRequest' => true,
						'generateNewName' => true,
						'thumbs' => [
							'thumb' => [
								'width' => 290,
								'height' => 483,
								'quality' => 90,
								'mode' => ManipulatorInterface::THUMBNAIL_OUTBOUND
							],
						],
						'attribute' => 'image_ru',
						'scenarios' => ['default', 'update'],
						'path' => '@cdn/clients/{id}',
						'url' => '@cdnUrl/clients/{id}',
					],
				],
			],

		];
	}

}
