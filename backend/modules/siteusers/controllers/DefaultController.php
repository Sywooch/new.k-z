<?php

namespace backend\modules\siteusers\controllers;

use backend\models\Siteuser;
use backend\models\SiteuserForm;
use yii\data\ActiveDataProvider;
use backend\controllers\SiteController as Controller;
use yii\web\NotFoundHttpException;

class DefaultController extends Controller
{
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
