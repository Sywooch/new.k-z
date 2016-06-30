<?php
use frontend\models\Menu;
use yii\helpers\Html;
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
        <div id="gkbottombottom1" class="gkCol gkColLeft">
            <div>
                <div class="box nsp blue color_title small">
                    <div>
                        <h3 class="header">
                            <span>Дела всемирные</span>
                        </h3>
                        <div class="content">
                            <div class="nspMain nspFs100 activated" id="nsp-nsp_203" style="width:100%;">
                                <div class="nspLinksWrap bottom" style="width:99.9%;">
                                    <div class="nspLinks" style="margin:0;">
                                        <div style="width: 228px; overflow: hidden;" class="nspLinkScroll1">
                                            <div style="width: 100000px;" class="nspLinkScroll2">
                                                <ul class="nspList" style="width: 228px; float: left;">
                                                    <?php foreach($btmArticles['1']['1'] as $b){ ?>
                                                        <li>
                                                            <h4>
                                                                <a href="/<?=$b['categorylink']?>/<?=$b['id']?>-<?=$b['link']?>" title="<?=$b['title']?>"><?=mb_strlen($b['title'], 'UTF-8') > 28 ? trim(mb_substr($b['title'], 0, 28, 'UTF-8')).'…' : $b['title']?></a>
                                                            </h4>
                                                        </li>
                                                    <?php } ?>
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

        <div id="gkbottombottom2" class="gkCol gkColCenter">
            <div>
                <div class="box nsp blue color_title small">
                    <div>
                        <h3 class="header">
                            <span>Правовой акцент</span>
                        </h3>
                        <div class="content">
                            <div class="nspMain nspFs100 activated" id="nsp-nsp_205" style="width:100%;">
                                <div class="nspLinksWrap bottom" style="width:99.9%;">
                                    <div class="nspLinks" style="margin:0;">
                                        <div style="width: 230px; overflow: hidden;" class="nspLinkScroll1">
                                            <div style="width: 100000px;" class="nspLinkScroll2">
                                                <ul class="nspList" style="width: 230px; float: left;">
                                                    <?php foreach($btmArticles['1']['2'] as $b){ ?>
                                                        <li>
                                                            <h4>
                                                                <a href="/<?=$b['categorylink']?>/<?=$b['id']?>-<?=$b['link']?>" title="<?=$b['title']?>"><?=mb_strlen($b['title'], 'UTF-8') > 28 ? trim(mb_substr($b['title'], 0, 28, 'UTF-8')).'…' : $b['title']?></a>
                                                            </h4>
                                                        </li>
                                                    <?php } ?>
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

        <div id="gkbottombottom3" class="gkCol gkColCenter">
            <div>
                <div class="box nsp blue color_title small">
                    <div>
                        <h3 class="header">
                            <span>Судебные хроники</span>
                        </h3>
                        <div class="content">
                            <div class="nspMain nspFs100 activated" id="nsp-nsp_204" style="width:100%;">
                                <div class="nspLinksWrap bottom" style="width:99.9%;">
                                    <div class="nspLinks" style="margin:0;">
                                        <div style="width: 230px; overflow: hidden;" class="nspLinkScroll1">
                                            <div style="width: 100000px;" class="nspLinkScroll2">
                                                <ul class="nspList" style="width: 230px; float: left;">
                                                    <?php foreach($btmArticles['1']['3'] as $b){ ?>
                                                        <li>
                                                            <h4>
                                                                <a href="/<?=$b['categorylink']?>/<?=$b['id']?>-<?=$b['link']?>" title="<?=$b['title']?>"><?=mb_strlen($b['title'], 'UTF-8') > 28 ? trim(mb_substr($b['title'], 0, 28, 'UTF-8')).'…' : $b['title']?></a>
                                                            </h4>
                                                        </li>
                                                    <?php } ?>
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

        <div id="gkbottombottom4" class="gkCol gkColRight">
            <div>
                <div class="box nsp blue color_title small">
                    <div>
                        <h3 class="header">
                            <span>Резонансные вердикты</span>
                        </h3>
                        <div class="content">
                            <div class="nspMain nspFs100 activated" id="nsp-nsp_206" style="width:100%;">
                                <div class="nspLinksWrap bottom" style="width:99.9%;">
                                    <div class="nspLinks" style="margin:0;">
                                        <div style="width: 228px; overflow: hidden;" class="nspLinkScroll1">
                                            <div style="width: 100000px;" class="nspLinkScroll2">
                                                <ul class="nspList" style="width: 228px; float: left;">
                                                    <?php foreach($btmArticles['1']['4'] as $b){ ?>
                                                        <li>
                                                            <h4>
                                                                <a href="/<?=$b['categorylink']?>/<?=$b['id']?>-<?=$b['link']?>" title="<?=$b['title']?>"><?=mb_strlen($b['title'], 'UTF-8') > 28 ? trim(mb_substr($b['title'], 0, 28, 'UTF-8')).'…' : $b['title']?></a>
                                                            </h4>
                                                        </li>
                                                    <?php } ?>
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
    </div>

    <div id="gkMiddleNav2" class="gkWrap">
        <ul class="menu">
            <?php foreach(Menu::findByAlias('top-menu-3')->items as $menuItem){
                echo Html::tag('li', Html::a($menuItem->name, "/$menuItem->link"));
            } ?>
        </ul>
    </div>

    <div id="gkBottom2" class="gkWrap">
        <div id="gkbottombottom7" class="gkCol gkColLeft">
            <div>
                <div class="box nsp blue color_title small">
                    <div>
                        <h3 class="header">
                            <span>Известные ответчики</span>
                        </h3>
                        <div class="content">
                            <div class="nspMain nspFs100 activated" id="nsp-nsp_207" style="width:100%;">
                                <div class="nspLinksWrap bottom" style="width:99.9%;">
                                    <div class="nspLinks" style="margin:0;">
                                        <div style="width: 228px; overflow: hidden;" class="nspLinkScroll1">
                                            <div style="width: 100000px;" class="nspLinkScroll2">
                                                <ul class="nspList" style="width: 228px; float: left;">
                                                    <?php foreach($btmArticles['2']['1'] as $b){ ?>
                                                        <li>
                                                            <h4>
                                                                <a href="/<?=$b['categorylink']?>/<?=$b['id']?>-<?=$b['link']?>" title="<?=$b['title']?>"><?=mb_strlen($b['title'], 'UTF-8') > 28 ? trim(mb_substr($b['title'], 0, 28, 'UTF-8')).'…' : $b['title']?></a>
                                                            </h4>
                                                        </li>
                                                    <?php } ?>
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

        <div id="gkbottombottom8" class="gkCol gkColCenter">
            <div>
                <div class="box nsp blue color_title small">
                    <div>
                        <h3 class="header">
                            <span>Знаменитые истцы</span>
                        </h3>
                        <div class="content">
                            <div class="nspMain nspFs100 activated" id="nsp-nsp_208" style="width:100%;">
                                <div class="nspLinksWrap bottom" style="width:99.9%;">
                                    <div class="nspLinks" style="margin:0;">
                                        <div style="width: 230px; overflow: hidden;" class="nspLinkScroll1">
                                            <div style="width: 100000px;" class="nspLinkScroll2">
                                                <ul class="nspList" style="width: 230px; float: left;">
                                                    <?php foreach($btmArticles['2']['2'] as $b){ ?>
                                                        <li>
                                                            <h4>
                                                                <a href="/<?=$b['categorylink']?>/<?=$b['id']?>-<?=$b['link']?>" title="<?=$b['title']?>"><?=mb_strlen($b['title'], 'UTF-8') > 28 ? trim(mb_substr($b['title'], 0, 28, 'UTF-8')).'…' : $b['title']?></a>
                                                            </h4>
                                                        </li>
                                                    <?php } ?>
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

        <div id="gkbottombottom9" class="gkCol gkColCenter">
            <div>
                <div class="box nsp blue color_title small">
                    <div>
                        <h3 class="header">
                            <span>Интернет-конфликты</span>
                        </h3>
                        <div class="content">
                            <div class="nspMain nspFs100 activated" id="nsp-nsp_209" style="width:100%;">
                                <div class="nspLinksWrap bottom" style="width:99.9%;">
                                    <div class="nspLinks" style="margin:0;">
                                        <div style="width: 230px; overflow: hidden;" class="nspLinkScroll1">
                                            <div style="width: 100000px;" class="nspLinkScroll2">
                                                <ul class="nspList" style="width: 230px; float: left;">
                                                    <?php foreach($btmArticles['2']['3'] as $b){ ?>
                                                        <li>
                                                            <h4>
                                                                <a href="/<?=$b['categorylink']?>/<?=$b['id']?>-<?=$b['link']?>" title="<?=$b['title']?>"><?=mb_strlen($b['title'], 'UTF-8') > 28 ? trim(mb_substr($b['title'], 0, 28, 'UTF-8')).'…' : $b['title']?></a>
                                                            </h4>
                                                        </li>
                                                    <?php } ?>
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

        <div id="gkbottombottom10" class="gkCol gkColRight">
            <div>
                <div class="box nsp blue color_title small">
                    <div>
                        <h3 class="header">
                            <span>Популярные темы</span>
                        </h3>
                        <div class="content">
                            <div class="nspMain nspFs100 activated" id="nsp-nsp_210" style="width:100%;">
                                <div class="nspLinksWrap bottom" style="width:99.9%;">
                                    <div class="nspLinks" style="margin:0;">
                                        <div style="width: 228px; overflow: hidden;" class="nspLinkScroll1">
                                            <div style="width: 100000px;" class="nspLinkScroll2">
                                                <ul class="nspList" style="width: 228px; float: left;">
                                                    <?php foreach($btmArticles['2']['4'] as $b){ ?>
                                                        <li>
                                                            <h4>
                                                                <a href="/<?=$b['categorylink']?>/<?=$b['id']?>-<?=$b['link']?>" title="<?=$b['title']?>"><?=mb_strlen($b['title'], 'UTF-8') > 28 ? trim(mb_substr($b['title'], 0, 28, 'UTF-8')).'…' : $b['title']?></a>
                                                            </h4>
                                                        </li>
                                                    <?php } ?>
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
    </div>
</div>