<?php
/* @var $this ProductController */
/* @var $data ProductCatalog */
?>

<div>
    <?php echo CHtml::link(CHtml::encode($data->name), array('index', 'catalog' => $data->id_product_catalog));?>
</div>