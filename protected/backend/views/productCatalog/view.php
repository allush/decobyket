<?php
/* @var $this ProductCatalogController */
/* @var $model ProductCatalog */

$this->breadcrumbs=array(
	'Product Catalogs'=>array('index'),
	$model->name,
);

$this->menu=array(
	array('label'=>'List ProductCatalog', 'url'=>array('index')),
	array('label'=>'Create ProductCatalog', 'url'=>array('create')),
	array('label'=>'Update ProductCatalog', 'url'=>array('update', 'id'=>$model->id_product_catalog)),
	array('label'=>'Delete ProductCatalog', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->id_product_catalog),'confirm'=>'Are you sure you want to delete this item?')),
	array('label'=>'Manage ProductCatalog', 'url'=>array('admin')),
);
?>

<h1>View ProductCatalog #<?php echo $model->id_product_catalog; ?></h1>

<?php $this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
	'attributes'=>array(
		'id_product_catalog',
		'name',
		'description',
		'parent',
	),
)); ?>
