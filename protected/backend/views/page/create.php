<?php
/* @var $this PageController */
/* @var $model Page */

$this->menu=array(
	array('label'=>'Назад', 'url'=>array('index')),
	array('label'=>'Manage Page', 'url'=>array('admin')),
);
?>

<h4>Создание страницы</h4>

<?php echo $this->renderPartial('_form', array('model'=>$model)); ?>