<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $name string */
/* @var $message string */
/* @var $exception Exception */

$this->title = "404 - Ошибка: 404";
?>
<div id="frame">
    <div id="outline">
        <div id="errorNumber"><h1>404</h1>
            <h2>Материал не найден</h2></div>
        <div id="errorboxbody">
            <p><strong>Вы не можете посетить текущую страницу по причине:</strong></p>

            <ol>
                <li><b>просроченная закладка/избранное</b></li>
                <li>поисковый механизм, у которого <strong>просрочен список для этого сайта</strong></li>
                <li><strong>пропущен адрес</strong></li>
                <li>у вас <strong>нет права доступа</strong> на эту страницу</li>
                <li>Запрашиваемый ресурс не найден.</li>
                <li>В процессе обработки вашего запроса произошла ошибка.</li>
            </ol>

            <p><strong>Пожалуйста, перейдите на одну из следующих страниц:</strong></p>

            <ol>
                <li><a href="/index.php" title="Вернуться на Домашнюю страницу">Домашняя страница</a></li>
            </ol>
        </div>


    </div>
</div>
