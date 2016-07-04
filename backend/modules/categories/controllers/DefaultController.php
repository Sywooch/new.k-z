<?php

namespace backend\modules\categories\controllers;

use common\models\Category;
use yii\data\ActiveDataProvider;
use backend\controllers\SiteController as Controller;

class DefaultController extends Controller
{
    public function actionIndex()
    {
        return $this->render('index', [
            'dataProvider'  =>  new ActiveDataProvider([
                'query' =>  Category::find()
            ])
        ]);
    }
}
