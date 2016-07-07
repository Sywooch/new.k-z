<?php
/**
 * Created by PhpStorm.
 * User: bobroid
 * Date: 07.07.16
 * Time: 9:05
 */

namespace frontend\models;


use yii\base\Model;

class CommentForm extends Model
{

    public $name;

    public $email;

    public $comment;

    public $captcha;
    
    public function save(){
        
    }

    public function attributeLabels()
    {
        return [
            'name'      =>  'Имя',
            'email'     =>  'E-mail',
            'comment'   =>  'Комментарий',
            'captcha'   =>  'Проверочный код'
        ];
    }

    public function rules()
    {
        return [
            [['name', 'email', 'comment', 'captcha'], 'required'],
            [['name', 'comment'], 'string'],
            [['email'], 'email'],
            ['captcha', 'captcha']
        ];
    }

}