<?php
namespace frontend\controllers;

use frontend\helpers\SelectedCategoriesHelper;
use frontend\models\Category;
use frontend\models\CommentForm;
use frontend\models\News;
use Yii;
use common\models\LoginForm;
use frontend\models\PasswordResetRequestForm;
use frontend\models\ResetPasswordForm;
use frontend\models\SignupForm;
use frontend\models\ContactForm;
use yii\base\InvalidParamException;
use yii\data\ActiveDataProvider;
use yii\db\Query;
use yii\web\BadRequestHttpException;
use yii\web\Controller;
use yii\filters\VerbFilter;
use yii\filters\AccessControl;
use yii\web\NotFoundHttpException;

/**
 * Site controller
 */
class SiteController extends Controller
{
    /**
     * @inheritdoc
     */
    public function behaviors()
    {
        return [
            'access' => [
                'class' => AccessControl::className(),
                'only' => ['logout', 'signup'],
                'rules' => [
                    [
                        'actions' => ['signup'],
                        'allow' => true,
                        'roles' => ['?'],
                    ],
                    [
                        'actions' => ['logout'],
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

    /**
     * @inheritdoc
     */
    public function actions()
    {
        return [
            'error' => [
                'class' => 'yii\web\ErrorAction',
            ],
            'captcha' => [
                'class' => 'yii\captcha\CaptchaAction',
                'fixedVerifyCode' => YII_ENV_TEST ? 'testme' : null,
            ],
        ];
    }

    public function actionHome(){
        return $this->redirect('/');
    }

    /**
     * Displays homepage.
     *
     * @return mixed
     */
    public function actionIndex()
    {
        $selectedCategories = Category::find()->where(['in', 'id', [34, 32, 35, 38, 44, 76]])->all();

        $this->layout = 'index';

        $categoryVideo = Category::findOne(['id' => '49']); //Category "VIDEO"

        return $this->render('index', [
            'latestNews'    =>  News::find()->with('category')->orderBy('publishTimestamp DESC')->limit(1)->one(),
            'favoriteNews'  =>  News::getFavorite(3),
            'videoNews'     =>  $categoryVideo->getTopNews(1),
            'dayNews'       =>  News::find()->where("`categoryID` != {$categoryVideo->id}")->orderBy('publishTimestamp DESC')->limit(12)->all(),
            'mediaPartners' =>  \frontend\models\Ads::byPosition("-1"),
            'selectedCategories'    =>  SelectedCategoriesHelper::getWithColors($selectedCategories)
        ]);
    }

    public function actionNews($id){
        $news = News::find()->where(['id' => filter_var($id, FILTER_SANITIZE_NUMBER_INT)])->with('author')->one();

        if(!$news){
            throw new NotFoundHttpException();
        }

        if($news->fullLink != \Yii::$app->request->url){
            return $this->redirect($news->fullLink);
        }

        (new Query())->createCommand(\Yii::$app->db)->setSql("UPDATE `news` SET `hits` = `hits` + 1 WHERE `id` = '{$news->id}'")->execute();

        $commentForm = new CommentForm();

        if(\Yii::$app->request->post('CommentForm')){
            $commentForm->load(\Yii::$app->request->post());

            $commentForm->news = $news;

            if($commentForm->save()){
                \Yii::$app->session->setFlash('saved', 'Комментарий успешно добавлен!'.($news->moderatedComments == 1 ? ' Он будет опубликован после проверки модератором.' : ''));

                $commentForm = new CommentForm();
            }
        }

        return $this->render('article', [
            'article'       =>  $news,
            'commentForm'   =>  $commentForm,
            'comments'      =>  new ActiveDataProvider([
                'query' =>  $news->getComments(),
                'sort'  =>  [
                    'defaultOrder'  =>  [
                        'date'  =>  SORT_ASC
                    ]
                ]
            ])
        ]);
    }

    public function actionImages($link){
        return $this->redirect(\Yii::$app->params['imagesRoot'].'images/'.$link);
    }

    public function actionCategory($link){
        $category = Category::findOne(['link' => $link]);

        if(!$category){
            throw new NotFoundHttpException();
        }

        return $this->render('category', [
            'category'      =>  $category,
            'dataProvider'  =>  new ActiveDataProvider([
                'query' =>  $category->getNews()->with('category'),
                'sort'  =>  [
                    'defaultOrder'  =>  [
                        'publishTimestamp'  =>  SORT_DESC
                    ]
                ],
                'pagination'    =>  [
                    'pageSize'  =>  5
                ]
            ])
        ]);
    }

}
