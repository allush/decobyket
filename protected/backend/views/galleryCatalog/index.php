<?php
/* @var $this GalleryCatalogController */
/* @var $dataProvider CActiveDataProvider */

$this->menu=array(
    array('label'=>'Галерея', 'url'=>array('/galleryItem/index')),
    array('label'=>'Создать каталог', 'url'=>array('create')),
);
?>

<h4>Каталоги галлереи</h4>

<?php $this->widget('zii.widgets.CListView', array(
	'dataProvider'=>$dataProvider,
	'itemView'=>'_view',
)); ?>
