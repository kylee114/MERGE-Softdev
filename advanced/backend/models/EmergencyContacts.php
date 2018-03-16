<?php

namespace backend\models;

use Yii;

/**
 * This is the model class for table "emergency_contacts".
 *
 * @property integer $id
 * @property string $name
 * @property string $relationship_with_person
 * @property string $phone_number
 * @property integer $volunteer_user_id
 *
 * @property Volunteer $volunteerUser
 */
class EmergencyContacts extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'emergency_contacts';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['volunteer_user_id'], 'required'],
            [['volunteer_user_id'], 'integer'],
            [['name', 'relationship_with_person'], 'string', 'max' => 45],
            [['phone_number'], 'string', 'max' => 11],
            [['volunteer_user_id'], 'exist', 'skipOnError' => true, 'targetClass' => Volunteer::className(), 'targetAttribute' => ['volunteer_user_id' => 'user_id']],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'name' => 'Name',
            'relationship_with_person' => 'Relationship With Person',
            'phone_number' => 'Phone Number',
            'volunteer_user_id' => 'Volunteer User ID',
        ];
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getVolunteerUser()
    {
        return $this->hasOne(Volunteer::className(), ['user_id' => 'volunteer_user_id']);
    }
}
