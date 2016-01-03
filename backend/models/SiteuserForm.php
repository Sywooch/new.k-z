<?php
/**
 * Created by PhpStorm.
 * User: bobroid
 * Date: 03.01.16
 * Time: 16:41
 */

namespace backend\models;


use yii\base\Model;

class SiteuserForm extends Model
{

    public $username;
    public $password;
    public $email;

    public function rules(){
        return [
            [['username', 'password', 'email'], 'safe']
        ];
    }


    public function create(){
        if($this->validate() == false){
            return false;
        }

        $siteuser = new Siteuser();

        $siteuser->username = $this->username;
        $siteuser->email = $this->email;
        $siteuser->setPassword($this->password);

        return $siteuser->save(false);
    }

}