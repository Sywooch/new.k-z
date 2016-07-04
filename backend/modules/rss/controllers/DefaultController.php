<?php

namespace backend\modules\rss\controllers;

use common\models\NewsFeed;
use yii\data\ActiveDataProvider;
use backend\controllers\SiteController as Controller;

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
            'feeds' =>  new ActiveDataProvider([
                'query' =>  NewsFeed::find()
            ])
        ]);
    }
}
