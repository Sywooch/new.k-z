<?php
/**
 * Created by PhpStorm.
 * User: bobroid
 * Date: 04.01.16
 * Time: 0:04
 */

$this->title = $model->title;

$this->params['breadcrumbs'][] = [
    'url'  =>  '/news',
    'label' =>  'Новости'
];

$this->params['breadcrumbs'][] = $model->title;//substr($this->title, 0, 21);

$form = new \yii\widgets\ActiveForm();

echo $form->field($model, 'text')->widget(\bobroid\imperavi\Widget::className(), [

])->label(false);