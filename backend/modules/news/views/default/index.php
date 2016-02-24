<?php
use rmrevin\yii\fontawesome\FontAwesome;
use yii\bootstrap\Html;
use yii\helpers\Url;

$this->title = 'Новости';

$this->params['breadcrumbs'][] = $this->title;
?>
<div class="box box-primary">
    <div class="box-header">
        <?=Html::a(
            FontAwesome::i('plus').Html::tag('small', 'Добавить'),
            Url::toRoute(['/news/new']),
            [
                'class' =>  'btn btn-app'
            ]
        )?>
    </div>
    <div class="col-xs-12">
        <?=\kartik\grid\GridView::widget([
            'dataProvider'  =>  $newsDataProvider,
            'bordered'      =>  false,
            'summary'       =>  false,
            'hover'         =>  true,
            'pjax'          =>  true,
            'striped'       =>  false,
            'layout'        =>  '{items}<div class="text-center">{pager}</div>',
            'containerOptions'  =>  [
                'class' =>  'box-body table-responsive no-padding'
            ],
            'resizableColumns' =>  false,
            'columns'       =>  [
                [
                    'class' =>  \yii\grid\CheckboxColumn::className(),
                ],
                [
                    'attribute' =>  'title',
                    'format'    =>  'html',
                    'value'     =>  function($model){
                        return Html::a($model->title, Url::toRoute([
                            '/news/show/'.$model->id
                        ]));
                    }
                ],
                'category',
                'author',
                [
                    'attribute' =>  'publishDate',
                    'width'     =>  '80px',
                    'value'     =>  function($model){
                        return \Yii::$app->formatter->asDatetime($model->publishDate, 'php:d.m.Y');
                    }
                ],
                [
                    'attribute' =>  'hits',
                    'width'     =>  '50px'
                ],
                [
                    'attribute' =>  'id',
                    'width'     =>  '50px'
                ]
            ]
        ])?>
    </div>
    <div class="clearfix"></div>
</div>