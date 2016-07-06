<?php

namespace common\models;

use Yii;

/**
 * This is the model class for table "comments".
 *
 * @property integer $id
 * @property string $author
 * @property string $authorName
 * @property string $text
 * @property integer $published
 * @property string $date
 * @property integer $ip
 * @property integer $newsID
 */
class Comment extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'comments';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['text'], 'string'],
            [['published', 'ip', 'newsID'], 'integer'],
            [['date'], 'safe'],
            [['author'], 'string', 'max' => 96],
            [['authorName'], 'string', 'max' => 64],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'author' => 'Author',
            'authorName' => 'Author Name',
            'text' => 'Text',
            'published' => 'Published',
            'date' => 'Date',
            'ip' => 'Ip',
            'newsID' => 'News ID',
        ];
    }
}
