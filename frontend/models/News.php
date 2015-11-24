<?php
/**
 * Created by PhpStorm.
 * User: bobroid
 * Date: 24.11.15
 * Time: 20:56
 */

namespace frontend\models;


class News extends \common\models\News
{

    public static function getVideo(){
        return self::getNews()
            ->andWhere(['a.category' => 'video'])
            ->asArray()
            ->limit(1)
            ->orderBy('publish_date desc')
            ->one();
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