<?php
/**
 * Created by PhpStorm.
 * User: bobroid
 * Date: 04.01.16
 * Time: 0:04
 */

use rmrevin\yii\fontawesome\FontAwesome;
use yii\bootstrap\Html;
use yii\helpers\Url;

$this->title = $model->title;

if($model->isNewRecord){
    $this->title = 'Добавить новость';
}

$this->params['breadcrumbs'][] = [
    'url'  =>  '/news',
    'label' =>  'Новости'
];

$this->params['breadcrumbs'][] = $this->title;

?>
<div class="box box-primary">
    <div class="box-header">
        <?php if(!$model->isNewRecord){
            echo Html::a(
                FontAwesome::i('arrow-left').Html::tag('small', 'назад'),
                Url::toRoute(['/news/show/'.$model->id]),
                [
                    'class' =>  'btn btn-app'
                ]
            );
        }

        echo Html::button(
            FontAwesome::i('save').Html::tag('small', 'сохранить'),
            [
                'class' =>  'btn btn-app btn-success'
            ]
        ),
        Html::button(
            FontAwesome::i($model->published == 1 ? 'eye' : 'eye-slash').Html::tag('small', $model->published == 1 ? 'опубликовано' : 'спрятано'),
            [
                'class'             =>  'btn btn-app apps-buttons',//.($model->published == 1 ? ' bg-olive' : ''),
                'data-attribute'    =>  'published',
                'data-attribute-newsID'=>$model->id,
            ]
        ),
        Html::button(
            FontAwesome::i($model->favorite != 1 ? 'star' : 'star-o').Html::tag('small', $model->favorite != 1 ? 'в избранном' : 'не избранное'),
            [
                'class'             =>  'btn btn-app apps-buttons',//.($model->favorite == 1 ? ' bg-orange' : ''),
                'data-attribute'    =>  'favorite',
                'data-attribute-newsID'=>$model->id,
            ]
        ),
        Html::button(
            FontAwesome::i($model->deleted != 1 ? 'star' : 'star-o').Html::tag('small', $model->deleted != 1 ? 'в избранном' : 'не избранное'),
            [
                'class'             =>  'btn btn-app apps-buttons',//.($model->deleted == 1 ? ' bg-danger' : ''),
                'data-attribute'    =>  'deleted',
                'data-attribute-newsID'=>$model->id,
            ]
        )?>
    </div>
    <div class="col-xs-12">
    <?php
    $form = \yii\bootstrap\ActiveForm::begin();
    echo $form->field($model, 'text')->widget(\bobroid\imperavi\Widget::className(), [

    ])->label(false);

    $form->end();
    ?>
    </div>
    <div class="clearfix"></div>
</div>
