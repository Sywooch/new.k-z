<?php

namespace frontend\modules\rss\controllers;

use frontend\models\NewsFeed;
use yii\data\ActiveDataProvider;
use yii\helpers\StringHelper;
use yii\helpers\Url;
use yii\web\Controller;
use yii\web\NotFoundHttpException;
use Zelenin\yii\extensions\Rss\RssView;

/**
 * Default controller for the `rss` module
 */
class DefaultController extends Controller
{
    /**
     * Renders the index view for the module
     * @return string
     */
    public function actionIndex()
    {
        return $this->render('index', [
            'dataProvider'  =>  new ActiveDataProvider([
                'query' =>  NewsFeed::find()->where(['published' => 1]),
            ])
        ]);
    }

    public function actionFeed($id, $link){
        $newsFeed = NewsFeed::findOne(['id' => $id]);

        if(!$newsFeed){
            throw new NotFoundHttpException();
        }

        if($newsFeed->link != $link){
            $this->redirect(['/rss/'.$newsFeed->fullLink]);
        }

        $response = \Yii::$app->getResponse();
        $headers = $response->getHeaders();

        $headers->set('Content-Type', 'application/rss+xml; charset=utf-8');

        echo RssView::widget([
            'dataProvider'  => new ActiveDataProvider([
                'query' =>  $newsFeed->getNews(),
                'sort'  =>  [
                    'defaultOrder'  =>  [
                        'publishTimestamp'  =>  SORT_DESC
                    ]
                ],
                'pagination'    =>  [
                    'pageSize'  =>  array_key_exists('feedLength', $newsFeed->params) ? $newsFeed->params['feedLength'] : 30
                ]
            ]),
            'channel'       => [
                'title' => function ($widget, \Zelenin\Feed $feed) use(&$newsFeed){
                    $feed->addChannelTitle($newsFeed->name);
                },
                'link' => Url::toRoute('/', true),
                'description' => $newsFeed->description,
                'language' => function ($widget, \Zelenin\Feed $feed) {
                    return \Yii::$app->language;
                },
                'image'=> function ($widget, \Zelenin\Feed $feed) use(&$newsFeed){
                    $feed->addChannelImage('http://k-z.com.ua/images/'.(array_key_exists('image', $newsFeed->params) ? $newsFeed->params['image'] : 'logo1.png'), 'http://k-z.com.ua', 88, 31, $newsFeed->description);
                },
            ],
            'items' => [
                'title' => function ($model, $widget, \Zelenin\Feed $feed) {
                    return $model->title;
                },
                'description' => function ($model, $widget, \Zelenin\Feed $feed) use(&$newsFeed) {
                    $text = $model->textPreview;

                    if(array_key_exists('hideImages', $newsFeed->params) && $newsFeed->params['hideImages'] == 1){
                        $text = strip_tags($text, '<a></a><p></p>');
                    }

                    return StringHelper::truncateWords($text, 50);
                },
                'link' => function ($model, $widget, \Zelenin\Feed $feed) {
                    return Url::toRoute([$model->fullLink], true);
                },
                'author' => function ($model, $widget, \Zelenin\Feed $feed) {
                    return $model->author;
                },
                'guid' => function ($model, $widget, \Zelenin\Feed $feed) {
                    return '';
                    $date = \DateTime::createFromFormat('Y-m-d H:i:s', $model->updated_at);
                    return Url::toRoute(['post/view', 'id' => $model->id], true) . ' ' . $date->format(DATE_RSS);
                },
                'pubDate' => function ($model, $widget, \Zelenin\Feed $feed) {
                    $date = \DateTime::createFromFormat('Y-m-d H:i:s', $model->publishDate);
                    return $date->format(DATE_RSS);
                }
            ]
        ]);
    }
}
