<?php
/* @var $this SiteController */
/* @var $news News[] */
/* @var $about Page */
/* @var $galleryItems GalleryItem[] */

?>
<div class="span12">

    <div class="row">
        <div class="span6">
            <h4 class="colorAccent">О ШКОЛЕ</h4>
            <?php

            echo CHtml::decode($about->body);
            ?>

        </div>
        <div class="span6">
            <h4 class="colorAccent">НОВОСТИ</h4>
            <?php
            foreach ($news as $singleNews) {
                $this->renderPartial("/news/_view", array('data' => $singleNews));
            }
            ?>

            <?php echo CHtml::link('ВСЕ НОВОСТИ', array("/news/index"), array('class' => 'allNews'));?>
        </div>
    </div>

    <div class="row">
        <div class="span12">
            <div class="gallery">
                <h4 class="colorAccent">ГАЛЛЕРЕЯ</h4>
                <ul class="thumbnails">
                    <?php
                    foreach ($galleryItems as $singleGalleryItem) {
                        $this->renderPartial("/galleryItem/_view", array('data' => $singleGalleryItem));
                    }
                    ?>
                </ul>
                <?php echo CHtml::link('ПЕРЕЙТИ В ГАЛЛЕРЕЮ', array('/galleryItem/index'), array('class' => 'pull-right allNews'))?>
            </div>
        </div>
    </div>
</div>

