<?php
/* @var $this ProductCatalogController */
/* @var $dataProvider CActiveDataProvider */

$this->breadcrumbs=array(
	'Каталоги магазина',
);

$this->menu=array(
    array('label'=>'Магазин', 'url'=>array('/product/index')),
    array('label'=>'Создать каталог', 'url'=>array('create')),
);
?>
<h4>Каталоги магазина</h4>
<?php $this->widget('zii.widgets.CListView', array(
	'dataProvider'=>$dataProvider,
	'itemView'=>'_view',
)); ?>
