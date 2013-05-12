<?php

class UserIdentity extends CUserIdentity
{

    private $_id;

    public function authenticate()
    {
        $user = User::model()->findByAttributes(array(
            'email'=>$this->username));
        if ($user === null) {
            // No user found!
            $this->errorCode=self::ERROR_USERNAME_INVALID;
        } else if ($user->password !==
            hash_hmac('sha256', $this->password,
                Yii::app()->params['encryptionKey']) ) {
            // Invalid password!
            $this->errorCode=self::ERROR_PASSWORD_INVALID;
        } else { // Okay!
            $this->errorCode=self::ERROR_NONE;
            $this->_id = $user->id;
            $mama='mama';
            Yii::app()->session->add('LeSession',$this->_id);
        }
        return !$this->errorCode;
    }

    public function getId() {
        return $this->_id;
    }


}