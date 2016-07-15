<?php
empty($color) ? $color = 'blue' : '';

$news = $category->getTopNews(1);
$news = $news[0];

    ?>
    <div class="box nsp <?= $color ?> big_title">
        <div>
            <h3 class="header">
                <span><?= $category->title ?></span>
            </h3>
            <div class="content">
                <div class="nspMain nspFs100 activated" id="nsp-nsp_154" style="width:100%;">
                    <div class="nspArts bottom" style="width:100%;">
                        <div style="width: 211px; overflow: hidden;" class="nspArtScroll1">
                            <div style="width: 100000px;" class="nspArtScroll2">
                                <div style="width: 211px; float: left;" class="nspArtPage">
                                    <div class="nspArt" style="width:100%!important;">
                                        <div style="padding:0">
                                            <h4 class="nspHeader tleft fnone">
                                                <a href="<?= $news->fullLink ?>"
                                                   title="<?= $news->title ?>"><?= $news->title ?></a>
                                            </h4>
                                            <a class="leftNews" href="<?= $news->fullLink ?>">
                                                <img class="image" alt="<?= $news->title ?>" src="<?= $news->imagePreview ?>">
                                            </a>
                                            <p class="nspText tleft fleft longText" lang="ru">
                                                <?= strip_tags($news->getTextPreview(0), '<a></a>') ?> <a class="readon inline" href="<?= $news->fullLink ?>">Подробнее</a>
                                            </p>
                                            <p class="nspInfo tleft fleft"></p>
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