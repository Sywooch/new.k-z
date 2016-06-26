<div class="nspArt" style="width:100%!important;">
    <div style="padding:16px 0">
        <a href="<?=$news->fullLink?>">
            <img class="nspImage tleft fleft" alt="<?=$news->title?>" style="width:66px;height:40px;margin:0 14px 0 0;" src="<?=$news->imagePreview?>">
        </a>
        <h4 class="nspHeader tleft fleft">
            <a href="<?=$news->fullLink?>" title="<?=$news->title?>"><?=$news->getTitle(23)?></a>
        </h4>
        <p class="nspInfo  tleft fleft"><?=\Yii::$app->formatter->asDate($news->publishDate)?></p>
    </div>
</div>