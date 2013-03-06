<?php
/* @var $this ProductPictureController */
/* @var $dataProvider CActiveDataProvider */

$this->breadcrumbs=array(
	'Product Pictures',
);

$this->menu=array(
	array('label'=>'Create ProductPicture', 'url'=>array('create')),
	array('label'=>'Manage ProductPicture', 'url'=>array('admin')),
);
?>

<h1>Product Pictures</h1>

<?php $this->widget('zii.widgets.CListView', array(
	'dataProvider'=>$dataProvider,
	'itemView'=>'_view',
)); ?>
