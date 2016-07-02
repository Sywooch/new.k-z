<?php
use frontend\models\Category;
use frontend\models\Menu;
use yii\helpers\Html;

/** @var Category[] $firstRowCategories */
?>

<div id="gkBottomWrap" class="gkWrap clear">
    <div id="gkMiddleNav1" class="gkWrap">
        <ul class="menu">
            <?php foreach(Menu::findByAlias('top-menu-1')->items as $menuItem){
                echo Html::tag('li', Html::a($menuItem->name, "/$menuItem->link"));
            } ?>
        </ul>
    </div>
    <div id="gkBottom1" class="gkWrap">
        <?php  foreach($firstRowCategories as $category){ ?>
        <div id="gkbottombottom4" class="gkCol gkColRight">
            <div>
                <div class="box nsp blue color_title small">
                    <div>
                        <h3 class="header">
                            <span><?=$category->title?></span>
                        </h3>
                        <div class="content">
                            <div class="nspMain nspFs100 activated" id="nsp-nsp_206" style="width:100%;">
                                <div class="nspLinksWrap bottom" style="width:99.9%;">
                                    <div class="nspLinks" style="margin:0;">
                                        <div style="width: 228px; overflow: hidden;" class="nspLinkScroll1">
                                            <div style="width: 100000px;" class="nspLinkScroll2">
                                                <ul class="nspList" style="width: 228px; float: left;">
                                                    <?php foreach($category->getTopNews(3) as $news){
                                                        echo Html::tag('li', Html::tag('h4', Html::a($news->getTitle(28), $news->fullLink)));
                                                    } ?>
                                                </ul>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <?php } ?>
    </div>

    <div id="gkMiddleNav2" class="gkWrap">
        <ul class="menu">
            <?php foreach(Menu::findByAlias('top-menu-3')->items as $menuItem){
                echo Html::tag('li', Html::a($menuItem->name, "/$menuItem->link"));
            } ?>
        </ul>
    </div>

    <div id="gkBottom2" class="gkWrap">
        <?php  foreach($secondRowCategories as $category){ ?>
            <div id="gkbottombottom4" class="gkCol gkColRight">
                <div>
                    <div class="box nsp blue color_title small">
                        <div>
                            <h3 class="header">
                                <span><?=$category->title?></span>
                            </h3>
                            <div class="content">
                                <div class="nspMain nspFs100 activated" id="nsp-nsp_206" style="width:100%;">
                                    <div class="nspLinksWrap bottom" style="width:99.9%;">
                                        <div class="nspLinks" style="margin:0;">
                                            <div style="width: 228px; overflow: hidden;" class="nspLinkScroll1">
                                                <div style="width: 100000px;" class="nspLinkScroll2">
                                                    <ul class="nspList" style="width: 228px; float: left;">
                                                        <?php foreach($category->getTopNews(3) as $news){
                                                            echo Html::tag('li', Html::tag('h4', Html::a($news->getTitle(28), $news->fullLink)));
                                                        } ?>
                                                    </ul>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        <?php } ?>
    </div>
</div>