<?php

namespace frontend\models;

use Yii;

/**
 * This is the model class for table "Volunteer".
 *
 * @property integer $user_id
 * @property string $address
 * @property string $volunteer_experience
 * @property string $occupation
 * @property string $educational_attainment
 * @property string $availability
 * @property string $serve_more_than_one
 * @property string $driver_license
 * @property string $convicted
 * @property string $conviction_reason
 * @property string $physical_limitation
 * @property string $limitation_description
 */
class Volunteer extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'Volunteer';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['user_id'], 'required'],
            [['user_id'], 'integer'],
            [['address', 'availability', 'conviction_reason', 'limitation_description'], 'string', 'max' => 255],
            [['volunteer_experience', 'occupation', 'educational_attainment', 'serve_more_than_one', 'driver_license', 'convicted', 'physical_limitation'], 'string', 'max' => 45],
            [['user_id'], 'exist', 'skipOnError' => true, 'targetClass' => User::className(), 'targetAttribute' => ['user_id' => 'id']],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'user_id' => 'User ID',
            'address' => 'Address',
            'volunteer_experience' => 'Volunteer Experience',
            'occupation' => 'Occupation',
            'educational_attainment' => 'Educational Attainment',
            'availability' => 'Availability',
            'serve_more_than_one' => 'Serve More Than One',
            'driver_license' => 'Driver License',
            'convicted' => 'Convicted',
            'conviction_reason' => 'Conviction Reason',
            'physical_limitation' => 'Physical Limitation',
            'limitation_description' => 'Limitation Description',
        ];
    }
}
