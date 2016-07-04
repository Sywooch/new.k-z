<?php
use yii\bootstrap\Html;
use yii\grid\GridView;
use yii\grid\SerialColumn;
use yii\helpers\Url;

$this->title = 'RSS ленты';

echo GridView::widget([
    'dataProvider'  =>  $dataProvider,
    'summary'       =>  false,
    'options'       =>  [
        'style' =>  'width: 100%'
    ],
    'columns'       =>  [
        [
            'class' =>  SerialColumn::className()
        ],
        'name',
        [
            'attribute' =>  'link',
            'format'    =>  'raw',
            'value'     =>  function($model){
                return Html::a('xml', Url::to(['/rss/'.$model->fullLink]), ['class' => 'btn btn-link']);
            }
        ]
    ]
]);