<?php
/**
 * Created by PhpStorm.
 * User: bobroid
 * Date: 04.01.16
 * Time: 0:04
 */

use backend\models\Category;
use kartik\form\ActiveForm;
use rmrevin\yii\fontawesome\FontAwesome;
use yii\helpers\ArrayHelper;
use yii\helpers\Html;

$mode = !isset($mode) ? 'new' : $mode;

$this->title = $model->title;

if($mode == 'new'){
    $this->title = 'Добавить новость';
}

$this->params['breadcrumbs'][] = [
    'url'  =>  '/news',
    'label' =>  'Новости'
];

$this->params['breadcrumbs'][] = $this->title;

echo Html::beginTag('div', ['class' => 'box box-primary']);

$form = ActiveForm::begin([
    'type' => ActiveForm::TYPE_HORIZONTAL,
]);

echo $this->render('_news_header_buttons', ['model' => $model, 'mode' => $mode]),
Html::beginTag('div', ['class' => 'col-xs-12']);

if(\Yii::$app->session->getFlash('saved', false)){
    echo \yii\bootstrap\Alert::widget([
        'body'      =>  \Yii::$app->session->getFlash('saved'),
        'options'   =>  [
            'class' =>  'alert alert-success alert-dismissible'
        ]
    ]);
}else if(\Yii::$app->session->getFlash('error', false)){
    echo \yii\bootstrap\Alert::widget([
        'body'      =>  \Yii::$app->session->getFlash('error'),
        'options'   =>  [
            'class' =>  'alert alert-danger alert-dismissible row col-xs-10 col-xs-offset-1'
        ]
    ]);
}

echo Html::endTag('div'),
    Html::tag('div',
    $form->field($model, 'title').
    $form->field($model, 'category')->widget(\kartik\select2\Select2::className(), [
        'data'  =>  ArrayHelper::map(Category::find()->where(['deleted' => 0])->asArray()->all(), 'id', 'title')
    ]).
    $form->field($model, 'text')->widget(\bobroid\imperavi\Widget::className(), [

    ]).
    $form->field($model, 'metaDescription')->textarea().
    $form->field($model, 'metaKeywords').
    $form->field($model, 'author'),
    [
        'class' =>  'col-xs-12'
    ]
),
$form->field($model, 'published', ['options' => ['style' => 'display: none']])->hiddenInput()->label(false),
$form->field($model, 'favorite', ['options' => ['style' => 'display: none']])->hiddenInput()->label(false),
$form->field($model, 'deleted', ['options' => ['style' => 'display: none']])->hiddenInput()->label(false),
Html::tag('div',
    Html::button(
        FontAwesome::i('save').Html::tag('small', 'сохранить'),
        [
            'class' =>  'btn btn-app btn-success',
            'type'  =>  'submit'
        ]
    ), [
        'class' => 'text-center'
    ]
);

$form->end();

echo Html::tag('div', '', ['class' => 'clearfix']),
Html::endTag('div');
