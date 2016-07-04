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
 * @property integer $categoryID
 * @property string $unpublishDate
 * @property string $checkedDate
 * @property integer $checked
 * @property integer $creator
 * @property string $textPreview
 * @property Category $category
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
            [['published', 'deleted', 'favorite', 'hits', 'categoryID', 'checked', 'creator'], 'integer'],
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
            'id'                => 'ID',
            'author'            => 'Автор',
            'title'             => 'Заголовок',
            'text'              => 'Текст',
            'link'              => 'Ссылка',
            'image'             => 'Изображение превью',
            'published'         => 'Опубликовано',
            'deleted'           => 'Удалено',
            'publishDate'       => 'Дата публикации',
            'favorite'          => 'В избранном',
            'hits'              => 'Просмотров',
            'meta_description'  => 'Мета-описание',
            'meta_keywords'     => 'Кючевые слова',
            'categoryID'        => 'Категория',
            'unpublishDate'     => 'Дата отключения',
            'checkedDate'       => 'Дата проверки',
            'checked'           => 'Проверено',
            'creator'           => 'Создатель',
            'textPreview'       => 'Текст-превью',
        ];
    }
}
