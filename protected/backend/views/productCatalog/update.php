<?php
/* @var $this ProductCatalogController */
/* @var $model ProductCatalog */

$this->breadcrumbs=array(
	'Product Catalogs'=>array('index'),
	$model->name=>array('view','id'=>$model->id_product_catalog),
	'Update',
);

$this->menu=array(
	array('label'=>'List ProductCatalog', 'url'=>array('index')),
	array('label'=>'Create ProductCatalog', 'url'=>array('create')),
	array('label'=>'View ProductCatalog', 'url'=>array('view', 'id'=>$model->id_product_catalog)),
	array('label'=>'Manage ProductCatalog', 'url'=>array('admin')),
);
?>

<h1>Update ProductCatalog <?php echo $model->id_product_catalog; ?></h1>

<?php echo $this->renderPartial('_form', array('model'=>$model)); ?>