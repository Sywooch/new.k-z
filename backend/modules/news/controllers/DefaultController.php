<?php

namespace backend\modules\news\controllers;

use common\models\News;
use yii\data\ActiveDataProvider;
use yii\web\Controller;

class DefaultController extends Controller
{
    public function actionIndex()
    {
        $newsDataProvider = new ActiveDataProvider([
            'query' =>  News::find()
        ]);

        return $this->render('index', [
            'newsDataProvider'  =>  $newsDataProvider
        ]);
    }
}
