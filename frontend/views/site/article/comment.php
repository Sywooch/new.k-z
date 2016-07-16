<?php
use yii\helpers\Html;
?>
<div class="comment-box">
    <span class="comments-vote">
	    <span id="comment-vote-holder-<?=$model->id?>">
            <a href="#" class="vote-good" title="Хороший комментарий!"></a>
            <a href="#" class="vote-poor" title="Плохой комментарий!"></a>
            <?=!empty($model->isGood) ? Html::tag('span', "+{$model->isGood}", ['class' => 'vote-good']) : ''?>
            <?=!empty($model->isBad) ? Html::tag('span', "-{$model->isBad}", ['class' => 'vote-poor']) : ''?>
	    </span>
    </span>
    <a class="comment-anchor" href="<?=$news->fullLink?>#comment-<?=$model->id?>" id="comment-<?=$model->id?>">#<?=$pos?></a>
    <span class="comment-author"><?=$model->author?></span>
    <span class="comment-date"><?=\Yii::$app->formatter->asDatetime($model->date)?></span>
    <div class="comment-body" id="comment-body-<?=$model->id?>"><?=$model->text?></div>
    <span class="comments-buttons"></span>
</div>