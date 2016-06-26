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
                                                   title="<?= $news->title ?>"><?= $news->getTitle(23) ?></a>
                                            </h4>
                                            <a href="<?= $news->fullLink ?>">
                                                <img class="nspImage tleft fleft" alt="<?= $news->title ?>"
                                                     style="width:206px;height:260px;margin:0 0 10px 0;"
                                                     src="<?= $news->imagePreview ?>">
                                            </a>
                                            <p class="nspText tleft fleft">
                                                <?= $news->getTextPreview(288) ?> <a class="readon inline"
                                                                                     href="<?= $news->fullLink ?>">Подробнее</a>
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