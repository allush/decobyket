<?php
/* @var $this GalleryItemController */
/* @var $dataProvider CActiveDataProvider */
/* @var $galleryCatalogs CActiveDataProvider */

$this->menu=array(
    array('label'=>'Добавить работу', 'url'=>array('create')),
    array('label'=>'Управление каталогами галлереи', 'url'=>array('/galleryCatalog/index')),
);
?>

<?php $this->widget('zii.widgets.CListView', array(
    'dataProvider'=>$galleryCatalogs,
    'itemView'=>'catalog',
    'emptyText' => '',
)); ?>

<?php $this->widget('zii.widgets.CListView', array(
	'dataProvider'=>$dataProvider,
	'itemView'=>'_view',
    'itemsTagName' => 'ul',
    'itemsCssClass' => 'thumbnails',
    'emptyText' => '',
)); ?>
