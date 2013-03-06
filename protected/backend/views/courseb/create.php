<?php
/* @var $this CourseController */
/* @var $model Course */

$this->menu=array(
	array('label'=>'Все курсы', 'url'=>array('index')),
);
?>

<h4>Создание нового курса</h4>

<?php echo $this->renderPartial('_form', array('model'=>$model)); ?>