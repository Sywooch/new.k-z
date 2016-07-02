<?php
/**
 * Created by PhpStorm.
 * User: bobroid
 * Date: 02.07.16
 * Time: 19:45
 */

namespace frontend\widgets;


use frontend\models\News;
use yii\base\Widget;
use yii\helpers\Html;

class LastNewsWidget extends Widget
{

    public $category = null;
    public $orderBy = 'publishTimestamp DESC';
    public $title = 'Последние новости';
    public $limit = 9;

    public $titleLength = 28;

    private function getNews(){
        $news = News::find();

        if(!empty($this->category)){
            $news->andWhere(['categoryID' => $this->category]);
        }

        if(!empty($this->orderBy)){
            $news->orderBy($this->orderBy);
        }

        if(!empty($this->orderBy)){
            $news->limit($this->limit);
        }

        return $news->with('category')->all();
    }

    public function run(){
        $renderedNews = [];

        foreach($this->getNews() as $news){
            $renderedNews[] = $this->renderNews($news);
        }

        $renderedNews = implode('', $renderedNews);


    return "<div class=\"box nsp grey andrylik\">
                <div>
                    <h3 class=\"header\">
                        <span>{$this->title}</span>
                    </h3>
                    <div class=\"content\">
                        <div class=\"nspMain nspFs100 activated\" id=\"nsp - nsp_216\" style=\"width:100 %;\">
                            <div class=\"nspArts bottom\" style=\"width:100 %;\">
                                <div style=\"width: 256px; overflow: hidden;\" class=\"nspArtScroll1\">
                                    <div style=\"width: 100000px;\" class=\"nspArtScroll2\">
                                        <div style=\"width: 256px; float: left;\" class=\"nspArtPage\">
                                            {$renderedNews}
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>";
    }

    /**
     * @param News $news
     * @return string
     */
    public function renderNews($news){
        return Html::tag('div',
            Html::tag('div',
                Html::tag('p', \Yii::$app->formatter->asDatetime($news->publishDate, 'php:d.m.Y H:i'), ['class' => 'nspInfo tleft fnone']).
                Html::tag('h4',
                    Html::a($news->getTitle($this->titleLength), $news->fullLink),
                    [
                        'class' =>  'nspHeader tleft fnone'
                    ]),
                [
                    'style' =>  'padding: 0'
                ]),
            [
                'class' =>  'nspArt',
                'style' =>  'width: 100% !important;'
            ]);
    }

}