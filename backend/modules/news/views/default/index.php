<?php
use yii\bootstrap\Html;
use yii\helpers\Url;

$this->title = 'Новости';

?>
<br>
<div class="box">
    <div class="box-header">
        <div class="box-tools">
            <a href="/news/create" class="btn btn-info">Добавить</a>
        </div>
    </div>
    <?=\kartik\grid\GridView::widget([
        'dataProvider'  =>  $newsDataProvider,
        'bordered'      =>  false,
        'summary'       =>  false,
        'hover'         =>  true,
        'pjax'          =>  true,
        'striped'       =>  false,
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