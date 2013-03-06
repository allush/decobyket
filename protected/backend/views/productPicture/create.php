<?php
/* @var $this ProductPictureController */
/* @var $model ProductPicture */

$this->breadcrumbs=array(
	'Product Pictures'=>array('index'),
	'Create',
);

$this->menu=array(
	array('label'=>'List ProductPicture', 'url'=>array('index')),
	array('label'=>'Manage ProductPicture', 'url'=>array('admin')),
);
?>

<h1>Create ProductPicture</h1>

<?php echo $this->renderPartial('_form', array('model'=>$model)); ?>