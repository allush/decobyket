<?php
/* @var $this ProductController */
/* @var $model Product */

$this->breadcrumbs=array(
	'Магазин'=>array('index'),
	'Создание товара',
);

$this->menu=array(
	array('label'=>'Назад', 'url'=>array('index')),
);

echo $this->renderPartial('_form', array('model'=>$model)); ?>