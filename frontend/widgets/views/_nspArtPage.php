<div style="width: 512px; float: left;" class="nspArtPage">
    <div class="nspArt " style="width:100%!important;">
        <div style="padding:0">
            <a href="<?=$model->fulllink?>">
                <img class="nspImage tleft fleft" src="<?=\Yii::$app->params['imagesRoot'].$model->image?>" style="width:512px;height:285px;margin:60px 0 0 0;">
            </a>
            <h4 class="nspHeader tleft fnone"><a href="<?=$model->fulllink?>" title="<?=$model->title?>"><?=$model->title?></a>
                <p class="nspInfo tleft fnone"><?=\Yii::$app->formatter->asDate($model->publishDate, 'php:d m Y')?></p>
            </h4>
        </div>
    </div>
</div>