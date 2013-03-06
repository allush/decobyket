<?php
/* @var $this PageController */
/* @var $model Page */

$this->menu=array(
	array('label'=>'Назад', 'url'=>array('index')),
);
?>

<h4>Редактирование страницы "<?php echo $model->title; ?>"</h4>

<?php echo $this->renderPartial('_form', array('model'=>$model)); ?>