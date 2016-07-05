<div class="box nsp blue sidebar">
    <div>
        <h3 class="header">
            <span>Популярное</span>
        </h3>
        <div class="content">
            <div class="nspMain autoanim hover nspFs100 activated" style="width:100%;">
                <div class="nspArts bottom" style="width:100%;">

                    <div style="width: 256px; overflow: hidden;" class="nspArtScroll1">
                        <div style="width: 100000px;" class="nspArtScroll2">
                            <div style="width: 256px; float: left;" class="nspArtPage">
                                <?php
                                use frontend\models\News;

                                foreach(News::getPopular(9) as $popularNews){
                                    echo $this->render('_popular_news_item', [
                                        'news'  =>  $popularNews
                                    ]);
                                }
                                ?>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>