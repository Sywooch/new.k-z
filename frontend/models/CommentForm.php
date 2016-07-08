<?php
/**
 * Created by PhpStorm.
 * User: bobroid
 * Date: 07.07.16
 * Time: 9:05
 */

namespace frontend\models;


use common\models\Comment;
use yii\base\Model;

class CommentForm extends Model
{

    public $name;

    public $email;

    public $comment;

    public $captcha;

    public $newsID;

    public function setNews($news){
        $this->setAttributes([
            'newsID'    =>  $news->id
        ], false);
    }
    
    public function save(){
        $comment = new Comment([
            'author'    =>  $this->name,
            'text'      =>  $this->comment,
            'ip'        =>  \Yii::$app->request->getUserIP(),
            'email'     =>  $this->email,
            'newsID'    =>  $this->newsID
        ]);

        if($this->validate()){
            return $comment->save(false);
        }else{
            return false;
        }
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