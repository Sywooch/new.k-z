<?php
/**
 * Created by PhpStorm.
 * User: bobroid
 * Date: 03.01.16
 * Time: 15:26
 */

namespace backend\models;


use yii\base\Model;

class LoginForm extends Model
{

    public $username;
    public $password;
    public $rememberMe;

    private $_user = false;

    public function rules()
    {
        return [
            // username and password are both required
            [['username', 'password'], 'required'],
            // rememberMe must be a boolean value
            ['rememberMe', 'boolean'],
            // password is validated by validatePassword()
            ['password', 'validatePassword'],
        ];
    }

    public function attributeLabels(){
        return [
            'username'  =>  'Логин',
            'password'  =>  'Пароль',
            'rememberMe'=>  'Не выходить'
        ];
    }

    public function validatePassword($attribute, $params = [])
    {
        if (!$this->hasErrors()) {
            $user = $this->getUser();

            if (!$user || !$user->validatePassword($this->password)) {
                $this->addError($attribute, 'Неправильный логин или пароль');
            }
        }
    }

    public function login(){
        if ($this->validate()) {
            return \Yii::$app->user->login($this->getUser(), $this->rememberMe ? 3600*24*30 : 0);
        }

        $this->addError('password', 'Неверный пароль!');
        return false;
    }

    public function getUser()
    {
        if ($this->_user === false) {
            $this->_user = User::findByUsername($this->username);
        }

        return $this->_user;
    }

}