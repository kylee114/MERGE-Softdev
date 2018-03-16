<?php
namespace frontend\models;

use yii\base\Model;
use common\models\User;

/**
 * Signup form
 */
class SignupForm extends Model
{
    public $first_name;
    public $middle_name;
    public $last_name;
    public $age;
    public $phone_number;
    public $username;
    public $email;
    public $password;
    public $gender;
    public $birthday;
    public $address;
    public $user_type;

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            ['username', 'filter', 'filter' => 'trim'],
            ['first_name', 'required'],
            ['middle_name', 'required'],
            ['last_name', 'required'],
            ['username', 'required'],
            ['username', 'unique', 'targetClass' => '\common\models\User', 'message' => 'This username has already been taken.'],
            ['username', 'string', 'min' => 2, 'max' => 255],
            ['gender', 'required'],
            ['birthday', 'required'],
            ['birthday', 'date', 'format' => 'M/d/yyyy'],
            ['age', 'required'],
            ['phone_number', 'required'],
            ['phone_number', 'string', 'max' => 11, 'message' => 'Phone number should not exceed 11 characters'],
            ['address', 'required'],

            ['email', 'filter', 'filter' => 'trim'],
            ['email', 'required'],
            ['email', 'email'],
            ['email', 'string', 'max' => 255],
            ['email', 'unique', 'targetClass' => '\common\models\User', 'message' => 'This email address has already been taken.'],

            ['password', 'required'],
            ['password', 'string', 'min' => 6],
        ];
    }

    /**
     * Signs user up.
     *
     * @return User|null the saved model or null if saving fails
     */
    public function signup()
    {
        if (!$this->validate()) {
            return null;
        }
        
        $user = new User();
        $user->first_name = $this->first_name;
        $user->middle_name = $this->middle_name;
        $user->last_name = $this->last_name;
        $user->username = $this->username;
        $user->gender = $this->gender;
        $user->birthday = $this->birthday;
        $user->age = $this->age;
        $user->phone_number = $this->phone_number;
        $user->address = $this->address;
        $user->email = $this->email;
        $user->setPassword($this->password);
        $user->generateAuthKey();
        $user->user_type = 'regular';
        
        return $user->save() ? $user : null;
    }
}
