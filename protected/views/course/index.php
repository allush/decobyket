<?php
/* @var $this CourseController */
/* @var $dataProvider CActiveDataProvider */

?>

<?php $this->widget('zii.widgets.CListView', array(
	'dataProvider'=>$dataProvider,
	'itemView'=>'_view',
    'summaryText' => '',
)); ?>
