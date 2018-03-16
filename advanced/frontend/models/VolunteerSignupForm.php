<?php
namespace frontend\models;

use yii\base\Model;
use yii\db\ActiveRecord;
use common\models\Volunteer;


/**
 * Signup form
 */
class VolunteerSignupForm extends Model
{
    public $volunteer_experience;
    public $occupation;
    public $educational_attainment;
    public $availability;
    public $serve_many_people;
    public $driver_license;
    public $convicted;
    public $conviction_reason;
    public $physical_limitation;
    public $user_id;
    

    /**
     * @inheritdoc 
     */
    public function rules()
    {
        return [

            ['volunteer_experience', 'required', 'message' => 'This field cannot be blank.'],
            ['occupation', 'required', 'message' => 'This field cannot be blank.'],
            ['educational_attainment', 'required', 'message' => 'This field cannot be blank.'],
            ['availability', 'required', 'message' => 'This field cannot be blank.'],
            ['serve_many_people', 'required', 'message' => 'This field cannot be blank.'],
            ['driver_license', 'required', 'message' => 'This field cannot be blank.'],
            ['convicted', 'required', 'message' => 'This field cannot be blank.'],
            ['physical_limitation', 'required', 'message' => 'This field cannot be blank.'],

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
        
        $user = new Volunteer();
        $user->user_id = 1;
        $user->volunteer_experience = $this->volunteer_experience;
        $user->occupation = $this->occupation;
        $user->educational_attainment = $this->educational_attainment;
        $user->availability = $this->availability;
        $user->serve_more_than_one = $this->serve_many_people;
        $user->driver_license = $this->driver_license;
        $user->convicted = $this->convicted;
        $user->physical_limitation = $this->physical_limitation;
        
        return $user->save() ? $user : null;
    }
}