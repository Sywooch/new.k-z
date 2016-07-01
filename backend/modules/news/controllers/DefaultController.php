<?php

namespace backend\modules\news\controllers;

use backend\models\Category;
use backend\models\News;
use backend\modules\news\models\NewsForm;
use common\helpers\UploadHelper;
use common\models\Image;
use yii\data\ActiveDataProvider;
use yii\filters\AccessControl;
use yii\filters\VerbFilter;
use yii\web\BadRequestHttpException;
use yii\web\Controller;
use yii\web\ForbiddenHttpException;
use yii\web\MethodNotAllowedHttpException;
use yii\web\NotFoundHttpException;

class DefaultController extends Controller
{

    /**
     * @inheritdoc
     */
    public function behaviors()
    {
        return [
            'access' => [
                'class' => AccessControl::className(),
                'rules' => [
                    [
                        'actions' => ['login', 'error'],
                        'allow' => true,
                    ],
                    [
                        'allow' => true,
                        'roles' => ['@'],
                    ],
                ],
            ],
            'verbs' => [
                'class' => VerbFilter::className(),
                'actions' => [
                    'logout' => ['post'],
                ],
            ],
        ];
    }

    public function beforeAction($action)
    {
        if($action->id == 'upload'){
            $this->enableCsrfValidation = false;
        }

        return parent::beforeAction($action); // TODO: Change the autogenerated stub
    }

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

    public function actionUpload(){
        $newsID = preg_replace('/\D+/', '', $_SERVER['HTTP_REFERER']);

        $news = News::findOne($newsID);

        $filename = $news ? $news->link.rand(0, 10000) : \Yii::$app->security->generateRandomString();

        $file = UploadHelper::__upload($_FILES['file'], [
            'filename'  =>  $filename
        ]);

        $image = new Image([
            'userID'    =>  \Yii::$app->user->id,
            'newsID'    =>  $newsID,
            'link'      =>  \Yii::$app->params['cdn'].'/images/stories/'.$file
        ]);

        $image->save(false);

        if(\Yii::$app->request->isAjax){
            \Yii::$app->response->format = 'json';

            return [
                'filelink'   =>  $image->link,
                'id'    =>  "img{$image->id}"
            ];
        }

        return $image;
    }

    public function actionUploaded(){
        if(!\Yii::$app->request->isAjax){
            throw new BadRequestHttpException('Данный метод возможен только через ajax!');
        }

        \Yii::$app->response->format = 'json';

        $images = [];

        foreach(Image::find()->each() as $image){
            $imageObj = new \stdClass();

            $imageObj->thumb = $image->link;
            $imageObj->image = $image->link;
            $imageObj->title = empty($image->description) ? '' : $image->description;
            $imageObj->id = "img{$image->id}";

            $images[] = $imageObj;
        }

        return $images;
    }

    public function actionNew(){
        $form = new NewsForm();

        if(\Yii::$app->request->post('NewsForm')){
            $form->load(\Yii::$app->request->post());

            if($form->save()){
                \Yii::$app->getSession()->setFlash('saved', '<h4><i class="icon fa fa-check"></i> Успех!</h4>Новость '.$form->title.' добавлена! <a href="/news/show/'.$form->id.'">Просмотреть в админке</a>');

                $form = new NewsForm();
            }else{
                \Yii::$app->getSession()->setFlash('error', '<h4><i class="icon fa fa-ban"></i> Ошибка!</h4>Произошла ошибка при добавлении новости!');
            }
        }

        return $this->render('news_edit', [
            'model' =>  $form,
            'mode'  =>  'new'
        ]);
    }

    public function actionShow($id){
        $news = News::findOne(['id' => $id]);

        if(!$news){
            throw new NotFoundHttpException("Не найдена новость с ID {$id}");
        }

        if(\Yii::$app->request->get("act") == 'edit'){
            $form = new NewsForm();

            $form->setNews($news);

            if(\Yii::$app->request->post('NewsForm')){
                $form->load(\Yii::$app->request->post());

                if($form->save()){
                    \Yii::$app->getSession()->setFlash('saved', '<h4><i class="icon fa fa-check"></i> Успех!</h4>Изменения сохранены!');
                }else{
                    \Yii::$app->getSession()->setFlash('error', '<h4><i class="icon fa fa-ban"></i> Ошибка!</h4>Произошла ошибка при сохранении изменений!');
                }
            }

            return $this->render('news_edit', [
                'model'     =>  $form,
                'mode'      =>  'edit'
            ]);
        }

        return $this->render('news', [
            'model'     =>  $news,
            'category'  =>  $news->category
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
