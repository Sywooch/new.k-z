<?php

namespace backend\modules\menu\controllers;

use common\models\Menu;
use yii\data\ActiveDataProvider;
use yii\web\Controller;

/**
 * Default controller for the `menu` module
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
            'menus' =>  new ActiveDataProvider([
                'query' =>  Menu::find()
            ])
        ]);
    }
}