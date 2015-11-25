<?php
use frontend\assets\AppAsset;
use frontend\models\Category;
use frontend\models\News;
use yii\helpers\Html;
use yii\helpers\Url;
use yii\widgets\Breadcrumbs;

/* @var $this \yii\web\View */
/* @var $content string */

$this->title = 'Конфликты и законы - '.$this->title;
$this->registerLinkTag(['href' => '/images/favicon.ico', 'rel'  =>  'shortcut icon']);

$ct = explode('/', \yii::$app->request->url)[1];

$menuItems = [
    '1' =>  Category::getMenu('1'),
    '2' =>  Category::getMenu('2'),
    '3' =>  Category::getMenu('3'),
    '4' =>  Category::getMenu('4')
];

$btmArticles = [
    '1' => [
        '1' =>  News::getTopByCategory('33'),
        '2' =>  News::getTopByCategory('35'),
        '3' =>  News::getTopByCategory('38'),
        '4' =>  News::getTopByCategory('39'),
    ],
    '2' =>  [
        '1' =>  News::getTopByCategory('45'),
        '2' =>  News::getTopByCategory('46'),
        '3' =>  News::getTopByCategory('47'),
        '4' =>  News::getTopByCategory('48'),
    ]
];

$this->registerJsFile('/js/mootools-core.js');
$this->registerJsFile('/js/core.js');
$this->registerJsFile('/js/caption.js');
$this->registerJsFile('/js/mootools-more.js');
$this->registerJsFile('/js/menu.gkmenu.js');
$this->registerJsFile('/js/gk.scripts.js');

$this->registerCssFile('/css/style.portal.mode.4.css');

AppAsset::register($this);
?>
<?php $this->beginPage() ?>
<!DOCTYPE html>
<html lang="<?= Yii::$app->language ?>">
<head>
    <meta charset="<?= Yii::$app->charset ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <?= Html::csrfMetaTags() ?>
    <title><?= Html::encode($this->title) ?></title>
    <script type="text/javascript" src="http://k-z.com.ua/media/system/js/validate.js"></script>
    <script type="text/javascript" src="http://k-z.com.ua/modules/mod_news_pro_gk4/interface/scripts/engine.js"></script>
    <script type="text/javascript" src="http://k-z.com.ua/plugins/content/jw_allvideos/jw_allvideos/includes/js/behaviour.js"></script>
    <script type="text/javascript" src="http://k-z.com.ua/plugins/content/jw_allvideos/jw_allvideos/includes/js/mediaplayer/jwplayer.js"></script>
    <script type="text/javascript" src="http://k-z.com.ua/plugins/content/jw_allvideos/jw_allvideos/includes/js/wmvplayer/silverlight.js"></script>
    <script type="text/javascript" src="http://k-z.com.ua/plugins/content/jw_allvideos/jw_allvideos/includes/js/wmvplayer/wmvplayer.js"></script>
    <script type="text/javascript" src="http://k-z.com.ua/plugins/content/jw_allvideos/jw_allvideos/includes/js/quicktimeplayer/AC_QuickTime.js"></script>
    <script type="text/javascript" src="http://k-z.com.ua/modules/mod_image_show_gk4/styles/gk_sporter2/engine.js"></script>
    <script async="async" defer="defer" type="t" src="http://k-z.com.ua/modules/mod_news_pro_gk4/interface/scripts/engine.portal.mode.4.js"></script>
    <?php $this->head() ?>
</head>
<body>
<script type="text/javascript" src="http://k-z.com.ua/modules/mod_news_pro_gk4/interface/scripts/engine.portal.mode.4.js"></script>
<?php $this->beginBody() ?>
    <div class="gkMain gkWrap" id="gkPage">
        <div class="gkMain gkWrap" id="gkPage">
            <div id="gkLogoWrap">

                <h1 id="gkLogo">
                    <a href="/./" class="cssLogo"></a>
                </h1>

                <div id="gkHighlighter">
                    <div class="bannergroup">
                        <div class="banneritem">

                        </div>
                    </div>
                    <div class="bannergroup">
                        <div class="banneritem">

                        </div>
                    </div>
                </div>
            </div>
            <?=$this->render('_topMenu', [
                'menuItems' => $menuItems,
                'ct'        => $ct
            ]);?>
            <div id="system-message-container"></div>
            <div id="mainContent" class="gkWrap clear">
                <div id="gkTop1" class="gkMain gkWrap">
                    <div id="gkToptop1" class="gkCol gkColLeft">
                        <div class="box nsp header">
                            <div>
                                <div class="content">
                                    <div class="nspMain autoanim nspFs100 activated" id="nsp-nsp_157" style="width:100%;">
                                        <div class="nspArts right" style="width:100%;">
                                            <div class="nspTopInterface">
                                                <div>
                                                    <ul class="nspPagination">
                                                        <li class="active">1</li>
                                                        <li class="">2</li>
                                                        <li class="">3</li>
                                                    </ul>
                                                </div>
                                            </div>
                                            <div style="width: 512px; overflow: hidden;" class="nspArtScroll1">
                                                <div style="width: 100000px;" class="nspArtScroll2">
                                                    <div style="width: 512px; float: left;" class="nspArtPage">
                                                        <div class="nspArt" style="width:100%!important;">
                                                            <div style="padding:0">
                                                                <a href="/polytyka/33907-kakoj-narod-fraktsiya-i-partiya-vyshe-naroda">
                                                                    <img class="nspImage tleft fleft" src="http://k-z.com.ua/modules/mod_news_pro_gk4/cache/512x285xstories.politika.partiya_fraktsiyansp_157.jpg.pagespeed.ic.HaTF6Vsgx2.jpg" alt="Какой народ? Фракция и партия выше народа" style="width:512px;height:285px;margin:60px 0 0 0;">
                                                                </a>
                                                                <h4 class="nspHeader tleft fnone">
                                                                    <a href="/polytyka/33907-kakoj-narod-fraktsiya-i-partiya-vyshe-naroda" title="Какой народ? Фракция и партия выше народа">Какой народ? Фракция и партия выше народа</a>
                                                                    <p class="nspInfo  tleft fnone">07 Апрель 2015</p>
                                                                </h4>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div style="width: 512px; float: left;" class="nspArtPage">
                                                        <div class="nspArt " style="width:100%!important;">
                                                            <div style="padding:0">
                                                                <a href="/byudzhet-ukrainy/33896-nkre-igraet-na-ruku-akhmetovu">
                                                                    <img class="nspImage tleft fleft" src="http://k-z.com.ua/modules/mod_news_pro_gk4/cache/512x285xstories.byudzhet-ukrainy.kiev_energonsp_157.jpg.pagespeed.ic.Ef9BkXCdUy.jpg" alt="НКРЭ играет на руку Ахметову?" style="width:512px;height:285px;margin:60px 0 0 0;">
                                                                </a>
                                                                <h4 class="nspHeader tleft fnone">
                                                                    <a href="/byudzhet-ukrainy/33896-nkre-igraet-na-ruku-akhmetovu" title="НКРЭ играет на руку Ахметову?">НКРЭ играет на руку Ахметову?</a>
                                                                    <p class="nspInfo  tleft fnone">06 Апрель 2015</p>
                                                                </h4>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div style="width: 512px; float: left;" class="nspArtPage">
                                                        <div class="nspArt " style="width:100%!important;">
                                                            <div style="padding:0">
                                                                <a href="/ukrayna/33890-pro-te-yak-stolichna-vlada-prodovzhue-ne-lyubiti-knigarni">
                                                                    <img class="nspImage tleft fleft" src="http://k-z.com.ua/modules/mod_news_pro_gk4/cache/512x285xstories.ukraina.znannya_glavnayansp_157.jpg.pagespeed.ic.-SkUvQDdXY.jpg" alt="Про те, як столична влада продовжує не любити книгарні" style="width:512px;height:285px;margin:60px 0 0 0;">
                                                                </a>
                                                                <h4 class="nspHeader tleft fnone"><a href="/ukrayna/33890-pro-te-yak-stolichna-vlada-prodovzhue-ne-lyubiti-knigarni" title="Про те, як столична влада продовжує не любити книгарні">Про те, як столична влада продовжує не любити книгарні</a>
                                                                    <p class="nspInfo  tleft fnone">05 Апрель 2015</p>
                                                                </h4>
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
                    </div>
                    <div id="gkToptop2" class="gkCol gkColCenter">
                        <div class="box nsp blue color_title small">
                            <div>
                                <div class="content">
                                    <div class="nspMain nspFs100 activated" id="nsp-nsp_155" style="width:100%;">
                                        <div class="nspArts bottom" style="width:100%;">
                                            <div style="width: 198px; overflow: hidden;" class="nspArtScroll1">
                                                <div style="width: 100000px;" class="nspArtScroll2">
                                                    <div style="width: 198px; float: left;" class="nspArtPage">
                                                        <div class="nspArt" style="width:100%!important;">
                                                            <div style="padding:0">
                                                                <!--<a href="/dela-vsemyrnye/33950-rosiya-bilshe-ne-platit-kompensatsij-rodicham-zagiblikh-soldativ">
                                                                    <img class="nspImage tleft fleft" alt="Росія більше не платить компенсацій родичам загиблих солдатів" style="width:195px;height:98px;margin:0 0 7px 0;" src="http://k-z.com.ua/modules/mod_news_pro_gk4/cache/195x98xstories.dela-vsemirnye.oppozitsioner_yashinnsp_155.jpg.pagespeed.ic.RIcIo96PcP.jpg">
                                                                </a>
                                                                <h4 class="nspHeader tleft fnone">
                                                                    <a href="/dela-vsemyrnye/33950-rosiya-bilshe-ne-platit-kompensatsij-rodicham-zagiblikh-soldativ" title="Росія більше не платить компенсацій родичам загиблих солдатів">Росія більше не платить…</a>
                                                                </h4>
                                                                <p class="nspText tleft fleft">
                                                                &nbsp;
                                                                У Росії родичам загиблих на Донбасі бійців перестали виплачувати компенсації. Як розповів в інтерв'ю ТСН опозиціонер Ілля Яшин, з початку року виплати не проводилися.
                                                                «Ось уже в січні і лютому жодних виплат не проводилося зовсім, тому що ...</p>-->
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
                    </div>
                    <div id="gkToptop3" class="gkCol gkColRight">
                        <div class="box nsp grey andrylik">
                            <div>
                                <h3 class="header">
                                    <span>Последние новости</span>
                                </h3>
                                <div class="content">
                                    <div class="nspMain nspFs100 activated" id="nsp-nsp_216" style="width:100%;">
                                        <div class="nspArts bottom" style="width:100%;">
                                            <div style="width: 256px; overflow: hidden;" class="nspArtScroll1">
                                                <div style="width: 100000px;" class="nspArtScroll2">
                                                    <div style="width: 256px; float: left;" class="nspArtPage">
                                                        <?php foreach(News::getTop(9) as $n){
                                                            $link = $n['categorylink'].'/'.$n['id'].'-'.$n['link'];
                                                            ?>
                                                            <div class="nspArt" style="width:100%!important;">
                                                                <div style="padding:0 ">
                                                                    <p class="nspInfo tleft fnone"><?=Yii::$app->formatter->asDatetime($n['publish_date'], 'php:d.m.Y H:i')?></p>
                                                                    <h4 class="nspHeader tleft fnone">
                                                                        <a href="/<?=$link?>" title="<?=$n['title']?>">
                                                                            <?=strlen($n['title']) > 28 ? trim(mb_substr($n['title'], 0, 28, 'UTF-8')).'…' : $n['title']?>
                                                                        </a>
                                                                    </h4>
                                                                </div>
                                                            </div>
                                                        <?php } ?>
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
                <div id="gkToptop7" class="gkCol gkColFull">
                    <div class="box nsp grey dotted">
                        <div>
                            <h3 class="header">
                                <span>Новости дня</span>
                            </h3>
                            <div class="content">
                                <div class="nspMainPortalMode4 nspFs100" id="nsp-nsp_158">
                                    <div class="nspImages">
                                        <div class="nspArts">
                                            <div style="width: 1874px;" class="nspArtsScroll">
                                                <?php
                                                $first = true;
                                                foreach(News::getTop(12) as $n){
                                                    preg_match('/(img|src)=("|\')[^"\'>]+/i', $n['text_preview'], $media);
                                                    $image = '';
                                                    if(sizeof($media) >= 1){
                                                        $image = preg_replace('/src="/', '', $media['0']);
                                                    }
                                                    $link = $n['categorylink'].'/'.$n['id'].'-'.$n['link'];
                                                    $class = $first ? ' active' : '';
                                                ?>
                                                <div class="nspArt<?=$class?>">
                                                    <div style="width:146px;height:83px;">
                                                        <div class="nspImageGallery">
                                                            <a href="/<?=$link?>">
                                                                <img class="nspImage tleft fleft" alt="<?=$n['title']?>" style="width:146px;height:83px;margin:0 0 0 0;" src="<?=$image?>">
                                                            </a>
                                                        </div>
                                                        <div class="nspArtHeadline">
                                                            <div class="nspHeadline">
                                                                <h4 class="nspHeader tleft fnone">
                                                                    <a href="/<?=$link?>" title="<?=$n['title']?>">
                                                                        <?=$n['title']?>
                                                                    </a>
                                                                </h4>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <?php } ?>
                                            </div>
                                        </div>
                                    </div>
                                    <a class="nspPrev">Prev</a>
                                    <a class="nspNext">Next</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div id="gkMain">
                <div id="gkMainBlock" class="gkMain">
                    <div id="gkContent" class="gkMain gkCol gkPaddingR">
                        <div id="gkContentMainbody" class="gkMain gkPaddingR">
                            <div id="gkInset1" class="gkMain gkCol">
                                <div class="box nsp blue big_title">
                                    <div>
                                        <h3 class="header">
                                            <span>Дела всемирные</span>
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
                                                                            <a href="/dela-vsemyrnye/33950-rosiya-bilshe-ne-platit-kompensatsij-rodicham-zagiblikh-soldativ" title="Росія більше не платить компенсацій родичам загиблих солдатів">Росія більше не платить…</a>
                                                                        </h4>
                                                                        <a href="/dela-vsemyrnye/33950-rosiya-bilshe-ne-platit-kompensatsij-rodicham-zagiblikh-soldativ">
                                                                            <img class="nspImage tleft fleft" alt="Росія більше не платить компенсацій родичам загиблих солдатів" style="width:206px;height:260px;margin:0 0 10px 0;" src="http://k-z.com.ua/modules/mod_news_pro_gk4/cache/206x260xstories.dela-vsemirnye.oppozitsioner_yashinnsp_154.jpg.pagespeed.ic.FJFiycJKhy.jpg">
                                                                        </a>
                                                                        <p class="nspText tleft fleft">
                                                            У Росії родичам загиблих на Донбасі бійців перестали виплачувати компенсації. Як розповів в інтерв'ю ТСН опозиціонер Ілля Яшин, з початку року виплати не проводилися.
                                                            «Ось уже в січні і лютому жодних виплат не проводилося зовсім, тому що формально солдати, які перекидалися на територію У... <a class="readon inline" href="/dela-vsemyrnye/33950-rosiya-bilshe-ne-platit-kompensatsij-rodicham-zagiblikh-soldativ">Подробнее</a>
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
                                <div class="box nsp vmargin big_title">
                                    <div>
                                        <h3 class="header">
                                            <span>Украина - ЕС</span>
                                        </h3>
                                        <div class="content">
                                            <div class="nspMain nspFs100 activated" id="nsp-nsp_249" style="width:100%;">
                                                <div class="nspArts bottom" style="width:100%;">
                                                    <div style="width: 211px; overflow: hidden;" class="nspArtScroll1">
                                                        <div style="width: 100000px;" class="nspArtScroll2">
                                                            <div style="width: 211px; float: left;" class="nspArtPage">
                                                                <div class="nspArt" style="width:100%!important;">
                                                                    <div style="padding:0">
                                                                        <h4 class="nspHeader tleft fnone">
                                                                            <a href="/ukraina-es/33941-obse-vzhe-pidtrimue-vvedennya-v-ukrajinu-mirotvortsiv-pislya-obstrilu-svojikh-sposterigachiv" title="ОБСЄ вже підтримує введення в Україну миротворців - після обстрілу своїх спостерігачів">ОБСЄ вже підтримує введення в Україну…</a>
                                                                        </h4>
                                                                        <a href="/ukraina-es/33941-obse-vzhe-pidtrimue-vvedennya-v-ukrajinu-mirotvortsiv-pislya-obstrilu-svojikh-sposterigachiv">
                                                                            <img class="nspImage tleft fleft" alt="ОБСЄ вже підтримує введення в Україну миротворців - після обстрілу своїх спостерігачів" style="width:206px;height:260px;margin:0 0 10px 0;" src="http://k-z.com.ua/modules/mod_news_pro_gk4/cache/206x260xstories.ukraina-es.kanervansp_249.jpg.pagespeed.ic.I5QnvsgyaD.jpg">
                                                                        </a>
                                                                        <p class="nspText tleft fleft">
                                                                        &nbsp;
                                                                        Президент Парламентської асамблеї ОБСЄ Ілкка Канерва висловив обурення за фактом обстрілу спостерігачів місії на Донбасі, повідомляє nr2.com.ua.
                                                                        «Незаконні сепаратисти погрожували співробітникам ОБСЄ на місцях в Україні, і я особливо шкодую про вчорашній випадок, коли...
                                                                            <a class="readon inline" href="/ukraina-es/33941-obse-vzhe-pidtrimue-vvedennya-v-ukrajinu-mirotvortsiv-pislya-obstrilu-svojikh-sposterigachiv">Подробнее</a>
                                                                        </p>
                                                                        <p class="nspInfo  tleft fleft"></p>
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
                                <div class="box nsp grey big_title">
                                    <div>
                                        <h3 class="header">
                                            <span>За рубежом</span>
                                        </h3>
                                        <div class="content">
                                            <div class="nspMain nspFs100 activated" id="nsp-nsp_253" style="width:100%;">
                                                <div class="nspArts bottom" style="width:100%;">
                                                    <div style="width: 211px; overflow: hidden;" class="nspArtScroll1">
                                                        <div style="width: 100000px;" class="nspArtScroll2">
                                                            <div style="width: 211px; float: left;" class="nspArtPage">
                                                                <div class="nspArt" style="width:100%!important;">
                                                                    <div style="padding:0">
                                                                        <h4 class="nspHeader tleft fnone">
                                                                            <a href="/za-rubezhom/33949-u-latviji-rosijsku-propagandu-pririvnyali-do-dityachogo-porno" title="У Латвії російську пропаганду прирівняли до дитячого порно">У Латвії російську пропаганду…</a>
                                                                        </h4>
                                                                        <a href="/za-rubezhom/33949-u-latviji-rosijsku-propagandu-pririvnyali-do-dityachogo-porno">
                                                                            <img class="nspImage tleft fleft" alt="У Латвії російську пропаганду прирівняли до дитячого порно" style="width:206px;height:260px;margin:0 0 10px 0;" src="http://k-z.com.ua/modules/mod_news_pro_gk4/cache/206x260xstories.za-rubezhom.vikensp_253.jpg.pagespeed.ic.3JYkvjcIoH.jpg">
                                                                        </a>
                                                                        <p class="nspText tleft fleft">
                                                                            &nbsp;
                                                                            «Європейцям не подобається термін« антипропаганда», але в ситуації [гібридної] війни немає іншого вибору. Пропаганда ворога деморалізує жителів, і це є однією з цілей Росії. Сіяти сумніви, невпевненість, страх, невдоволення лідера...
                                                                            <a class="readon inline" href="/za-rubezhom/33949-u-latviji-rosijsku-propagandu-pririvnyali-do-dityachogo-porno">Подробнее</a>
                                                                        </p>
                                                                        <p class="nspInfo  tleft fleft"></p>
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
                                <?php
                                $mp = \frontend\models\Ads::byPosition("-1");
                                if($mp){
                                ?>
                                <div class="box dotted">
                                    <div>
                                        <h3 class="header">
                                            <span>Медиа партнеры</span>
                                        </h3>
                                        <div class="content">
                                            <!--<div class="custom dotted">
                                                <table style="width: 205px; height: 213px;" bgcolor="#f5f5f5" border="0" cellpadding="0" cellspacing="0">
                                                    <tbody>
                                                    <tr style="background-color: #eeeeee;">
                                                        <td style="text-align: center;" colspan="2" align="center"><br><noindex><a href="http://www.ukrpohliad.org/" target="blank"><img class="rdcmqnqdmxoepsxhuhoc" alt="ukrpohliad small" src="/images/stories/reklama/ukrpohliad_small.gif" height="31" width="88"></a><br><br><a href="http://job-sbu.org/" target="_blank"><img class="rdcmqnqdmxoepsxhuhoc" alt="job-sbu.100" src="http://k-z.com.ua/images/stories/reklama/100x100xjob-sbu.100.gif.pagespeed.ic.MI09pX0H-q.png" height="100" width="100"></a><br><br></noindex></td>
                                                    </tr>
                                                    </tbody>
                                                </table>
                                            </div>-->
                                        </div>
                                    </div>
                                </div>
                                <?php } ?>
                            </div>
                            <div id="gkComponentWrap" class="gkMain gkCol gkPaddingL">
                                <div class="box nsp no_vmargin">
                                    <div>
                                        <h3 class="header">
                                            <span>Политика</span>
                                        </h3>
                                        <?=$this->render('_four_news', [ 'cat' => 34])?>
                                    </div>
                                </div>
                                <div class="box nsp green no_vmargin">
                                    <div>
                                        <h3 class="header">
                                            <span>Украина</span>
                                        </h3>
                                        <?=$this->render('_four_news', [ 'cat' => 32])?>
                                    </div>
                                </div>
                                <div class="box nsp grey no_vmargin">
                                    <div>
                                        <h3 class="header">
                                            <span>Правовой акцент</span>
                                        </h3>
                                        <?=$this->render('_four_news', [ 'cat' => 35])?>
                                    </div>
                                </div>
                                <div class="box nsp green no_vmargin">
                                    <div>
                                        <h3 class="header">
                                            <span>Судебные хроники</span>
                                        </h3>
                                        <?=$this->render('_four_news', [ 'cat' => 38])?>
                                    </div>
                                </div>
                                <div class="box nsp blue">
                                    <div>
                                        <h3 class="header">
                                            <span>Киевские новости</span>
                                        </h3>
                                        <?=$this->render('_four_news', [ 'cat' => 44])?>
                                    </div>
                                </div>
                                <div class="box nsp no_vmargin">
                                    <div>
                                        <h3 class="header">
                                            <span>Война в Крыму</span>
                                        </h3>
                                        <?=$this->render('_four_news', [ 'cat' => 76])?>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div id="gkContentBottom" class="gkMain">
                            <div class="box">
                                <div>
                                    <div class="content">
                                        <div class="bannergroup">
                                            <div class="banneritem">
                                                <?php /*
                                                <!-- Job.Ukr.Net -->
                                                <style>.job-block a,.job-block a:hover{font-family:Arial,sans-serif;font-size:12px;color:#000;font-weight:bold;text-decoration:none}.job-block{background:#eee url(http://informers.ukr.net/job/sim/jobnewimg/bottom-bg.gif) repeat-x bottom;border:1px solid #c9c9c9;margin:auto auto 20px;width:690px;border-radius:5px;box-shadow:0 0 3px #999}.job-block .job-ttl{background:url(http://informers.ukr.net/job/sim/jobnewimg/ttl-bg.gif) repeat-x top;position:relative;padding:5px 105px 5px 12px;border-bottom:1px solid #c9c9c9;text-align:left;border-radius:5px 5px 0 0;overflow:hidden;text-overflow:ellipsis;white-space:nowrap}.job-block .job-ttl a{font-family:Tahoma,sans-serif;text-transform:uppercase}.job-logo-link{position:absolute;top:4px;right:5px;width:103px;height:22px}.job-logo-link a{display:block;width:103px;height:22px;_background:none;_filter:progid:DXImageTransform.Microsoft.AlphaImageLoader (src='http://informers.ukr.net/job/sim/jobnewimg/job-logo-medium.png',sizingMethod='scale');cursor:pointer;position:static!important}.job-logo-link img{_display:none;border:none}.job-block .informer-block{padding:3px}#jobukrnet ul{list-style:none;margin:0;padding:0 0 0 0;background:#fff;zoom:1}#jobukrnet ul:after,#jobukrnet ul:before{content:"";display:table;height:0}#jobukrnet ul:after{clear:both}#jobukrnet li{overflow:hidden;text-overflow:ellipsis;white-space:nowrap;border-bottom:1px solid #e3e3e3;padding:4px 0;margin:0 4px;line-height:normal;background:none;float:left;width:332px}#jobukrnet a{margin:0 3px}#jobukrnet span{color:#006fce;font-weight:bold;float:right;margin-right:5px;letter-spacing:-1px}.job-block .bottom-link-1,.job-block .bottom-link-2,.job-block .bottom-link-3{border-left:1px solid #fff;margin:4px 0 0!important;padding:2px 22px 2px 3px!important;background:url(http://informers.ukr.net/job/sim/jobnewimg/bottom-links/link-back-1000px.png) no-repeat right 0;overflow:hidden;text-overflow:ellipsis;white-space:nowrap}</style>
                                                <div class="job-block">
                                                    <div class="job-ttl"><a href="http://job.ukr.net/" target="_blank">Вакансии</a><div class="job-logo-link"><a href="http://job.ukr.net/" target="_blank"><img src="http://informers.ukr.net/job/sim/jobnewimg/job-logo-medium.png" height="22" width="103"></a></div></div>
                                                    <div class="informer-block">
                                                        <div id="jobukrnet"><ul></ul><div class="bottom-link-1" style="padding-left:15px;margin-bottom:2px;text-align:left;margin-top:10px;"><a href="http://informers.ukr.net/informer.php?url=http%3A%2F%2Fjob.ukr.net%2Fvacancy%2F%3FRegionId%3D9" target="_blank">Все вакансии Киева...</a></div><div class="bottom-link-2" style="padding-left:15px;margin-bottom:2px;text-align:left;"><a href="http://informers.ukr.net/informer.php?url=http://job.ukr.net/vacancy/search/" target="_blank">Работа в других городах...</a></div></div>
                                                        <script type="text/javascript" pagespeed_no_defer="">pagespeed.lazyLoadImages.overrideAttributeFunctions();</script><script language="javascript" src="http://informers.ukr.net/job/js_search.php?c=10&amp;m=2&amp;lang=ru&amp;h&amp;limit=24" charset="windows-1251"></script>
                                                        <div class="bottom-link-3"><a target="_blank" href="http://job.ukr.net/city/kiev/">робота в киеве</a></div>
                                                        <div class="bottom-link-3"><a target="_blank" href="http://job.ukr.net/city/kiev/">работа киев</a></div>
                                                    </div>
                                                </div>
                                                <!-- Job.Ukr.Net -->
                                                */ ?>
                                                <div class="clr"></div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="box">
                                <div>
                                    <div class="content">
                                        <div class="bannergroup">
                                            <div class="banneritem">
                                                <?php /*
                                                <!-- Kino.Ukr.Net -->
                                                <style>.kino{border:1px solid #c00;margin-top:11px}.kino .kinottl{background:#c00;padding-bottom:2px;text-align:center}.kino .kinottl a{color:#fff;font-weight:bold;text-decoration:none}#kinoukrnet{margin:5px 0;overflow:hidden;zoom:1}#kinoukrnet ul{margin:0;padding:0;list-style:none}#kinoukrnet li{margin-bottom:7px;float:left;width:23%;*width:22.9%}#kinoukrnet img{margin-right:7px}#kinoukrnet a{font-size:11px;font-weight:normal!important}</style>
                                                <div class="kino">
                                                    <div class="kinottl"><a href="http://kino.ukr.net/news/" target="_blank">Новости кино</a></div>
                                                    <div id="kinoukrnet"><ul><li><a href="http://informers.ukr.net/informer.php?url=http%3A%2F%2Fkinoafisha.ua%2Fnews%2Fanastasiya-zadorojnaya-rasskazala-o-svoei-svadbe" target="_blank"><img src="http://kinoafisha.ua/upload/2015/04/news/nbf/1c/47743/s_1428614221anastasiya-zadorojnaya-rasskazala-o-svoei-svadbe.jpg" hspace="4" align="left" border="0"></a><a href="http://informers.ukr.net/informer.php?url=http%3A%2F%2Fkinoafisha.ua%2Fnews%2Fanastasiya-zadorojnaya-rasskazala-o-svoei-svadbe" target="_blank">Анастасия Задорожная рассказала о своей свадьбе</a><br clear="left"></li><li><a href="http://informers.ukr.net/informer.php?url=http%3A%2F%2Fkinoafisha.ua%2Fnews%2Fendi-semberg-o-svoem-vozraste-i-luabimoi-jene" target="_blank"><img src="http://kinoafisha.ua/upload/2015/04/news/n27/9a/47737/s_1428566475endi-semberg-o-svoem-vozraste-i-luabimoi-jene.jpg" hspace="4" align="left" border="0"></a><a href="http://informers.ukr.net/informer.php?url=http%3A%2F%2Fkinoafisha.ua%2Fnews%2Fendi-semberg-o-svoem-vozraste-i-luabimoi-jene" target="_blank">Энди Сэмберг о своем возрасте и любимой жене</a><br clear="left"></li><li><a href="http://informers.ukr.net/informer.php?url=http%3A%2F%2Fkinoafisha.ua%2Fnews%2Fdeniel-redkliff-opyat-uhodit-ot-realnosti" target="_blank"><img src="http://kinoafisha.ua/upload/2015/04/news/nc2/94/47740/s_1428611124deniel-redkliff-opyat-uhodit-ot-realnosti.jpg" hspace="4" align="left" border="0"></a><a href="http://informers.ukr.net/informer.php?url=http%3A%2F%2Fkinoafisha.ua%2Fnews%2Fdeniel-redkliff-opyat-uhodit-ot-realnosti" target="_blank">Дэниел Рэдклифф опять уходит от реальности</a><br clear="left"></li><li><a href="http://informers.ukr.net/informer.php?url=http%3A%2F%2Fkinoafisha.ua%2Fnews%2Fandjelina-djoli-i-bred-pitt-usnovyat-sedmogo-rebenka" target="_blank"><img src="http://kinoafisha.ua/upload/2015/04/news/n82/ab/47760/s_1428675318andjelina-djoli-i-bred-pitt-usnovyat-sedmogo-rebenka.jpg" hspace="4" align="left" border="0"></a><a href="http://informers.ukr.net/informer.php?url=http%3A%2F%2Fkinoafisha.ua%2Fnews%2Fandjelina-djoli-i-bred-pitt-usnovyat-sedmogo-rebenka" target="_blank">Анджелина Джоли и Брэд Питт усыновят седьмого ребенка</a><br clear="left"></li></ul></div>
                                                    <script language="javascript" src="http://informers.ukr.net/kino/js.php?c=4&amp;img=left&amp;h&amp;m=1" charset="windows-1251"></script>
                                                    <div style="margin:5px 0;" align="center"><b>-=<a href="http://job.ukr.net/" style="color:#cc0000;text-decoration:none;" target="_blank">вакансии</a>=-</b></div>
                                                </div>
                                                <!-- Kino.Ukr.Net -->
                                                */ ?>
                                                <div class="clr"></div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div id="gkRight" class="gkMain gkCol">
                        <div id="gkRightTop" class="gkMain">
                            <div class="box dark">
                                <div>
                                    <div class="content">
                                        <div class="nspMain nspFs100 activated" id="nsp-nsp_200" style="width:100%;">
                                            <div class="nspArts bottom" style="width:100%;">
                                                <div style="width: 256px; overflow: hidden;" class="nspArtScroll1">
                                                    <div style="width: 100000px;" class="nspArtScroll2">
                                                        <div style="width: 256px; float: left;" class="nspArtPage">
                                                            <div class="nspArt" style="width:100%!important;">
                                                                <div style="padding:0">
                                                                    <p class="nspText tleft fleft">

                                                                    <!-- JoomlaWorks "AllVideos" Plugin (v4.2) starts here -->

                                                                    </p>
                                                                    <div class="avPlayerWrapper avVideo">
                                                                        <div style="width:240px;" class="avPlayerContainer">
                                                                            <div id="AVPlayerID_810c409a_1575632910" class="avPlayerBlock">
                                                                                <iframe src="http://www.youtube.com/embed/mlTiYjY2njY?rel=0&amp;fs=1&amp;wmode=transparent" allowfullscreen="" title="JoomlaWorks AllVideos Player" frameborder="0" height="150" width="240"></iframe>
                                                                            </div>
                                                                        </div>
                                                                    </div>

                                                                    <!-- JoomlaWorks "AllVideos" Plugin (v4.2) ends here -->

                                                                    Свободівець Левченко звернувся до Яценюка як до пустого місця
                                                                    <p></p>
                                                                    <a class="readon  fright" href="/vydeo/33948-svobodivets-levchenko-zvernuvsya-do-yatsenyuka-yak-do-pustogo-mistsya">Подробнее</a>
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
                            <div class="box nsp blue sidebar">
                                <div>
                                    <h3 class="header">
                                        <span>Популярное</span>
                                    </h3>
                                    <div class="content">
                                        <div class="nspMain autoanim hover nspFs100 activated" id="nsp-nsp_162" style="width:100%;">
                                            <div class="nspArts bottom" style="width:100%;">

                                                <div style="width: 256px; overflow: hidden;" class="nspArtScroll1">
                                                    <div style="width: 100000px;" class="nspArtScroll2">
                                                        <div style="width: 256px; float: left;" class="nspArtPage">
                                                            <div class="nspArt" style="width:100%!important;">
                                                                <div style="padding:16px 0">
                                                                    <a href="/polytyka/33769-oshibka-prezidenta">
                                                                        <img class="nspImage tleft fleft" alt="Ошибка президента" style="width:66px;height:40px;margin:0 14px 0 0;" src="http://k-z.com.ua/modules/mod_news_pro_gk4/cache/66x40xstories.politika.oshibka_prezidentansp_162.jpg.pagespeed.ic.edr28nwLfl.jpg">
                                                                    </a>
                                                                    <h4 class="nspHeader tleft fleft">
                                                                        <a href="/polytyka/33769-oshibka-prezidenta" title="Ошибка президента">Ошибка президента</a>
                                                                    </h4>
                                                                    <p class="nspInfo  tleft fleft">Март 23, 2015</p>
                                                                </div>
                                                            </div>

                                                            <div class="nspArt" style="width:100%!important;">
                                                                <div style="padding:16px 0">
                                                                    <a href="/byudzhet-ukrainy/33896-nkre-igraet-na-ruku-akhmetovu">
                                                                        <img class="nspImage tleft fleft" alt="НКРЭ играет на руку Ахметову?" style="width:66px;height:40px;margin:0 14px 0 0;" src="http://k-z.com.ua/modules/mod_news_pro_gk4/cache/66x40xstories.byudzhet-ukrainy.kiev_energonsp_162.jpg.pagespeed.ic.vmHYfdmLK8.jpg"></a><h4 class="nspHeader tleft fleft"><a href="/byudzhet-ukrainy/33896-nkre-igraet-na-ruku-akhmetovu" title="НКРЭ играет на руку Ахметову?">НКРЭ играет на руку Ах…</a></h4><p class="nspInfo  tleft fleft">Апрель 06, 2015</p></div></div><div class="nspArt" style="width:100%!important;"><div style="padding:16px 0"><a href="/polytyka/33907-kakoj-narod-fraktsiya-i-partiya-vyshe-naroda"><img class="nspImage tleft fleft" alt="Какой народ? Фракция и партия выше народа" style="width:66px;height:40px;margin:0 14px 0 0;" src="http://k-z.com.ua/modules/mod_news_pro_gk4/cache/66x40xstories.politika.partiya_fraktsiyansp_162.jpg.pagespeed.ic.zBsADdlXgd.jpg"></a><h4 class="nspHeader tleft fleft"><a href="/polytyka/33907-kakoj-narod-fraktsiya-i-partiya-vyshe-naroda" title="Какой народ? Фракция и партия выше народа">Какой народ? Фракция и…</a></h4><p class="nspInfo  tleft fleft">Апрель 07, 2015</p></div></div><div class="nspArt" style="width:100%!important;"><div style="padding:16px 0"><a href="/pravovoi-aktsent/33823-realii-iz-sizo-ej-vy-tam-naverkhu-vy-slyshite"><img class="nspImage tleft fleft" alt="Реалии из СИЗО: Эй, вы, там, наверху! Вы слышите?!" style="width:66px;height:40px;margin:0 14px 0 0;" src="http://k-z.com.ua/modules/mod_news_pro_gk4/cache/66x40xstories.pravovoj-aktsent.odess_sizo1nsp_162.jpg.pagespeed.ic.R3HlEaj_71.jpg"></a><h4 class="nspHeader tleft fleft"><a href="/pravovoi-aktsent/33823-realii-iz-sizo-ej-vy-tam-naverkhu-vy-slyshite" title="Реалии из СИЗО: Эй, вы, там, наверху! Вы слышите?!">Реалии из СИЗО: Эй, вы…</a></h4><p class="nspInfo  tleft fleft">Март 29, 2015</p></div></div><div class="nspArt" style="width:100%!important;"><div style="padding:16px 0"><a href="/byudzhet-ukrainy/33843-kievenergo-znaet-kak-obvorovat-kievlyan-na-fone-podnyatiya-tarifov"><img class="nspImage tleft fleft" alt="Киевэнерго знает, как обворовать киевлян на фоне поднятия тарифов" style="width:66px;height:40px;margin:0 14px 0 0;" src="http://k-z.com.ua/modules/mod_news_pro_gk4/cache/66x40xstories.byudzhet-ukrainy.kievenergo_strahnsp_162.jpg.pagespeed.ic.4GrEn4obUh.jpg">
                                                                    </a>
                                                                    <h4 class="nspHeader tleft fleft">
                                                                        <a href="/byudzhet-ukrainy/33843-kievenergo-znaet-kak-obvorovat-kievlyan-na-fone-podnyatiya-tarifov" title="Киевэнерго знает, как обворовать киевлян на фоне поднятия тарифов">Киевэнерго знает, как …</a>
                                                                    </h4>
                                                                    <p class="nspInfo  tleft fleft">Март 31, 2015</p>
                                                                </div>
                                                            </div>

                                                            <div class="nspArt" style="width:100%!important;">
                                                                <div style="padding:16px 0">
                                                                    <a href="/ukrayna/33890-pro-te-yak-stolichna-vlada-prodovzhue-ne-lyubiti-knigarni">
                                                                        <img class="nspImage tleft fleft" alt="Про те, як столична влада продовжує не любити книгарні" style="width:66px;height:40px;margin:0 14px 0 0;" src="http://k-z.com.ua/modules/mod_news_pro_gk4/cache/66x40xstories.ukraina.znannya_glavnayansp_162.jpg.pagespeed.ic.DGSZFU069O.jpg">
                                                                    </a>
                                                                    <h4 class="nspHeader tleft fleft">
                                                                        <a href="/ukrayna/33890-pro-te-yak-stolichna-vlada-prodovzhue-ne-lyubiti-knigarni" title="Про те, як столична влада продовжує не любити книгарні">Про те, як столична вл…</a>
                                                                    </h4>
                                                                    <p class="nspInfo  tleft fleft">Апрель 05, 2015</p>
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
                                <div class="box nsp" style="min-height: 100px; margin-top: 8px;">
                                    <script type="text/javascript" src="//vk.com/js/api/openapi.js?98"></script>
                                    <!-- VK Widget -->
                                    <div style="height: 140px; width: 256px; background: transparent none repeat scroll 0% 0%;" id="vk_groups"><iframe style="overflow: hidden; height: 140px;" id="vkwidget1" scrolling="no" src="http://vk.com/widget_community.php?app=0&amp;width=256px&amp;_ver=1&amp;gid=56660615&amp;mode=1&amp;color1=FFFFFF&amp;color2=2B587A&amp;color3=5B7FA6&amp;class_name=&amp;height=280&amp;url=http%3A%2F%2Fk-z.com.ua%2F&amp;14ca7a2bfd5" name="fXD75a72" frameborder="0" height="200" width="256"></iframe></div>
                                    <script type="text/javascript">VK.Widgets.Group("vk_groups",{mode:1,width:"256",height:"280",color1:'FFFFFF',color2:'2B587A',color3:'5B7FA6'},56660615);</script>
                                </div>
                                <div class="box nsp" style="min-height: 100px; margin-top: 8px; max-height: 300px;">
                                    <div fb-iframe-plugin-query="app_id=171342606239806&amp;container_width=0&amp;header=true&amp;href=https%3A%2F%2Fwww.facebook.com%2Fkonfliktyizakony&amp;locale=ru_RU&amp;sdk=joey&amp;show_border=false&amp;show_faces=true&amp;stream=false&amp;width=255" fb-xfbml-state="rendered" class="fb-like-box fb_iframe_widget" data-href="https://www.facebook.com/konfliktyizakony" width="255px" data-width="280" data-show-faces="true" data-header="true" data-stream="false" data-show-border="false">
                                        <span style="vertical-align: bottom; width: 255px; height: 271px;">
                                            <iframe class="" src="http://www.facebook.com/plugins/like_box.php?app_id=171342606239806&amp;channel=http%3A%2F%2Fstatic.ak.facebook.com%2Fconnect%2Fxd_arbiter%2F6Dg4oLkBbYq.js%3Fversion%3D41%23cb%3Df16a2936cdcec7a%26domain%3Dk-z.com.ua%26origin%3Dhttp%253A%252F%252Fk-z.com.ua%252Ffc1bf6d314134e%26relation%3Dparent.parent&amp;container_width=0&amp;header=true&amp;href=https%3A%2F%2Fwww.facebook.com%2Fkonfliktyizakony&amp;locale=ru_RU&amp;sdk=joey&amp;show_border=false&amp;show_faces=true&amp;stream=false&amp;width=255" style="border: medium none; visibility: visible; width: 255px; height: 271px;" title="fb:like_box Facebook Social Plugin" scrolling="no" allowtransparency="true" name="f1247c7ce4cb5b8" frameborder="0" height="1000px" width="255px"></iframe>
                                        </span>
                                    </div>
                                </div>
                            </div>
                            <div id="gkRightBottom" class="gkMain">
                                <div class="box">
                                    <div>
                                        <h3 class="header"><span>Опрос</span></h3>
                                        <div class="content">
                                            <div class="poll" style="border:none; padding:1px;">
                                                <h4> Как Вы относитесь к передаче особого статуса Донбассу?</h4>
                                                <div id="polldiv_24">
                                                    <form action="/" method="post" name="poll_vote_24" id="poll_vote_24">
                                                        <label for="mod_voteid103" class="sectiontableentry2" style="display:block; padding:2px;">
                                                            <input name="voteid" id="mod_voteid103" value="103" alt="103" type="radio">
                                                            Донбассу не нужен особый статус	</label>
                                                        <label for="mod_voteid104" class="sectiontableentry1" style="display:block; padding:2px;">
                                                            <input name="voteid" id="mod_voteid104" value="104" alt="104" type="radio">
                                                            Выполнить все по Закону	</label>
                                                        <label for="mod_voteid105" class="sectiontableentry2" style="display:block; padding:2px;">
                                                            <input name="voteid" id="mod_voteid105" value="105" alt="105" type="radio">
                                                            Особый статус - предательство Украины	</label>
                                                        <label for="mod_voteid106" class="sectiontableentry1" style="display:block; padding:2px;">
                                                            <input name="voteid" id="mod_voteid106" value="106" alt="106" type="radio">
                                                            Затрудняюсь ответить	</label>
                                                        <label for="mod_voteid107" class="sectiontableentry2" style="display:block; padding:2px;">
                                                            <input name="voteid" id="mod_voteid107" value="107" alt="107" type="radio">
                                                            Мне все равно	</label>
                                                        <div style="padding:2px;" id="poll_buttons_24">
                                                            <input id="submit_vote_24" name="task_button" class="button" value="Голосовать" type="submit">
                                                        </div>
                                                        <div id="poll_loading_24" style="display:none;">Processing....	</div>
                                                        <input name="option" value="com_acepolls" type="hidden">
                                                        <input name="id" value="24" type="hidden">
                                                        <input name="task" value="vote" type="hidden">
                                                        <div>
                                                            <input name="fa25882480b02b7c94ca8b95bfedccee" value="1" type="hidden">
                                                        </div>
                                                    </form>
                                                    <!-- End of #polldiv -->
                                                </div>
                                                <div id="poll_links" style="padding-top:5px; ">
                                                    <a class="poll_result_link" href="/component/acepolls/poll/24-kak-vy-otnosites-k-peredache-osobogo-statusa-donbassu">Подробнее</a><br>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="box">
                                    <div>
                                        <div class="content">
                                            <div class="bannergroup">
                                                <div class="banneritem">
                                                    <?php /*
                                                    <script type="text/javascript" src="http://s0.evroreklama.com/script/3470184544.js"></script><script type="text/javascript" language="javascript" src="http://pagead2.googlesyndication.com/pagead/show_ads.js"></script>				<div class="clr"></div>
                                                    */ ?>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="box">
                                    <div>
                                        <div class="content">
                                            <div class="bannergroup">
                                                <div class="banneritem">
                                                    <?php /*
                                                       <!-- Afisha.Ukr.Net -->
                                                       <style>.afisha{border:1px solid #c00;margin-top:11px}.afisha .afishattl{background:#c00;padding-bottom:2px;text-align:center}.afisha .afishattl a{color:#fff;font-weight:bold;text-decoration:none}#kinomovieukrnet{margin:0}#kinomovieukrnet table{width:100%}#kinomovieukrnet td{text-align:center}#kinomovieukrnet a{font-weight:bold;font-size:12px}#kinomovieukrnet ul{margin:0;padding:0;list-style:none;text-align:center}</style>
                                                       <div class="afisha">
                                                           <div class="afishattl"><a href="http://kino.ukr.net/kinoafisha/" target="_blank">Афиша</a></div>
                                                           <div id="kinomovieukrnet"><table border="0"><tbody><tr valign="top"><td align="center"><a href="http://informers.ukr.net/informer.php?url=http://kinoafisha.ua/films/prosti-za-luabov" target="_blank"><img src="http://kinoafisha.ua/upload/2015/03/films/6698/sm_1426753897prosti-za-luabov.jpg" border="0"></a></td></tr><tr><td><a href="http://informers.ukr.net/informer.php?url=http://kinoafisha.ua/films/prosti-za-luabov" target="_blank">Прости за любовь</a><ul><li><b>(2014)</b></li><li><b>Жанр:</b> мелодрама</li></ul></td></tr></tbody></table></div>
                                                           <script language="javascript" src="http://informers.ukr.net/kino/js_movie.php?c=1&amp;m=1&amp;type=vertical&amp;noactors&amp;notimetable&amp;h" charset="windows-1251"></script>
                                                           <div style="margin:1px 0;" align="center"><a href="http://kino.ukr.net/" style="color:#cc0000;text-decoration:none;" target="_blank"><b>-=лучшие фильмы=-</b></a></div>
                                                       </div>
                                                       <!-- Afisha.Ukr.Net -->
                                                       */ ?>
                                                    <div class="clr"></div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="box">
                                    <div>
                                        <div class="content">
                                            <div class="bannergroup">
                                                <div class="banneritem">
                                                    <?php /*
                                                    <!-- Testoteka.Ukr.Net -->
                                                    <style>.tests{border:1px solid #c00;margin-top:11px;margin-bottom:11px}.tests .teststtl{background:#c00;padding-bottom:2px;text-align:center}.tests .teststtl a{color:#fff;font-weight:bold;text-decoration:none}#testotekaukrnet ul{margin:5px 0px;padding:0;list-style:none;text-align:center}#testotekaukrnet li{margin:0;padding:0;list-style:none;margin-bottom:7px}#testotekaukrnet img{margin:0}#testotekaukrnet a{}</style>
                                                    <div class="tests">
                                                        <div class="teststtl"><a href="http://testoteka.ukr.net/alltests/" target="_blank">Тестирование</a></div>
                                                        <div id="testotekaukrnet"><ul><li><a href="http://informers.ukr.net/informer.php?url=http%3A%2F%2Ftests.ukr.net%2Fpersonality%2Ftest%2F143%2F" target="_blank"><img src="http://mod.ukr.net/tests/pics/raz_mtest_143.jpg" align="middle" border="0"></a><br><a href="http://informers.ukr.net/informer.php?url=http%3A%2F%2Ftests.ukr.net%2Fpersonality%2Ftest%2F143%2F" target="_blank">Приятно ли с Вами общаться?</a><br clear="left"></li><li><a href="http://informers.ukr.net/informer.php?url=http%3A%2F%2Ftests.ukr.net%2Ftestdrive%2Ftest%2F181%2F" target="_blank"><img src="http://mod.ukr.net/tests/pics/raz_mtest_181.jpg" align="middle" border="0"></a><br><a href="http://informers.ukr.net/informer.php?url=http%3A%2F%2Ftests.ukr.net%2Ftestdrive%2Ftest%2F181%2F" target="_blank">Какая Вы нимфа?</a><br clear="left"></li><li><a href="http://informers.ukr.net/informer.php?url=http%3A%2F%2Ftests.ukr.net%2Fpersonality%2Ftest%2F144%2F" target="_blank"><img src="http://mod.ukr.net/tests/pics/raz_mtest_144.jpg" align="middle" border="0"></a><br><a href="http://informers.ukr.net/informer.php?url=http%3A%2F%2Ftests.ukr.net%2Fpersonality%2Ftest%2F144%2F" target="_blank">Насколько Вы объективны?</a><br clear="left"></li></ul></div>
                                                        <script language="javascript" src="http://informers.ukr.net/testoteka/js.php?c=3&amp;t=top&amp;m=1&amp;img=center&amp;is=small" charset="windows-1251"></script>

                                                        <div style="margin:5px 0;" align="center"><a href="http://job.ukr.net/vacancy/rabota-na-domu/kiev/" style="color:#cc0000;text-decoration:none;" target="_blank"><b>-=работа на дому=-</b></a></div>
                                                    </div>			*/?>
                                                    <div class="clr"></div>
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
                <?=$this->render('_bottomMenu', [
                    'menuItems'     =>  $menuItems,
                    'btmArticles'   =>  $btmArticles
                ]);
                $this->endBody() ?>
                <div id="gkFooter" class="gkWrap">
                    <div id="gkFooterWrap">
                        <div id="gkCopyrights">
                            <div id="gkFooterNav">
                                <ul class="menu">
                                    <li class="item-424">
                                        <a href="<?=Url::to('/press-reliz')?>">Пресс-релиз</a>
                                    </li>
                                    <li class="item-312">
                                        <a href="<?=Url::to('/redaktsiya')?>">Редакция</a>
                                    </li>
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
