<?php
/**
 * Created by PhpStorm.
 * User: bobroid
 * Date: 05.07.16
 * Time: 21:36
 */

namespace backend\modules\news\models;


use backend\models\News;
use yii\base\Model;

/**
 * @property string textParts
 * @property string textPreview
 * @property string textExtension
 */
class NewsForm extends Model{

    public $id = null;

    public $title;

    public $text;

    public $metaKeywords;

    public $metaDescription;

    public $category;

    public $favorite = 0;

    public $deleted = 0;

    public $published = 0;

    public function attributeLabels()
    {
        return [
            'title'         =>  'Заголовок',
            'text'          =>  'Текст',
            'metaKeywords'  =>  'Ключевые слова',
            'metaDescription' =>  'Мета-описание',
            'category'      =>  'Категория',
            'favorite'      =>  'Избранное',
            'deleted'       =>  'Удалено',
            'published'     =>  'Опубликовано',
        ];
    }

    public function getTextParts(){
        return explode('<hr>', $this->text);
    }

    public function setText($preview, $extension){
        $this->text = $preview.'<hr>'.$extension;
    }

    public function getTextPreview(){
        return array_key_exists(0, $this->textParts) ? $this->textParts[0] : '';
    }

    public function getTextExtension(){
        return array_key_exists(1, $this->textParts) ? $this->textParts[1] : '';
    }

    public function getKeywordsArray(){
        return explode(', ', $this->metaKeywords);
    }

    /**
     * @param News $news
     */
    public function setNews($news){
        $this->setAttributes([
            'id'            =>  $news->id,
            'title'         =>  $news->title,
            'metaKeywords'  =>  $news->meta_keywords,
            'metaDescription'=> $news->meta_description,
            'category'      =>  $news->categoryID,
            'favorite'      =>  $news->favorite,
            'published'     =>  $news->published,
            'deleted'       =>  $news->deleted
        ]);

        $this->setText($news->textPreview, $news->text);
    }

    public function save(){
        $news = new News();

        if(!empty($this->id)){
            $news = News::findOne($this->id);
        }

        $news->setAttributes([
            'title'         =>  $this->title,
            'metaKeywords'  =>  $this->metaKeywords,
            'metaDescription'=> $this->metaDescription,
            'category'      =>  $this->category,
            'favorite'      =>  $this->favorite,
            'published'     =>  $this->published,
            'deleted'       =>  $this->deleted,
            'textPreview'   =>  $this->textPreview,
            'text'          =>  $this->textExtension
        ]);

        return $news->save(false);
    }

    public function rules()
    {
        return [
            [['id', 'category', 'favorite', 'published', 'deleted'], 'integer'],
            [['title', 'metaKeywords'], 'string', 'max' => 255],
            [['text', 'metaDescription'], 'string']
        ];
    }
}