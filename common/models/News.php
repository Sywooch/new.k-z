<?php

namespace common\models;

use Yii;

/**
 * This is the model class for table "news".
 *
 * @property string $id
 * @property integer $category
 * @property string $article
 * @property string $link
 * @property string $creator
 * @property string $text
 * @property integer $author
 * @property string $photo
 */
class News extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'news';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['category', 'title', 'link', 'author'], 'required'],
            [['category', 'author'], 'integer'],
            [['title', 'text', 'photo', 'creator'], 'string'],
            [['link'], 'string', 'max' => 128]
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'category' => 'Category',
            'title' => 'Title',
            'link' => 'Link',
            'text' => 'Text',
            'author' => 'Author',
            'photo' => 'Photo',
            'creator' => 'Creator',
        ];
    }
}
