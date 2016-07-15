<?php
use frontend\models\Category;

if(empty($category)){
    $category = Category::findOne(['id' => $cat]);
}

$topNews = $category->getTopNews(4);
$firstNews = $topNews[0];
unset($topNews[0]);
?>
<div class="content">
    <div class="nspMain nspFs100 activated" id="nsp-nsp_152" style="width:100%;">
        <div class="nspArts right" style="width:52%;">
            <div style="width: 236px; overflow: hidden;" class="nspArtScroll1">
                <div style="width: 236px; float: left;" class="nspArtPage">
                    <div class="nspArt topFourNews" style="width:100%!important;">
                        <div style="padding:0 10px 0 0" class="newsBigBlock">
                            <h4 class="nspHeader tleft fnone">
                                <a href="<?=$firstNews->fullLink?>" title="<?=$firstNews->title?>"><?=$firstNews->title?></a>
                            </h4>
                            <a href="<?=$firstNews->fullLink?>">
                                <img class="nspImage tleft fleft" alt="<?=$firstNews->title?>" style="width:225px;height:125px;margin:6px 14px 0 0;" src="<?=$firstNews->imagePreview?>">
                            </a>
                            <div class="tleft fleft">
                                <span class="readMore">... <a class="readon inline" href="<?=$firstNews->fullLink?>">Подробнее</a></span>
                                <p class="nspText longText" lang="ru"><?=strip_tags($firstNews->getTextPreview(0), '<a></a>')?></p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="nspLinksWrap right" style="width:47.9%;">
            <div class="nspLinks" style="margin:0 0 0 5px;">
                <div style="width: 212px; overflow: hidden;" class="nspLinkScroll1">
                    <div style="width: 100000px;" class="nspLinkScroll2">
                        <ul class="nspList" style="width: 212px; float: left;">
                            <?php foreach($topNews as $news){?>
                                <li>
                                    <h4 class="longHeader">
                                        <a href="<?=$news->fullLink?>" title="<?=$news->title?>"><?=$news->title?></a>
                                    </h4>
                                    <?=\yii\helpers\Html::tag('p', strip_tags($news->getTextPreview(0), '<a></a>'), ['class' => 'longText', 'lang' => 'ru'])?>
                                </li>
                            <?php } ?>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>