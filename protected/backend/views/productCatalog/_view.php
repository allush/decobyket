<?php
/* @var $this ProductCatalogController */
/* @var $data ProductCatalog */
?>

<div class="view">

	<b><?php echo CHtml::encode($data->getAttributeLabel('id_product_catalog')); ?>:</b>
	<?php echo CHtml::link(CHtml::encode($data->id_product_catalog), array('view', 'id'=>$data->id_product_catalog)); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('name')); ?>:</b>
	<?php echo CHtml::encode($data->name); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('description')); ?>:</b>
	<?php echo CHtml::encode($data->description); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('parent')); ?>:</b>
	<?php echo CHtml::encode($data->parent); ?>
	<br />


</div>