<?php
use yii\bootstrap\Html;
use yii\grid\GridView;
use yii\grid\SerialColumn;
use yii\helpers\Url;


?>
<div id="gkContentMainbody" class="gkMain gkPaddingR">
    <div style="font-size: 100%;" id="gkComponentWrap" class="gkMain  ">
        <div id="gkMainbody" class="gkMain gkMarginTBLR">
            <div id="gkMainbodyWrap">
                <div id="gkBreadcrumbMainbody">
                    <div>
                        <div class="breadcrumbs">
                            <ul><li><a href="/" class="pathway">Главная</a></li> <li class="pathway separator"> / </li> <li class="pathway">RSS</li></ul></div>
                        </div>
                </div>
                <div id="gkComponent">
                    <div class="category-list">
                        <div class="cat-items">
                            <?=GridView::widget([
                                'dataProvider'  =>  $dataProvider,
                                'summary'       =>  false,
                                'columns'       =>  [
                                    [
                                        'class' =>  SerialColumn::className()
                                    ],
                                    'name',
                                    [
                                        'attribute' =>  'link',
                                        'format'    =>  'raw',
                                        'value'     =>  function($model){
                                            return Html::a('xml', Url::to(['/rss/'.$model->fullLink]));
                                        }
                                    ]
                                ]
                            ])?>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>