<?php
/* @var $this GalleryCatalogController */
/* @var $data GalleryCatalog */
?>

<div>
    <?php echo ($index + 1) . '. ' . CHtml::link(CHtml::encode($data->name), array('update', 'id' => $data->id_gallery_catalog)); ?>
</div>