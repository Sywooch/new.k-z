<?php
use frontend\assets\AppAsset;
use frontend\models\Category;
use frontend\models\Menu;
use frontend\models\News;
use frontend\widgets\AdsSliderWidget;
use yii\helpers\Html;
use yii\helpers\Url;
use yii\widgets\Breadcrumbs;

/* @var $this \yii\web\View */
/* @var $content string */

$this->title = 'Конфликты и законы - '.$this->title;
$this->registerLinkTag(['href' => '/images/favicon.ico', 'rel'  =>  'shortcut icon']);

AppAsset::register($this);

$this->beginPage() ?>
<!DOCTYPE html>
<html lang="<?= Yii::$app->language ?>">
<head>
    <meta charset="<?= Yii::$app->charset ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <?= Html::csrfMetaTags() ?>
    <title><?= Html::encode($this->title) ?></title>
    <?php $this->head() ?>
</head>
<body>
<?php $this->beginBody() ?>
<div class="gkMain gkWrap" id="gkPage">
    <div id="gkLogoWrap">

        <h1 id="gkLogo">
            <a href="/./" class="cssLogo"></a>
        </h1>

        <div id="gkHighlighter">
            <?php foreach([] as $banner){ ?>
                <div class="bannergroup">
                    <div class="banneritem">
                        <?=$banner->code?>
                    </div>
                </div>
            <?php } ?>
        </div>
    </div>
    <?=$this->render('_topMenu', [
        'ct'        => explode('/', \Yii::$app->request->url)[1]
    ]),
    Html::tag('div', '', ['id' => 'system-message-container'])?>
    <div id="mainContent" class="gkWrap clear">
        <div id="gkMain">
            <div id="gkMainBlock" class="gkMain">
                <div id="gkContent" class="gkMain gkCol gkPaddingR">
                    <div id="gkContentMainbody" class="gkMain gkPaddingR">
                        <div id="gkComponentWrap" class="gkMain" style="font-size: 100%; width: 100%;">
                            <div id="gkMainBody" class="gkMain gkMarginTBLR">
                                <div id="gkMainBodyWrap">
                                    <div id="gkBreadcrumbMainbody">
                                        <div class="breadcrumbs">
                                            <?= Breadcrumbs::widget([
                                                'itemTemplate'  =>  '<li class="pathway">{link}</li><li class="separator">/</li>',
                                                'activeItemTemplate'    =>  '<li class="pathway active">{link}</li>',
                                                'encodeLabels'  =>  false,
                                                'homeLink'  =>  [
                                                    'label' =>  'Главная',
                                                    'url'   =>  '/'
                                                ],
                                                'links' => isset($this->params['breadcrumbs']) ? $this->params['breadcrumbs'] : [],
                                            ]) ?>
                                        </div>
                                    </div>
                                    <div id="gkComponent">
                                        <div class="item-page">
                                            <?= $content ?>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div id="gkContentBottom" class="gkMain">
                        <div class="box">
                            <div>
                                <div class="content">
                                    <div class="bannergroup">
                                        <!-- Job.Ukr.Net -->
                                        <style>
                                            .job-block a, .job-block a:hover {font-family: Arial, sans-serif;font-size: 12px;color:#000000;font-weight:bold;text-decoration: none}
                                            .job-block {background:#eeeeee url(http://informers.ukr.net/job/sim/jobnewimg/bottom-bg.gif) repeat-x bottom;border: 1px solid #c9c9c9;margin: auto auto 20px;width:690px;border-radius:5px; box-shadow:0 0 3px #999;}
                                            .job-block .job-ttl {background:url(http://informers.ukr.net/job/sim/jobnewimg/ttl-bg.gif) repeat-x top;position:relative;padding:5px 105px 5px 12px;border-bottom:1px solid #c9c9c9;text-align:left;border-radius:5px 5px 0 0;overflow:hidden;text-overflow:ellipsis;white-space:nowrap;}
                                            .job-block .job-ttl a {font-family:Tahoma, sans-serif;text-transform:uppercase}
                                            .job-logo-link {position:absolute;top:4px;right:5px;width:103px;height:22px;}
                                            .job-logo-link a {display:block;width:103px;height:22px;_background:none;_filter:progid:DXImageTransform.Microsoft.AlphaImageLoader (src='http://informers.ukr.net/job/sim/jobnewimg/job-logo-medium.png',sizingMethod='scale');cursor:pointer;position:static!important;}
                                            .job-logo-link img {_display:none;border:none}
                                            .job-block .informer-block {padding:3px}
                                            #jobukrnet ul {list-style:none;margin:0;padding:0 0 0 0;background:#FFF;zoom:1}
                                            #jobukrnet ul:after, #jobukrnet ul:before {content:"";display:table;height:0}
                                            #jobukrnet ul:after {clear: both}
                                            #jobukrnet li {overflow:hidden;text-overflow:ellipsis;white-space:nowrap;border-bottom:1px solid #e3e3e3;padding:4px 0;margin:0 4px;line-height:normal;background:none;float:left;width:332px}
                                            #jobukrnet a {margin: 0 3px}
                                            #jobukrnet span {color:#006fce;font-weight:bold;float:right;margin-right:5px;letter-spacing: -1px}
                                            .job-block .bottom-link-1, .job-block .bottom-link-2, .job-block .bottom-link-3 {border-left:1px solid #fff; margin:4px 0 0 !important;padding: 2px 22px 2px 3px !important;background:url(http://informers.ukr.net/job/sim/jobnewimg/bottom-links/link-back-1000px.png) no-repeat right 0;overflow:hidden;text-overflow:ellipsis;white-space:nowrap;}
                                        </style>
                                        <div class="job-block">
                                            <div class="job-ttl"><a href="http://job.ukr.net/" target="_blank">Вакансии</a><div class="job-logo-link"><a href="http://job.ukr.net/" target="_blank"><img src="http://informers.ukr.net/job/sim/jobnewimg/job-logo-medium.png" width="103" height="22" /></a></div></div>
                                            <div class="informer-block">
                                                <div id="jobukrnet">Загрузка…</div>
                                                <script language="javascript" src="http://informers.ukr.net/job/js_search.php?c=10&m=2&lang=ru&h&limit=24" charset="windows-1251"></script>
                                                <div class="bottom-link-3"><a target="_blank" href="http://job.ukr.net/city/kiev/">робота в киеве</a></div>
                                                <div class="bottom-link-3"><a target="_blank" href="http://job.ukr.net/city/kiev/">работа киев</a></div>
                                            </div>
                                        </div>
                                        <!-- Job.Ukr.Net -->
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="box">
                            <div>
                                <div class="content">
                                    <div class="bannergroup">
                                        <!-- Kino.Ukr.Net -->
                                        <style>
                                            .kino {border:1px solid #cc0000;margin-top:11px;}
                                            .kino .kinottl {background:#cc0000;padding-bottom:2px;text-align:center;}
                                            .kino .kinottl a {color:#FFF;font-weight:bold;text-decoration:none;}
                                            #kinoukrnet {margin:5px 0;overflow:hidden;zoom:1;}
                                            #kinoukrnet ul {margin:0;padding:0;list-style:none;}
                                            #kinoukrnet li {margin-bottom:7px;float:left;width:23%;*width:22.9%;}
                                            #kinoukrnet img {margin-right:7px;}
                                            #kinoukrnet a {font-size:11px;font-weight:normal!important;}
                                        </style>
                                        <div class="kino">
                                            <div class="kinottl"><a href="http://kino.ukr.net/news/" target="_blank">Новости кино</a></div>
                                            <div id="kinoukrnet">Загрузка...</div>
                                            <script language="javascript" src="http://informers.ukr.net/kino/js.php?c=4&img=left&h&m=1" charset="windows-1251"></script>
                                            <div align="center" style="margin:5px 0;"><b>-=<a href="http://job.ukr.net/" style="color:#cc0000;text-decoration:none;" target="_blank">вакансии</a>=-</b></div>
                                        </div>
                                        <!-- Kino.Ukr.Net -->
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <?=$this->render('_rightMenu')?>
            </div>
        </div>
    </div>
    <?=$this->render('_bottomMenu', [
        'firstRowCategories'    => Category::find()->where(['in', 'id', [33, 35, 38,39]])->all(),
        'secondRowCategories'   => Category::find()->where(['in', 'id', [45, 46, 47,48]])->all(),
    ]);
    $this->endBody() ?>
    <div id="gkFooter" class="gkWrap">
        <div id="gkFooterWrap">
            <div id="gkCopyrights">
                <div id="gkFooterNav">
                    <ul class="menu">
                        <?php foreach(Menu::findByAlias('nizhnee-menyu')->items as $menuItem){
                            echo Html::tag('li', Html::a($menuItem->name, "/$menuItem->link"));
                        } ?>
                    </ul>
                </div>
                        <span>
                            Конфликты и законы © 2008-<?=date('Y')?>.
                            Электронная версия всеукраинского юридического журнала «Конфликты и законы».
                            Свидетельство о госрегистрации: КВ № 13326-2210Р от 19.11.2007 г.
                            Полная или частичная перепечатка материалов сайта разрешается только после письменного согласия редакции. Внимание! Начиная с 21.11.2013 года (дня провала евроинтеграции с ЕС) редакция журнала «Конфликты и законы»(вопреки правилам правописания)оставляет за собой право публиковать слова «партия регионов» и «виктор федорович янукович»  со строчной буквы.
                        </span>
            </div>
        </div>
    </div>
</div>
</body>
</html>
<?php $this->endPage() ?>
