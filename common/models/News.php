<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "news".
 *
 * @property string $id
 * @property integer $category
 * @property string $article
 * @property string $link
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
            [['title', 'text', 'photo'], 'string'],
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
        ];
    }

    public static function getVideo(){
        $a = self::getNews();
        $a->andWhere(['a.category' => 'video']);
        $a = $a->asArray()->limit(1)->orderBy('publish_date desc')->one();
        return $a;
    }

    public static function getNews(){
        return News::find()->
        select(['a.*', 'b.link as categorylink'])->
        from([News::tableName().' `a`', Category::tableName().' `b`'])->
        where('a.category = b.id')->
        andWhere(['a.published' => '1', 'b.published' => '1']);
    }

    public static function getCommented($count = 5){
        return News::getNews()->andWhere('a.favorite = 1')->asArray()->limit($count)->orderBy('a.hits DESC')->all();
    }

    public static function getTopByCategory($category, $count = 3, $export = false){
        $news = News::getNews()->andWhere(['a.category' => $category])->limit($count)->orderBy('a.publish_date DESC');

        if(!$export){
            return $news->asArray()->all();
        }else{
            return $news;
        }
    }

    public static function getBottomTop($category, $count = 3){
        $page = preg_replace('/\D+/', '', \Yii::$app->request->get('page'));
        $perpage = preg_replace('/\D+/', '', \Yii::$app->request->get('per-page'));

        $page = $page == '' ? 1 : $page;
        $perpage = $perpage == '' ? 5 : $perpage;

        $offset = $page * $perpage;

        return News::getTopByCategory($category, $count, true)->limit($count)->offset($offset)->asArray()->all();
    }

    public static function getTop($count = 10){
        return News::getNews()->asArray()->limit($count)->
        orderBy('a.publish_date desc')->all();
    }

    public static function getRand($count){
        return News::getNews()->limit($count)->orderBy('RAND()')->asArray()->all();
    }
}
