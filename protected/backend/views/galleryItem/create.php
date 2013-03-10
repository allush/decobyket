<?php
/* @var $this GalleryItemController */
/* @var $model GalleryItem */

$this->menu=array(
	array('label'=>'Назад', 'url'=>array('index')),
);
?>

<h4>Добавление новой работы</h4>

<?php echo $this->renderPartial('_form', array('model'=>$model)); ?>