<?php
/**
 * Created by PhpStorm.
 * User: bobroid
 * Date: 03.01.16
 * Time: 15:32
 */

namespace backend\models;


use yii\web\IdentityInterface;

class User extends Siteuser implements IdentityInterface
{
    public static function findIdentity($id){
        return static::findOne($id);
    }

    public static function findIdentityByAccessToken($token, $type = null){
        return static::findOne(['auth_key' => $token]);
    }

    public static function findByUsername($username){
        return static::findOne(['username' => $username]);
    }

    public function getId(){
        return $this->getPrimaryKey();
    }

    public function getAuthKey(){
        return $this->auth_key;
    }

    public function validateAuthKey($authKey){
        return $this->getAuthKey() === $authKey;
    }

    public function validatePassword($password){
        return $this->password_hash === hash("sha512", $password, false);
    }

}