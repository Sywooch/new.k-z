<?php use app\models\News;

$politicsNews = News::getTopByCategory($cat, 4);
?>
<div class="content">
    <div class="nspMain nspFs100 activated" id="nsp-nsp_152" style="width:100%;">
        <div class="nspArts right" style="width:52%;">
            <div style="width: 236px; overflow: hidden;" class="nspArtScroll1">
                <div style="width: 100000px;" class="nspArtScroll2">
                    <div style="width: 236px; float: left;" class="nspArtPage">
                        <div class="nspArt" style="width:100%!important;">
                            <div style="padding:0 10px 0 0">
                                <?php
                                preg_match('/(img|src)=("|\')[^"\'>]+/i', $politicsNews['0']['text_preview'], $media);
                                $image = '';
                                if(sizeof($media) >= 1){
                                    $image = preg_replace('/src="/', '', $media['0']);
                                }
                                $link = $politicsNews['0']['categorylink'].'/'.$politicsNews['0']['id'].'-'.$politicsNews['0']['link'];
                                ?>
                                <h4 class="nspHeader tleft fnone">
                                    <a href="/<?=$link?>" title="<?=$politicsNews['0']['title']?>"><?=strlen(strip_tags($politicsNews['0']['title'])) > 49 ? trim(mb_substr(strip_tags($politicsNews['0']['title']), 0, 48, 'UTF-8')).'…' : strip_tags($politicsNews['0']['title'])?></a>
                                </h4>
                                <a href="/<?=$link?>">
                                    <img class="nspImage tleft fleft" alt="<?=$politicsNews['0']['title']?>" style="width:225px;height:125px;margin:6px 14px 0 0;" src="<?=$image?>">
                                </a>
                                <p class="nspText tleft fleft"><?=strlen(strip_tags($politicsNews['0']['text_preview'])) > 110 ? trim(mb_substr(strip_tags($politicsNews['0']['text_preview']), 0, 110, 'UTF-8')).'…' : strip_tags($politicsNews['0']['text_preview'])?>
                                    <a class="readon inline" href="/<?=$link?>">Подробнее</a>
                                </p>
                                <p class="nspInfo  tleft fleft"></p>
                                <?php unset($politicsNews[0]); ?>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="nspLinksWrap right" style="width:47.9%;">
            <div class="nspLinks" style="margin:0 0 0 5px;">
                <div style="width: 212px; overflow: hidden;" class="nspLinkScroll1">
                    <div style="width: 100000px;" class="nspLinkScroll2">
                        <ul class="nspList" style="width: 212px; float: left;">
                            <?php foreach($politicsNews as $n){
                                $link = $n['categorylink'].'/'.$n['id'].'-'.$n['link'];?>
                                <li>
                                    <h4>
                                        <a href="/<?=$link?>" title="<?=$n['title']?>"><?=strlen(strip_tags($n['title'])) > 25 ? trim(mb_substr(strip_tags($n['title']), 0, 25, 'UTF-8')).'…' : strip_tags($n['title'])?></a>
                                    </h4>
                                    <p><?=strlen(strip_tags($n['text_preview'])) > 75 ? trim(mb_substr(strip_tags($n['text_preview']), 0, 85, 'UTF-8')).'…' : strip_tags($n['text_preview'])?></p>
                                </li>
                            <?php } ?>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>