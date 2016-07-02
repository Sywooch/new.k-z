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

$ct = explode('/', \Yii::$app->request->url)[1];

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
    <script type="text/javascript" src="http://k-z.com.ua/media/system/js/validate.js"></script>
    <script type="text/javascript" src="http://k-z.com.ua/modules/mod_news_pro_gk4/interface/scripts/engine.js"></script>
    <script type="text/javascript" src="http://k-z.com.ua/plugins/content/jw_allvideos/jw_allvideos/includes/js/behaviour.js"></script>
    <script type="text/javascript" src="http://k-z.com.ua/plugins/content/jw_allvideos/jw_allvideos/includes/js/mediaplayer/jwplayer.js"></script>
    <script type="text/javascript" src="http://k-z.com.ua/plugins/content/jw_allvideos/jw_allvideos/includes/js/wmvplayer/silverlight.js"></script>
    <script type="text/javascript" src="http://k-z.com.ua/plugins/content/jw_allvideos/jw_allvideos/includes/js/wmvplayer/wmvplayer.js"></script>
    <script type="text/javascript" src="http://k-z.com.ua/plugins/content/jw_allvideos/jw_allvideos/includes/js/quicktimeplayer/AC_QuickTime.js"></script>
    <script type="text/javascript" src="http://k-z.com.ua/modules/mod_image_show_gk4/styles/gk_sporter2/engine.js"></script>
    <script async="async" defer="defer" type="t" src="http://k-z.com.ua/modules/mod_news_pro_gk4/interface/scripts/engine.portal.mode.4.js"></script>
</head>
<body>
    <script type="text/javascript" src="http://k-z.com.ua/modules/mod_news_pro_gk4/interface/scripts/engine.portal.mode.4.js"></script>
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
                'ct'        => $ct
            ]),
            Html::tag('div', '', ['id' => 'system-message-container']),
            $content,
            $this->render('_bottomMenu', [
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
