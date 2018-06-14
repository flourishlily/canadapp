<?php

namespace frontend\models;

use Yii;
use yii\base\Model;
use common\models\User; 

/**
 * LoginForm is the model behind the login form.
 */
class ChgPwdForm extends Model
{
	public $old_password;
	public $new_password;
        public $new_password_repeat;

	/**
	 * @return array the validation rules.
	 */
	public function rules()
	{
		return [
			['old_password', 'validatePassword','message' => 'Wrong Password'],
                        ['new_password', 'required'],
                        ['new_password', 'string', 'min' => 6,'max' => 10],

                        ['new_password_repeat', 'required'],
                        ['new_password_repeat', 'string', 'min' => 6,'max' => 10],
                        ['new_password_repeat','compare','compareAttribute'=>'new_password'],                    
		];
	}


	public function validatePassword()
	{
            $var = Yii::$app->user->identity->username;
            $user = (new User())->findByUsername($var);
            return $user->validatePassword($this->old_password);
	}      
        
    public function changePassword(){
        $var = Yii::$app->user->identity->username;
        $user = (new User())->findByUsername($var);
        if($user->validatePassword($this->old_password)){
            if($this->new_password == $this->new_password_repeat){
                $user->setPassword($this->new_password);
                $user->save();
                return true;
            }else{
                Yii::$app->session->setFlash('contact','should repeat new password');
                return false;
            }
        }else{
            Yii::$app->session->setFlash('contact','wrong old password');
            return false;
        }
    }
}
