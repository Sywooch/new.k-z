<?php
/**
 * Created by PhpStorm.
 * User: bobroid
 * Date: 24.11.15
 * Time: 20:56
 */

namespace frontend\models;
use backend\models\Siteuser;
use yii\db\ActiveQuery;


/**
 * @property string categorylink
 * @property string fullLink
 * @property Siteuser author
 * @property string imagePreview
 */
class News extends \common\models\News
{


    /**
     * @return ActiveQuery
     */
    public static function find(){
        return parent::find()->andWhere(['published' => 1, 'deleted' => 0]);
    }

    /**
     * @param int $count
     * @return News[]
     */
    public static function getPopular($count = 10){
        return self::find()
            ->with('category')
            ->where(['favorite' => 1])
            ->orderBy('hits DESC')
            //->limit($count)
            ->all();
    }

    /**
     * @param int $count
     * @return News[]
     */
    public static function getTop($count = 10){
        return self::find()
            ->with('category')
            ->orderBy('publishTimestamp DESC')
            ->limit($count)
            ->all();
    }
    /**
     * @param int $count
     * @return News[]
     */
    public static function getFavorite($count){
        return self::find()
            ->with('category')
            ->andWhere(['favorite'  =>  1])
            ->orderBy('publishTimestamp DESC')
            ->limit($count)
            ->all();
    }

    /**
     * @return ActiveQuery
     */
    public function getCategory(){
        return $this->hasOne(Category::className(), ['id' => 'categoryID']);
    }

    /**
     * @return ActiveQuery
     */
    public function getAuthor(){
        return $this->hasOne(Siteuser::className(), ['id' => 'creator']);
    }

    /**
     * @return string
     */
    public function getCategoryLink(){
        return $this->category->link;
    }

    /**
     * @return string
     */
    public function getFullLink(){
        return "/{$this->categorylink}/{$this->id}-{$this->link}";
    }

    /**
     * @return string
     */
    public function getImagePreview(){
        $image = '';
        
        preg_match('/(img|src)=("|\')[^"\'>]+/i', $this->textPreview, $media);
        
        if(sizeof($media) >= 1){
            $image = preg_replace('/src="/', '', $media['0']);
        }

        return preg_match('/^http/', $image) ? $image : \Yii::$app->params['cdn'].$image;
    }

    /**
     * @param int $len
     * @return string
     */
    public function getTitle($len = 0){
        if($len == 0){
            return $this->title;
        }

        return strlen($this->title) > $len ? trim(mb_substr($this->title, 0, $len, 'UTF-8')).'…' : $this->title;
    }

    /**
     * @param int $len
     * @return string
     */
    public function getTextPreview($len = 0){
        $preview = strip_tags($this->textPreview);
        
        if($len == 0){
            return $preview;
        }

        return strlen($preview) > $len ? trim(mb_substr($preview, 0, $len, 'UTF-8')).'…' : $preview;
    }

    public static function getNews(){
        return self::find()->
        select(['a.*', 'b.link as categorylink'])->
        from([News::tableName().' `a`', Category::tableName().' `b`'])->
        where('a.categoryID = b.id')->
        andWhere(['a.published' => '1', 'b.published' => '1']);
    }

    public static function getCommented($count = 5){
        return News::getNews()->andWhere('a.favorite = 1')->asArray()->limit($count)->orderBy('a.hits DESC')->all();
    }

    public static function getTopByCategory($category, $count = 3, $export = false){
        $news = News::getNews()->andWhere(['a.categoryID' => $category])->limit($count)->orderBy('a.publishDate DESC');

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

    public static function getRand($count){
        return News::getNews()->limit($count)->orderBy('RAND()')->asArray()->all();
    }

    public static function getVideo(){
        return self::getNews()
            ->andWhere(['a.categoryID' => 'video'])
            ->asArray()
            ->limit(1)
            ->orderBy('publishDate desc')
            ->one();
    }
}