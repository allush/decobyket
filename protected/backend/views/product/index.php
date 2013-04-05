<?php
/* @var $this ProductController */
/* @var $dataProvider CActiveDataProvider */
/* @var $productCatalogs CActiveDataProvider */

$this->breadcrumbs = array(
    'Магазин',
);

$this->menu = array(
    array('label' => 'Добавить товар', 'url' => array('create')),
    array('label' => 'Управление каталогами магазина', 'url' => array('/productCatalog/index')),
);

$this->widget('zii.widgets.CListView', array(
    'dataProvider' => $productCatalogs,
    'itemView' => 'catalog',
    'emptyText' => '',
    'summaryText' => '',
));

$this->widget('zii.widgets.CListView', array(
    'dataProvider' => $dataProvider,
    'itemView' => '_view',
    'itemsTagName' => 'table',
    'itemsCssClass' => 'table table-bordered',
    'sortableAttributes' => array(
        'name',
        'cost',
        'existence',
        'visible'
    )
)); ?>
