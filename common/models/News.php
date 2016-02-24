<?php

namespace common\models;

use Yii;

/**
 * This is the model class for table "news".
 *
 * @property string $id
 * @property string $author
 * @property string $title
 * @property string $text
 * @property string $link
 * @property string $image
 * @property integer $published
 * @property integer $deleted
 * @property string $publishDate
 * @property integer $favorite
 * @property string $hits
 * @property string $meta_description
 * @property string $meta_keywords
 * @property integer $category
 * @property string $unpublishDate
 * @property string $checkedDate
 * @property integer $checked
 * @property integer $creator
 * @property string $textPreview
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
            [['title', 'text', 'meta_description', 'meta_keywords', 'textPreview'], 'string'],
            [['published', 'deleted', 'favorite', 'hits', 'category', 'checked', 'creator'], 'integer'],
            [['publishDate', 'unpublishDate', 'checkedDate'], 'safe'],
            [['author', 'link', 'image'], 'string', 'max' => 255]
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'id' => Yii::t('common', 'ID'),
            'author' => Yii::t('common', 'Author'),
            'title' => Yii::t('common', 'Title'),
            'text' => Yii::t('common', 'Text'),
            'link' => Yii::t('common', 'Link'),
            'image' => Yii::t('common', 'Image'),
            'published' => Yii::t('common', 'Published'),
            'deleted' => Yii::t('common', 'Deleted'),
            'publishDate' => Yii::t('common', 'Publish Date'),
            'favorite' => Yii::t('common', 'Favorite'),
            'hits' => Yii::t('common', 'Hits'),
            'meta_description' => Yii::t('common', 'Meta Description'),
            'meta_keywords' => Yii::t('common', 'Meta Keywords'),
            'category' => Yii::t('common', 'Category'),
            'unpublishDate' => Yii::t('common', 'Unpublish Date'),
            'checkedDate' => Yii::t('common', 'Checked Date'),
            'checked' => Yii::t('common', 'Checked'),
            'creator' => Yii::t('common', 'Creator'),
            'textPreview' => Yii::t('common', 'Text Preview'),
        ];
    }
}
