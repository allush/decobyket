<?php
/* @var $this GalleryItemController */
/* @var $data GalleryCatalog */
?>

<li>
    <?php echo CHtml::link(CHtml::encode($data->name), array('index', 'catalog' => $data->id_gallery_catalog));?>
</li>