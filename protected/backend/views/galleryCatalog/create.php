<?php
/* @var $this GalleryCatalogController */
/* @var $model GalleryCatalog */

$this->menu=array(
	array('label'=>'Назад', 'url'=>array('index')),
);
?>

<h4>Создание каталога галереи</h4>

<?php echo $this->renderPartial('_form', array('model'=>$model)); ?>