<?php
/* @var $this UserController */
/* @var $model User */


$this->menu=array(
	array('label'=>'Назад', 'url'=>array('index')),
);
?>

<h4>Создание нового пользователя</h4>

<?php echo $this->renderPartial('_form', array('model'=>$model)); ?>