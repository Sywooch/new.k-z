<?php
use frontend\models\Ads;
use frontend\models\News;
?>
<div id="gkRight" class="gkMain gkCol">
    <!-- Верхняя часть правого сайдбара: начало -->
    <div id="gkRightTop" class="gkMain">
        <!-- Последние новости: начало -->
        <?=\frontend\widgets\LastNewsWidget::widget()?>
        <!-- Последние новости: конец -->
        <!-- Блок видео: начало -->
        <?php
        $video = News::getVideo();
        if($video){?>
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
                                                <p class="nspText tleft fleft"></p>
                                                <div class="avPlayerWrapper avVideo">
                                                    <div style="width:240px;" class="avPlayerContainer">
                                                        <div id="AVPlayerID_c0c7ac8f_1410473774" class="avPlayerBlock">
                                                            <iframe src="http://www.youtube.com/embed/8Zm-6uljDlM?rel=0&amp;fs=1&amp;wmode=transparent" allowfullscreen="" title="JoomlaWorks AllVideos Player" width="240" frameborder="0" height="150"></iframe>
                                                        </div>
                                                    </div>
                                                </div>
                                                Речник АТО Анатолій Стельмах. Дайджест подій 3.04.2015 вечір
                                                <a class="readon  fright" href="/vydeo/33881-rechnik-ato-anatolij-stelmakh-dajdzhest-podij-3-04-2015-vechir">Подробнее</a>
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
        <?php } ?>
        <!-- Блок видео: конец -->
        <!-- Популярное: начало -->
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
                                        <?php foreach(News::find()->orderBy('hits DESC')->with('category')->limit(9)->all() as $n){
                                            ?>
                                            <div class="nspArt" style="width:100%!important;">
                                                <div style="padding:16px 0">
                                                    <a href="<?=$n->fullLink?>"  title="<?=$n->title?>">
                                                        <img class="nspImage tleft fleft" src="<?=$n->imagePreview?>" alt="<?=$n->title?>" style="width:66px;height:40px;margin:0 14px 0 0;">
                                                        <h4 class="nspHeader tleft fleft">
                                                            <?=$n->getTitle(22)?>
                                                        </h4>
                                                    </a>
                                                    <p class="nspInfo  tleft fleft"><?=Yii::$app->formatter->asDatetime($n['publishDate'], 'php:F d, Y');?></p>
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
        <!-- Популярные: конец -->
        <!-- Виджет ВК: начало -->
        <?php
        if(Yii::$app->params['vkWidget']['show']){ ?>
            <div class="box nsp" style="min-height: 100px; margin-top: 8px;">
                <script type="text/javascript" src="//vk.com/js/api/openapi.js?116"></script>

                <!-- VK Widget -->
                <div id="vk_groups"></div>
                <script type="text/javascript">
                    VK.Widgets.Group("vk_groups", {
                        mode: <?=Yii::$app->params['vkWidget']['widgetParams']['mode']?>,
                        width: "<?=Yii::$app->params['vkWidget']['widgetParams']['width']?>",
                        height: "<?=Yii::$app->params['vkWidget']['widgetParams']['height']?>",
                        color1: '<?=Yii::$app->params['vkWidget']['widgetParams']['color1']?>',
                        color2: '<?=Yii::$app->params['vkWidget']['widgetParams']['color2']?>',
                        color3: '<?=Yii::$app->params['vkWidget']['widgetParams']['color3']?>'
                    }, <?=Yii::$app->params['vkWidget']['widgetParams']['apiKey']?>);
                </script>
            </div>
        <?php } ?>
        <!-- Виджет ВК: конец -->
        <!-- Виджет фейсбука: начало -->
        <?php if(Yii::$app->params['fbWidget']['show']){ ?>
        <div class="box nsp" style="min-height: 100px; margin-top: 8px; max-height: 300px;">
            <div fb-iframe-plugin-query="app_id=171342606239806&amp;container_width=0&amp;header=true&amp;href=https%3A%2F%2Fwww.facebook.com%2Fkonfliktyizakony&amp;locale=ru_RU&amp;sdk=joey&amp;show_border=false&amp;show_faces=true&amp;stream=false&amp;width=255" fb-xfbml-state="rendered" class="fb-like-box fb_iframe_widget" data-href="https://www.facebook.com/konfliktyizakony" width="255px" data-width="280" data-show-faces="true" data-header="true" data-stream="false" data-show-border="false">
                <span style="vertical-align: bottom; width: 255px; height: 271px;"><iframe class="" src="http://www.facebook.com/plugins/like_box.php?app_id=171342606239806&amp;channel=http%3A%2F%2Fstatic.ak.facebook.com%2Fconnect%2Fxd_arbiter%2F6Dg4oLkBbYq.js%3Fversion%3D41%23cb%3Df25d63462f79ae6%26domain%3Dk-z.com.ua%26origin%3Dhttp%253A%252F%252Fk-z.com.ua%252Ff3b7d07cf465c0c%26relation%3Dparent.parent&amp;container_width=0&amp;header=true&amp;href=https%3A%2F%2Fwww.facebook.com%2Fkonfliktyizakony&amp;locale=ru_RU&amp;sdk=joey&amp;show_border=false&amp;show_faces=true&amp;stream=false&amp;width=255" style="border: medium none; visibility: visible; width: 255px; height: 271px;" title="fb:like_box Facebook Social Plugin" scrolling="no" allowtransparency="true" name="f22e833f8c969fc" width="255px" frameborder="0" height="1000px"></iframe></span>
            </div>
        </div>
        <?php } ?>
        <!-- Виджет фейсбука: конец -->
    </div>
    <!-- Верхняя часть правого сайдбара: конец -->
    <?php if(false){ ?>
    <!-- Нижняя часть правого сайдбара: начало -->
    <div id="gkRightBottom" class="gkMain">
        <!-- Блок опроса: начало -->
        <div class="box">
            <div>
                <h3 class="header">
                    <span>Опрос</span>
                </h3>
                <div class="content">
                    <div class="poll" style="border:none; padding:1px;">

                        <h4> Как Вы относитесь к передаче особого статуса Донбассу?</h4>

                        <div id="polldiv_24">

                            <form action="/sudebnye-khronyky" method="post" name="poll_vote_24" id="poll_vote_24">
                                <label for="mod_voteid103" class="sectiontableentry2" style="display:block; padding:2px;">
                                    <input name="voteid" id="mod_voteid103" value="103" alt="103" type="radio">
                                    Донбассу не нужен особый статус </label>
                                <label for="mod_voteid104" class="sectiontableentry1" style="display:block; padding:2px;">
                                    <input name="voteid" id="mod_voteid104" value="104" alt="104" type="radio">
                                    Выполнить все по Закону </label>
                                <label for="mod_voteid105" class="sectiontableentry2" style="display:block; padding:2px;">
                                    <input name="voteid" id="mod_voteid105" value="105" alt="105" type="radio">
                                    Особый статус - предательство Украины </label>
                                <label for="mod_voteid106" class="sectiontableentry1" style="display:block; padding:2px;">
                                    <input name="voteid" id="mod_voteid106" value="106" alt="106" type="radio">
                                    Затрудняюсь ответить </label>
                                <label for="mod_voteid107" class="sectiontableentry2" style="display:block; padding:2px;">
                                    <input name="voteid" id="mod_voteid107" value="107" alt="107" type="radio">
                                    Мне все равно </label>

                                <div style="padding:2px;" id="poll_buttons_24">
                                    <input id="submit_vote_24" name="task_button" class="button" value="Голосовать" type="submit">
                                </div>
                                <div id="poll_loading_24" style="display:none;">Processing....</div>

                                <input name="option" value="com_acepolls" type="hidden">
                                <input name="id" value="24" type="hidden">
                                <input name="task" value="vote" type="hidden">

                                <div><input name="5148276d051ef9b1bd7a497ec0d36e1b" value="1" type="hidden"></div>
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
        <?php } ?>
        <!-- Блок опроса: конец -->
        <!-- Произвольные банеры: начало -->
        <?php foreach(Ads::byPosition('1', true) as $ad){ ?>
        <div class="box">
            <div>
                <div class="content">
                    <div class="custom">
                        <?=$ad['code']?>
                    </div>
                </div>
            </div>
        </div>
        <?php } ?>
        <!-- Произвольные банеры: конец -->
        <!-- Банер афиша укр нет: начало -->
        <div class="box">
            <div>
                <div class="content">
                    <div class="bannergroup">
                        <div class="banneritem">
                            <!-- Afisha.Ukr.Net -->
                            <style>
                                .afisha {border:1px solid #cc0000;margin-top:11px;}
                                .afisha .afishattl {background:#cc0000;padding-bottom:2px;text-align:center;}
                                .afisha .afishattl a {color:#FFF;font-weight:bold;text-decoration:none;}
                                #kinomovieukrnet {margin:0;}
                                #kinomovieukrnet table {width:100%;}
                                #kinomovieukrnet td { text-align:center;}
                                #kinomovieukrnet a {font-weight:bold;font-size:12px;}
                                #kinomovieukrnet ul {margin:0;padding:0;list-style:none;text-align:center;}
                            </style>
                            <div class="afisha">
                                <div class="afishattl"><a href="http://kino.ukr.net/kinoafisha/" target="_blank">Афиша</a></div>
                                <div id="kinomovieukrnet">Загрузка...</div>
                                <script language="javascript" src="http://informers.ukr.net/kino/js_movie.php?c=1&amp;m=1&amp;type=vertical&amp;noactors&amp;notimetable&amp;h" charset="windows-1251"></script>
                                <div align="center" style="margin:1px 0;"><a href="http://kino.ukr.net/" style="color:#cc0000;text-decoration:none;" target="_blank"><b>-=лучшие фильмы=-</b></a></div>
                            </div>
                            <!-- Afisha.Ukr.Net -->
                            <div class="clr"></div>
                        </div>

                    </div>
                </div>
            </div>
        </div>
        <!-- Банер афиша укр нет: конец -->
        <!-- Банер тестотека укр нет: начало -->
        <div class="box">
            <div>
                <div class="content">
                    <div class="bannergroup">
                        <div class="banneritem">
                            <!-- Testoteka.Ukr.Net -->
                            <style>
                                .tests {border:1px solid #cc0000;margin-top:11px;margin-bottom:11px;}
                                .tests .teststtl {background:#cc0000;padding-bottom:2px;text-align:center;}
                                .tests .teststtl a {color:#FFF;font-weight:bold;text-decoration:none;}
                                #testotekaukrnet ul {margin:5px 0px;padding:0;list-style:none;text-align:center;}
                                #testotekaukrnet li {margin:0;padding:0;list-style:none;margin-bottom:7px;}
                                #testotekaukrnet img {margin:0;}
                                #testotekaukrnet a {}
                            </style>
                            <div class="tests">
                                <div class="teststtl"><a href="http://testoteka.ukr.net/alltests/" target="_blank">Тестирование</a></div>
                                <div id="testotekaukrnet">Загрузка...</div>
                                <script language="javascript" src="http://informers.ukr.net/testoteka/js.php?c=3&t=top&m=1&img=center&is=small" charset="windows-1251"></script>

                                <div align="center" style="margin:5px 0;"><a href="http://job.ukr.net/vacancy/rabota-na-domu/kiev/" style="color:#cc0000;text-decoration:none;" target="_blank"><b>-=работа на дому=-</b></a></div>
                            </div>
                            <!-- Testoteka.Ukr.Net -->
                            <div class="clr"></div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Банер тестотека укр нет: конец -->
    </div>
    <!-- Нижняя часть правого сайдбара: конец -->
</div>