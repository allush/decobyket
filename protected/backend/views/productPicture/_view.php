<?php
/* @var $this ProductPictureController */
/* @var $data ProductPicture */
?>

<div class="view">

	<b><?php echo CHtml::encode($data->getAttributeLabel('id_product_picture')); ?>:</b>
	<?php echo CHtml::link(CHtml::encode($data->id_product_picture), array('view', 'id'=>$data->id_product_picture)); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('id_product')); ?>:</b>
	<?php echo CHtml::encode($data->id_product); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('picture_path')); ?>:</b>
	<?php echo CHtml::encode($data->picture_path); ?>
	<br />


</div>