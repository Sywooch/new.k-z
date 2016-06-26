<div class="nspArt<?=$first ? ' active' : ''?>">
    <div style="width:146px;height:83px;">
        <div class="nspImageGallery">
            <a href="<?=$news->fullLink?>">
                <img class="nspImage tleft fleft" alt="<?=$news->title?>" style="width:146px;height:83px;margin:0 0 0 0;" src="<?=$news->imagePreview?>">
            </a>
        </div>
        <div class="nspArtHeadline">
            <div class="nspHeadline">
                <h4 class="nspHeader tleft fnone">
                    <a href="<?=$news->fullLink?>" title="<?=$news->title?>">
                        <?=$news->title?>
                    </a>
                </h4>
            </div>
        </div>
    </div>
</div>