<?php
/* @var $this ProductPictureController */
/* @var $model ProductPicture */

$this->breadcrumbs=array(
	'Product Pictures'=>array('index'),
	$model->id_product_picture=>array('view','id'=>$model->id_product_picture),
	'Update',
);

$this->menu=array(
	array('label'=>'List ProductPicture', 'url'=>array('index')),
	array('label'=>'Create ProductPicture', 'url'=>array('create')),
	array('label'=>'View ProductPicture', 'url'=>array('view', 'id'=>$model->id_product_picture)),
	array('label'=>'Manage ProductPicture', 'url'=>array('admin')),
);
?>

<h1>Update ProductPicture <?php echo $model->id_product_picture; ?></h1>

<?php echo $this->renderPartial('_form', array('model'=>$model)); ?>