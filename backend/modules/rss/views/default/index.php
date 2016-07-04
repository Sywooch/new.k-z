<?php
use kartik\grid\GridView;
use yii\helpers\Html;

$this->title = 'Менеджер RSS';

echo Html::tag('div', Html::tag('div', GridView::widget([
        'dataProvider'  =>  $feeds,
        'summary'       =>  false,
        'bordered'      =>  false,
        'hover'         =>  true,
        'pjax'          =>  true,
        'striped'       =>  false,
        'layout'        =>  '{items}<div class="text-center">{pager}</div>',
        'containerOptions'  =>  [
            'class' =>  'box-body table-responsive no-padding'
        ],
        'resizableColumns' =>  false,
        'columns'       =>  [
            'id',
            'name',
            'description',
            'published',
            'created'
        ],
    ]), ['class' => 'col-xs-12']).Html::tag('div', '', ['class' => 'clearfix']), ['class' => 'box box-primary']);