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
            <?=$this->render('_news_header_buttons', ['model' => $model])?>
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