<?php

namespace common\models;

use Yii;

/**
 * This is the model class for table "categories".
 *
 * @property string $id
 * @property string $link
 * @property string $title
 * @property integer $parent
 * @property string $created
 * @property integer $created_user
 * @property string $meta_description
 * @property string $meta_keywords
 * @property integer $deleted
 * @property integer $published
 */
class Category extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'categories';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['link', 'created', 'created_user'], 'required'],
            [['title', 'meta_description', 'meta_keywords'], 'string'],
            [['parent', 'created_user', 'deleted', 'published'], 'integer'],
            [['created'], 'safe'],
            [['link'], 'string', 'max' => 255]
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'link' => 'Ссылка',
            'title' => 'Заголовок',
            'parent' => 'Родитель',
            'created' => 'Создано',
            'created_user' => 'Создатель',
            'meta_description' => 'Мета-описание',
            'meta_keywords' => 'Ключевые слова',
            'deleted' => 'Удалено',
            'published' => 'Опубликовано',
        ];
    }
}
