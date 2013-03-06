<?php
/* @var $this CourseController */
/* @var $dataProvider CActiveDataProvider */

$this->menu=array(
	array('label'=>'Создать курс', 'url'=>array('create')),
);
?>

<?php $this->widget('zii.widgets.CListView', array(
	'dataProvider'=>$dataProvider,
	'itemView'=>'_view',
)); ?>
