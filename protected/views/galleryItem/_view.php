<?php
/* @var $this GalleryItemController */
/* @var $data GalleryItem */
?>

<li class="span2">
    <div class="thumbnail galleryItem">
        <div class="galleryItemImg">
            <?php echo CHtml::link(CHtml::image(CHtml::encode(Yii::app()->baseUrl . $data->thumbnail())), CHtml::encode(Yii::app()->baseUrl . $data->image()), array('rel' => 'shadowbox[gallery]'));?>
        </div>
        <?php echo CHtml::encode($data->name); ?>
    </div>
</li>