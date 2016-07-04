<?php

namespace backend\modules\news\controllers;

use backend\models\LoginForm;
use backend\models\Category;
use backend\models\News;
use yii\data\ActiveDataProvider;
use yii\web\Controller;
use yii\web\ForbiddenHttpException;
use yii\web\MethodNotAllowedHttpException;
use yii\web\NotFoundHttpException;

class DefaultController extends Controller
{
    public function actionIndex()
    {
        $newsDataProvider = new ActiveDataProvider([
            'query' =>  News::find()->with('category'),
            'sort'      =>  [
                'defaultOrder'  =>  [
                    'publishDate'    =>  SORT_DESC
                ]
            ]
        ]);

        return $this->render('index', [
            'newsDataProvider'  =>  $newsDataProvider
        ]);
    }

    public function actionNew(){


        return $this->render('news_edit', [
            'model' =>  new News()
        ]);
    }

    public function actionShow($id){
        $news = News::findOne(['id' => $id]);

        if(!$news){
            throw new NotFoundHttpException("Не найдена новость с ID ".$id);
        }

        $category = Category::findOne($news->category);

        if(!$category){
            $category = new Category();
        }

        if(\Yii::$app->request->get("act") == 'edit'){
            return $this->render('news_edit', [
                'model'     =>  $news,
                'category'  =>  $category
            ]);
        }

        return $this->render('news', [
            'model'     =>  $news,
            'category'  =>  $category
        ]);
    }

    public function actionChangeattribute(){
        if(!\Yii::$app->request->isAjax){
            throw new MethodNotAllowedHttpException();
        }

        \Yii::$app->response->format = 'raw';

        $news = News::findOne(\Yii::$app->request->post("newsID"));

        if(!$news){
            throw new NotFoundHttpException();
        }

        $attribute = \Yii::$app->request->post("attribute");

        if(!in_array($attribute, ['favorite', 'deleted', 'published', 'checked',])){
            throw new ForbiddenHttpException();
        }

        $news->$attribute = $news->$attribute == 1 ? 0 : 1;

        if($news->save(false)){
            return $news->$attribute;
        }

        return 0;
    }
}
