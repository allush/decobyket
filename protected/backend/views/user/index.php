<?php
/* @var $this UserController */
/* @var $dataProvider CActiveDataProvider */

$this->menu=array(
	array('label'=>'Создать пользователя', 'url'=>array('create')),
);
?>

<?php $this->widget('zii.widgets.CListView', array(
	'dataProvider'=>$dataProvider,
	'itemView'=>'_view',
    'summaryText' => 'Пользователи {start} - {end} из {count}',
    'htmlOptions' => array(

    ),
)); ?>
