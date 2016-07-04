<?php
/**
 * Created by PhpStorm.
 * User: bobroid
 * Date: 04.01.16
 * Time: 0:04
 */


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
    <?=$this->render('_news_header_buttons', ['model' => $model])?>
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
