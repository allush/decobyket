<?php
/* @var $this NewsController */
/* @var $model News */

$this->menu=array(
	array('label'=>'Все новости', 'url'=>array('index')),
);
?>

<h4>Редактирование новости "<?php echo $model->title; ?>"</h4>

<?php echo $this->renderPartial('_form', array('model'=>$model)); ?>