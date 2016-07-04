<?php
use kartik\grid\GridView;
use yii\helpers\Html;

$this->title = 'Менеджер меню';

echo Html::tag('div', Html::tag('div', GridView::widget([
    'dataProvider'  =>  $menus,
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
]), ['class' => 'col-xs-12']).Html::tag('div', '', ['class' => 'clearfix']), ['class' => 'box box-primary']);