<?php
    $this->title = $category->title;
    $this->params['breadcrumbs'][] = $this->title;
?>
<div class="category-desc">
    <div class="clr"></div>
</div>
<div id="pjax-target">
    <?php
    use yii\widgets\ListView;
    //$pjax = new \yii\widgets\Pjax();
    //$pjax->formSelector = '#pjax-target';
    //$pjax->begin();
    echo ListView::widget([
        'dataProvider'  => new \yii\data\ActiveDataProvider([
            'query' =>  $category->getNews()->with('category')
        ]),
        'itemOptions'   => [
            'class'         => 'items-row'
        ],
        'itemView'      => '_in_category_news',
        'viewParams'    => [
            'categoryLink'  => $category->link,
        ],
        'summary'       =>  'Страница {page} из {pageCount}',
        'pager'         =>  [
            'nextPageLabel'         =>  'вперёд',
            'prevPageLabel'         =>  'назад',
            'firstPageLabel'        =>  'В начало',
            'lastPageLabel'         =>  'В конец',
        ],
        //'summary'     =>  '',
        'layout'        =>  '{items}'./*$itemsMore*/''.'<div class="pagination"><p class="counter">{summary}</p> {pager}</div>',
    ]);
    //$pjax->end();
    ?>
</div>
    <!--
    <div class="pagination">
        <p class="counter">Страница 1 из 300 </p>
        <ul>
            <li class="pagination-start">
                <span class="pagenav">В начало</span>
            </li>
            <li class="pagination-prev">
                <span class="pagenav">Назад</span>
            </li>
            <li>
                <span class="pagenav">1</span>
            </li>
            <li>
                <a title="2" href="/ukrayna?start=5" class="pagenav">2</a>
            </li>
            <li>
                <a title="3" href="/ukrayna?start=10" class="pagenav">3</a>
            </li>
            <li>
                <a title="4" href="/ukrayna?start=15" class="pagenav">4</a>
            </li>
            <li>
                <a title="5" href="/ukrayna?start=20" class="pagenav">5</a>
            </li>
            <li>
                <a title="6" href="/ukrayna?start=25" class="pagenav">6</a>
            </li>
            <li>
                <a title="7" href="/ukrayna?start=30" class="pagenav">7</a>
            </li>
            <li>
                <a title="8" href="/ukrayna?start=35" class="pagenav">8</a>
            </li>
            <li>
                <a title="9" href="/ukrayna?start=40" class="pagenav">9</a>
            </li>
            <li>
                <a title="10" href="/ukrayna?start=45" class="pagenav">10</a>
            </li>
            <li class="pagination-next">
                <a title="Вперёд" href="/ukrayna?start=5" class="pagenav">Вперёд</a>
            </li>
            <li class="pagination-end">
                <a title="В конец" href="/ukrayna?start=1495" class="pagenav">В конец</a>
            </li>
        </ul>
    </div>
    -->