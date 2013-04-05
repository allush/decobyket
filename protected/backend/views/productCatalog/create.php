<?php
/* @var $this ProductCatalogController */
/* @var $model ProductCatalog */


$this->menu=array(
	array('label'=>'Назад', 'url'=>array('index')),
);
?>

<h4>Создание каталога магазина</h4>

<?php echo $this->renderPartial('_form', array('model'=>$model)); ?>