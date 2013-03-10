<?php
/* @var $this GalleryItemController */
/* @var $data GalleryCatalog */
?>

<div>
    <?php echo CHtml::link(CHtml::encode($data->name), array('index', 'catalog' => $data->id_gallery_catalog));?>
</div>