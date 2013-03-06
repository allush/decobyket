<?php
/* @var $this ProductPictureController */
/* @var $model ProductPicture */

$this->breadcrumbs=array(
	'Product Pictures'=>array('index'),
	$model->id_product_picture,
);

$this->menu=array(
	array('label'=>'List ProductPicture', 'url'=>array('index')),
	array('label'=>'Create ProductPicture', 'url'=>array('create')),
	array('label'=>'Update ProductPicture', 'url'=>array('update', 'id'=>$model->id_product_picture)),
	array('label'=>'Delete ProductPicture', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->id_product_picture),'confirm'=>'Are you sure you want to delete this item?')),
	array('label'=>'Manage ProductPicture', 'url'=>array('admin')),
);
?>

<h1>View ProductPicture #<?php echo $model->id_product_picture; ?></h1>

<?php $this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
	'attributes'=>array(
		'id_product_picture',
		'id_product',
		'picture_path',
	),
)); ?>
