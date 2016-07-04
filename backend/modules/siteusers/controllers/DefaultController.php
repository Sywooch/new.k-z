<?php

namespace backend\modules\siteusers\controllers;

use backend\models\Siteuser;
use backend\models\SiteuserForm;
use yii\data\ActiveDataProvider;
use yii\filters\AccessControl;
use yii\filters\VerbFilter;
use yii\web\Controller;
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

    public function actionIndex()
    {
        $siteusersDataProvider = new ActiveDataProvider([
            'query' =>  Siteuser::find()
        ]);

        return $this->render('index', [
            'siteusersDataProvider' =>  $siteusersDataProvider
        ]);
    }

    public function actionAdduser(){
        $siteusersForm = new SiteuserForm();

        if(\Yii::$app->request->post("SiteuserForm")){
            if(!$siteusersForm->load(\Yii::$app->request->post())){
                throw new NotFoundHttpException("Модель не загрузилась :с");
            }

            if(\Yii::$app->request->isAjax){
                return $siteusersForm->validate();
            }

            if($siteusersForm->validate() && $siteusersForm->create()){
                return \Yii::$app->response->redirect('/siteusers');
            }
        }

        return $this->render('_new_user', [
            'model'     =>  $siteusersForm
        ]);
    }
}
