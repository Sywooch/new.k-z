<?php
use yii\helpers\Html;
?>
<div class="even" id="comment-item-<?=$model->id?>">
    <div class="rbox">
        <div class="rbox_tr">
            <div class="rbox_tl">
                <div class="rbox_t">&nbsp;</div>
            </div>
        </div>
        <div class="rbox_m">
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
                <span class="comments-buttons">
                <!--<a href="#" onclick="jcomments.quoteComment(22710); return false;">Цитировать</a>-->
                </span>
            </div>
            <div class="clear"></div>
        </div>
        <div class="rbox_br">
            <div class="rbox_bl">
                <div class="rbox_b">&nbsp;</div>
            </div>
        </div>
    </div>
</div>