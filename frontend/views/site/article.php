<?php
/** @var \frontend\models\News $article */
/** @var \frontend\models\CommentForm $commentForm */
use yii\helpers\Html;

$this->title = $article->title;

$this->params['breadcrumbs'][] = $this->title;

echo Html::tag('h2', $this->title)?>
<ul class="actions">
    <li class="print-icon">
        <a href="?tmpl=component&amp;print=1&amp;layout=default&amp;page=" title="Печать" onclick="window.open(this.href,'win2','status=no,toolbar=no,scrollbars=yes,titlebar=no,menubar=no,resizable=yes,width=640,height=480,directories=no,location=no'); return false;" rel="nofollow">
            <img alt="" src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAABAAAAAPCAYAAADtc08vAAABgUlEQVR42oWTu0/CUBjF75/KxCMMLAgp6YOGx6K2PhIhjiiQlBpJZJGlLgy4gQsjM2ESJEGUY88VjIUqX3LSm3N+56a9zRViZ8yLZlu1bqGc3EA53shf02MmDo1mN8H53BGH2cENclZTFiazD0xeV9/y1/SY/VtOp9PI2Y6EF+/rgOQGfkYmUCoUCm3DMEDlfemX91hjf+gxy29Yil2h6/oPlEgkkEqlkEwmEY1GA6LHjMx22BWqqmI2n2MwGEDTdBSLJZRKZfn8ra1Hhiw77MoNlsulNGz7DFeVCirVaqiYkSHLjtxA0zRMp1M8dDqIRCKIxWKIx+OhYkaGLDvsyjMYj8d47HZxalnIZDLIZrOhYkaGLDvyDHiao9EInueh1+vBdV20Wi4cxwmIHjMyZNlhV5imieHwBf3+s/wmvmaj0UCtVguIHjMyZNlhVyiK8sQFZfivpJ7fyX++WK3xthHX9JiR2fLs7t+FM+fvu+BnB+/CUfnaU616yG2sg9ku/wVeuz2xDElszwAAAABJRU5ErkJggg==">
        </a>
    </li>
</ul>
<dl class="article-info">
    <dt class="article-info-term">Подробности</dt>
    <dd class="published">
        Опубликовано <?=Yii::$app->formatter->asDatetime($article->publishDate, 'php:d.m.Y H:i');?>
    </dd>
    <dd class="createdby">
        Автор: <?=$article->author?>
    </dd>
</dl>
<div class="articleContent">
    <?=$article->textPreview.$article->text?>
</div>
<div class="clear" style="clear: both"></div>
<div id="jc">
    <div id="comments">
        <h4>Комментарии <a class="refresh" href="#" title="Обновить список комментариев">&nbsp;</a></h4>
        <?=\yii\widgets\ListView::widget([
            'dataProvider'  =>  new \yii\data\ActiveDataProvider([
                'query' =>  $article->getComments(),
                'sort'  =>  [
                    'defaultOrder'  =>  [
                        'date'  =>  SORT_DESC
                    ]
                ]
            ]),
            'options'   =>  [
                'id'    =>  'comments-list',
                'class' =>  'comments-list'
            ],
            'summary'   =>  false,
            'emptyText' =>  'Комментарии отсутствуют. Возможно, ваш будет первым?',
            'itemView'  =>  function($model, $key, $pos) use(&$article){
                return $this->render('article/comment',
                    [
                        'model'     =>  $model,
                        'pos'       =>  ($pos + 1),
                        'news'      =>  $article
                    ]
                );
            }
        ])?>
        <div id="comments-list-footer">
            <a class="refresh" href="#" title="Обновить список комментариев">Обновить список комментариев</a>
            <br>
        </div>
    </div>
    <h4>Добавить комментарий</h4>
    <a id="addcomments" href="#addcomments"></a>
    <?php
    $form = \kartik\form\ActiveForm::begin([
        'type'  =>  \kartik\form\ActiveForm::TYPE_HORIZONTAL,
        'id'    =>  'comments-form',
    ]);

    echo $form->field($commentForm, 'name'),
         $form->field($commentForm, 'email'),
         $form->field($commentForm, 'comment')->textarea(),
         $form->field($commentForm, 'captcha'),
         Html::tag('div',
             Html::button('Отправить', ['type' => 'submit']),
             [
                 'style'    =>  'display: block; margin-left: 113px;'
             ]).
        Html::tag('div', '', ['style' => 'clear: both;']);

    $form->end();
    ?>
    <div id="comments-footer" align="center"></div>
</div>