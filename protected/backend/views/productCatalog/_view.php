<?php
/* @var $this ProductCatalogController */
/* @var $data ProductCatalog */
?>

<div>
	<?php echo ($index+1).'. '.CHtml::link(CHtml::encode($data->name), array('update', 'id'=>$data->id_product_catalog)); ?>
</div>