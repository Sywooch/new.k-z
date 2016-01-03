<?php
$this->title = 'Администраторы';

$this->params['breadcrumbs'][] = $this->title;

$customerModal = new \bobroid\remodal\Remodal([
    'addRandomToID'         =>  false,
    'id'                    =>  'addUser',
    'confirmButton'         =>  false,
    'cancelButton'          =>  false
]);

echo $customerModal->renderModal($this->render('_new_user', [
    'model'     =>  new \backend\models\SiteuserForm(),
]))
?>
<a class="btn btn-default" href="#addUser">Новый</a>
<br><br>
<?=\yii\grid\GridView::widget([
    'dataProvider'      =>  $siteusersDataProvider,
    'summary'   =>  false,
    'columns'   =>  [
        [
            'class'     =>  \yii\grid\SerialColumn::className(),
        ],
        'username',
        [
            'attribute' =>  'status'
        ],
        'email',
        [
            'attribute' =>  'created_at',
            'value'     =>  function($model){
                return \Yii::$app->formatter->asDatetime($model->created_at, 'php:d.m.Y H:i');
            }
        ],
        [
            'attribute' =>  'last_visit',
            'value'     =>  function($model){
                return \Yii::$app->formatter->asRelativeTime($model->last_visit);
            }
        ],
    ]
    //'resizableColumns'  =>  false
])?>
