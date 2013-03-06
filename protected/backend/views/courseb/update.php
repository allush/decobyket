<?php
/* @var $this CourseController */
/* @var $model Course */

$this->menu=array(
	array('label'=>'Все курсы', 'url'=>array('index')),
);
?>

<h4>Редактирование курса "<?php echo $model->name; ?>"</h4>

<?php echo $this->renderPartial('_form', array('model'=>$model)); ?>