<?php
use frontend\models\Menu;
use yii\helpers\Html;

?>
<div id="gkMenuWrap" class="clear">
    <div id="gkTopMenu">
        <div id="gkTopMenu1">
            <ul class="menu">
                <?php foreach(Menu::findByAlias('top-menu-1')->items as $menuItem){
                    echo Html::tag('li', Html::a($menuItem->name, "/$menuItem->link"));
                } ?>
            </ul>
        </div>
        <div id="gkSearch">
            <form action="/" method="post">
                <div class="search">
                    <input autocomplete="off" name="searchword" id="mod-search-searchword" maxlength="20" class="inputbox" size="20" value="Поиск..." onblur="if (this.value=='') this.value='Поиск...';" onfocus="if (this.value=='Поиск...') this.value='';" type="text">
                </div>
            </form>
        </div>
    </div>
    <div id="gkMainMenu" class="clear">
        <div class="gk-menu">
            <ul class="gkmenu level0">
                <?php foreach(Menu::findByAlias('mainmenu')->items as $menuItem){
                    echo Html::tag('li', Html::a($menuItem->name, "/$menuItem->link"));
                } ?>
            </ul>
        </div>
    </div>
    <div id="gkMiddleMenu" class="clear">
        <ul class="menu">
            <?php foreach(Menu::findByAlias('top-menu-3')->items as $menuItem){
                echo Html::tag('li', Html::a($menuItem->name, "/$menuItem->link"));
            } ?>
        </ul>
    </div>
    <div id="gkBottomMenu" class="clear">
        <div id="gkBreadcrumb">
            <div class="breadcrumbs">
                <ul>
                    <li class="pathway">Главная</li>
                </ul>
            </div>
        </div>
        <div id="gkTopMenu2">
            <ul class="menu">
                <?php foreach(Menu::findByAlias('top-menu-2')->items as $menuItem){
                    echo Html::tag('li', Html::a($menuItem->name, "/$menuItem->link"));
                } ?>
            </ul>
        </div>
    </div>
</div>