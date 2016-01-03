<?php
use yii\bootstrap\Html;

$form = new \yii\widgets\ActiveForm([
    'action'    =>  '/siteusers/adduser',
]);

$form->begin();
?>

<?=$form->field($model, 'username')?>
<?=$form->field($model, 'email')?>
<?=$form->field($model, 'password')->passwordInput()?>
<?=Html::button('Отмена', [
    'data-remodal-action'   =>  'cancel',
    'class'                 =>  'remodal-cancel'
])?>
<?=Html::button('Создать', [
    'class'                 =>  'remodal-confirm',
    'type'                  =>  'success'
])?>
<?php
$form->end();
?>