<?php
$this->title = 'Новости';

?>
<a href="/news/create" class="btn btn-default">Добавить</a>
<br>
<br>
<?=\kartik\grid\GridView::widget([
    'dataProvider'  =>  $newsDataProvider
])?>