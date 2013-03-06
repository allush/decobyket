<?php
/* @var $this NewsController */
/* @var $model News */

$this->menu=array(
	array('label'=>'Назад', 'url'=>array('index')),
);
?>

<h4>Создание новости</h4>

<?php echo $this->renderPartial('_form', array('model'=>$model)); ?>