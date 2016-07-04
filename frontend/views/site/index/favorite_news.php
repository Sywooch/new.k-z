<div style="width: 512px; float: left;" class="nspArtPage">
    <div class="nspArt" style="width:100%!important;">
        <div style="padding:0">
            <a href="<?=$news->fullLink?>">
                <img class="nspImage tleft fleft" src="<?=$news->imagePreview?>" alt="<?=$news->title?>" style="width:512px;height:285px;margin:60px 0 0 0;">
            </a>
            <h4 class="nspHeader tleft fnone">
                <a href="<?=$news->fullLink?>" title="<?=$news->title?>"><?=$news->title?></a>
                <p class="nspInfo  tleft fnone"><?=\Yii::$app->formatter->asDate($news->publishDate)?></p>
            </h4>
        </div>
    </div>
</div>