<?php

namespace backend\models;

use Yii;

/**
 * This is the model class for table "user".
 *
 * @property integer $id
 * @property string $first_name
 * @property string $middle_name
 * @property string $last_name
 * @property string $username
 * @property string $gender
 * @property string $birthday
 * @property integer $age
 * @property integer $phone_number
 * @property string $address
 * @property string $email
 * @property string $auth_key
 * @property string $password_hash
 * @property string $password_reset_token
 * @property integer $status
 * @property integer $created_at
 * @property integer $updated_at
 * @property string $user_type
 *
 * @property DeadPeople[] $deadPeoples
 * @property MissingPeople[] $missingPeoples
 * @property Volunteer $volunteer
 */
class User extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'user';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['age', 'phone_number', 'status', 'created_at', 'updated_at'], 'integer'],
            [['user_type'], 'string'],
            [['first_name', 'middle_name', 'last_name', 'gender', 'birthday'], 'string', 'max' => 45],
            [['username', 'address', 'email', 'password_hash', 'password_reset_token'], 'string', 'max' => 255],
            [['auth_key'], 'string', 'max' => 32],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'first_name' => 'First Name',
            'middle_name' => 'Middle Name',
            'last_name' => 'Last Name',
            'username' => 'Username',
            'gender' => 'Gender',
            'birthday' => 'Birthday',
            'age' => 'Age',
            'phone_number' => 'Phone Number',
            'address' => 'Address',
            'email' => 'Email',
            'auth_key' => 'Auth Key',
            'password_hash' => 'Password Hash',
            'password_reset_token' => 'Password Reset Token',
            'status' => 'Status',
            'created_at' => 'Created At',
            'updated_at' => 'Updated At',
            'user_type' => 'User Type',
        ];
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getDeadPeoples()
    {
        return $this->hasMany(DeadPeople::className(), ['user_id' => 'id']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getMissingPeoples()
    {
        return $this->hasMany(MissingPeople::className(), ['user_id' => 'id']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getVolunteer()
    {
        return $this->hasOne(Volunteer::className(), ['user_id' => 'id']);
    }
}
