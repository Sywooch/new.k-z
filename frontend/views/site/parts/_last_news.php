<div class="nspArt" style="width:100%!important;">
    <div style="padding:0 ">
        <p class="nspInfo tleft fnone"><?=Yii::$app->formatter->asDatetime($news->publishDate, 'php:d.m.Y H:i')?></p>
        <h4 class="nspHeader tleft fnone">
            <a href="<?=$news->fullLink?>" title="<?=$news->title?>">
                <?=$news->getTitle(28)?>
            </a>
        </h4>
    </div>
</div>