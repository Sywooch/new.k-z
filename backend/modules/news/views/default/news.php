<?php
use rmrevin\yii\fontawesome\FontAwesome;
use yii\helpers\Html;
use yii\helpers\Url;

$this->title = $model->title;

$this->params['breadcrumbs'][] = [
    'url'  =>  '/news',
    'label' =>  'Новости'
];

$this->params['breadcrumbs'][] = $model->title;//substr($this->title, 0, 21);

$js = <<<'JS'
var updateParam = function(e){
    var parametr = e.currentTarget.getAttribute('data-attribute'),
        html = '';

    $.ajax({
       type: 'post',
       url: '/news/changeattribute',
       data: {
            'attribute': parametr,
            'newsID': e.currentTarget.getAttribute('data-attribute-newsid')
       },
       success: function(data){
            switch(parametr){
                case 'published':
                    html = data != 1 ? '<i class="fa fa-eye-slash"></i><small>спрятано</small>' : '<i class="fa fa-eye"></i><small>опубликовано</small>';
                    break;
                case 'favorite':
                    html = data != 1 ? '<i class="fa fa-star"></i><small>в избранном</small>' : '<i class="fa fa-star-o"></i><small>не избранное</small>';
                    break;
            }

            e.currentTarget.innerHTML = html;
       }
    });

};

$('button.apps-buttons').on('click', function(e){
    updateParam(e);
})
JS;

$css = <<<'CSS'
.delimeter{
    border: none;
    border-bottom: 1px dashed rgba(50, 50, 50, 0.4);
    margin: 0;
    padding: 0;
    padding-left: 10px;
    margin-top: 5px;
    background: rgba(25, 25, 25, 0.1);
}

.delimeter:before{
    content: 'предпросмотр новости';
    position: absolute;
    margin-top: -20px;
}

.delimeter:after{
    text-align: right;
    right: 20px;
    content: 'продолжение';
    position: absolute;
}
CSS;

$this->registerCss($css);

$this->registerJs($js);
?>
<div class="row">
    <div class="col-xs-9">
        <div class="box box-primary">
            <div class="box-header">
                <?=Html::a(
                    FontAwesome::i('edit').Html::tag('small', 'редактировать'),
                    Url::toRoute(['/news/show/'.$model->id, 'act' => 'edit']),
                    [
                        'class' =>  'btn btn-app'
                    ]
                )?>

                <?=Html::button(
                    FontAwesome::i($model->published == 1 ? 'eye' : 'eye-slash').Html::tag('small', $model->published == 1 ? 'опубликовано' : 'спрятано'),
                    [
                        'class'             =>  'btn btn-app apps-buttons',//.($model->published == 1 ? ' bg-olive' : ''),
                        'data-attribute'    =>  'published',
                        'data-attribute-newsID'=>$model->id,
                    ]
                )?>

                <?=Html::button(
                    FontAwesome::i($model->favorite != 1 ? 'star' : 'star-o').Html::tag('small', $model->favorite != 1 ? 'в избранном' : 'не избранное'),
                    [
                        'class'             =>  'btn btn-app apps-buttons',//.($model->favorite == 1 ? ' bg-orange' : ''),
                        'data-attribute'    =>  'favorite',
                        'data-attribute-newsID'=>$model->id,
                    ]
                )?>

                <?=Html::button(
                    FontAwesome::i($model->deleted != 1 ? 'star' : 'star-o').Html::tag('small', $model->deleted != 1 ? 'в избранном' : 'не избранное'),
                    [
                        'class'             =>  'btn btn-app apps-buttons',//.($model->deleted == 1 ? ' bg-danger' : ''),
                        'data-attribute'    =>  'deleted',
                        'data-attribute-newsID'=>$model->id,
                    ]
                )?>
            </div>
            <div class="col-xs-12">
                <div class="box-body text-preview">
                    <?=$model->textPreview?>
                </div>
                <hr class="delimeter">
                <div class="box-body">
                    <?=$model->text?>
                </div>
            </div>
            <div class="clearfix"></div>
        </div>
    </div>
    <div class="col-md-3">
        <div class="box box-success collapsed-box">
            <div class="box-header with-border">
                <h3 class="box-title">Информация</h3>

                <div class="box-tools">
                    <button type="button" class="btn btn-box-tool" data-widget="collapse">
                        <i class="fa fa-plus"></i>
                    </button>
                </div>
            </div>
            <div style="display: none;" class="box-body no-padding">
                <ul class="nav nav-pills nav-stacked">
                    <li>
                        <a href="#"><i class="fa fa-eye"></i> Просмотры <span class="label label-success pull-right"><?=$model->hits?></span></a>
                    </li>
                    <li>
                        <a href="#"><i class="fa fa-envelope-o"></i> Опубликовано <span class="label label-success pull-right"><?=\Yii::$app->formatter->asDatetime($model->publishDate, 'php:d.m.Y H:i')?></span></a>
                    </li>
                    <?php if(!empty($model->unpublishDate) && $model->unpublishDate != '0000-00-00 00:00:00'){ ?>
                    <li>
                        <a href="#"><i class="fa fa-eye-slash"></i> Скрыто <span class="label label-danger pull-right"><?=\Yii::$app->formatter->asDatetime($model->unpublishDate, 'php:d.m.Y H:i')?></span></a>
                    </li>
                    <?php } ?>
                    <li>
                        <a href="#"><i class="fa fa-user"></i> Автор <span class="label label-default pull-right"><?=$model->author?></span></a>
                    </li>
                    <li>
                        <a href="#"><i class="fa fa-filter"></i> Категория <span class="label label-primary pull-right"><?=$category->title?></span></a>
                    </li>
                    <li>
                        <a href="#"><i class="fa fa-trash-o"></i> Trash</a>
                    </li>
                </ul>
            </div>
            <!-- /.box-body -->
        </div>
        <!-- /. box -->
        <div class="box box-solid collapsed-box">
            <div class="box-header with-border">
                <h3 class="box-title">Labels</h3>

                <div class="box-tools">
                    <button type="button" class="btn btn-box-tool" data-widget="collapse"><i class="fa fa-plus"></i>
                    </button>
                </div>
            </div>
            <div style="display: none;" class="box-body no-padding">
                <ul class="nav nav-pills nav-stacked">
                    <li><a href="#"><i class="fa fa-circle-o text-red"></i> Important</a></li>
                    <li><a href="#"><i class="fa fa-circle-o text-yellow"></i> Promotions</a></li>
                    <li><a href="#"><i class="fa fa-circle-o text-light-blue"></i> Social</a></li>
                </ul>
            </div>
            <!-- /.box-body -->
        </div>
        <!-- /.box -->
    </div>
</div>