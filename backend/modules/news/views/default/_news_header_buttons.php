<?php
use rmrevin\yii\fontawesome\FontAwesome;
use yii\helpers\Html;
use yii\helpers\Url;

/** @var \backend\models\News $model */


$js = <<<'JS'
$('button.apps-buttons').on('click', function(){
    var elem = $(this);

    $.ajax({
        type: 'post',
        url: '/news/changeattribute',
        data: {
            'attribute': elem.attr('data-attribute'),
            'newsID': elem.attr('data-attribute-newsid')
        },
        success: function(data){
            var html = '';

            switch(elem.attr('data-attribute')){
                case 'published':
                    html = data != 1 ? '<i class="fa fa-eye-slash"></i><small>спрятано</small>' : '<i class="fa fa-eye"></i><small>опубликовано</small>';
                    break;
                case 'favorite':
                    html = data != 1 ? '<i class="fa fa-star-o"></i><small>в избранное</small>' : '<i class="fa fa-star"></i><small>в избранном</small>';
                    break;
                case 'deleted':
                    html = data != 1 ? '<i class="fa fa-trash-o"></i><small>удалить</small>' : '<i class="fa fa-trash"></i><small>удалено</small>';
                    break;
            }

            elem.html(html);
        }
    });
});
JS;

$this->registerJs($js);

$buttons = [];

if(!$model->isNewRecord){
    switch(\Yii::$app->request->get('act')){
        case 'edit':
            $buttons = array_merge($buttons, [
                Html::a(
                    FontAwesome::i('arrow-left').Html::tag('small', 'назад'),
                    Url::to(['/news/show/'.$model->id], true),
                    [
                        'class' =>  'btn btn-app'
                    ]
                ),
                Html::button(
                    FontAwesome::i('save').Html::tag('small', 'сохранить'),
                    [
                        'class' =>  'btn btn-app btn-success'
                    ]
                )
            ]);
            break;
        default:
            $buttons[] = Html::a(
                FontAwesome::i('edit').Html::tag('small', 'редактировать'),
                Url::toRoute(['/news/show/'.$model->id, 'act' => 'edit'], true),
                [
                    'class' =>  'btn btn-app'
                ]
            );
            break;
    }
}

$buttons = array_merge($buttons, [
    Html::button(
        FontAwesome::i($model->published == 1 ? 'eye' : 'eye-slash').Html::tag('small', $model->published == 1 ? 'опубликовано' : 'спрятано'),
        [
            'class'             =>  'btn btn-app apps-buttons',//.($model->published == 1 ? ' bg-olive' : ''),
            'data-attribute'    =>  'published',
            'data-attribute-newsID'=>$model->id,
        ]
    ),
    Html::button(
        FontAwesome::i($model->favorite == 1 ? 'star' : 'star-o').Html::tag('small', $model->favorite == 1 ? 'в избранном' : 'в избранное'),
        [
            'class'             =>  'btn btn-app apps-buttons',//.($model->favorite == 1 ? ' bg-orange' : ''),
            'data-attribute'    =>  'favorite',
            'data-attribute-newsID'=>$model->id,
        ]
    ),
    Html::button(
        FontAwesome::i($model->deleted == 1 ? 'trash' : 'trash-o').Html::tag('small', $model->deleted == 1 ? 'удалено' : 'удалить'),
        [
            'class'             =>  'btn btn-app apps-buttons',//.($model->deleted == 1 ? ' bg-danger' : ''),
            'data-attribute'    =>  'deleted',
            'data-attribute-newsID'=>$model->id,
        ]
    )
]);

echo Html::tag('div', implode($buttons), ['class' => 'box-header']);