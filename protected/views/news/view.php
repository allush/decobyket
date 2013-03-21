<?php
/* @var $this NewsController */
/* @var $model News */

$this->breadcrumbs=array(
	'News'=>array('index'),
	$model->title,
);
?>

<h5><?php echo CHtml::link('Назад', array('index'), array('class' => 'colorAccent'));?></h5>

<div class="news">
    <div class="date">
        <?php echo CHtml::encode(date("d/m/Y", strtotime($model->datetime)));?>
    </div>

    <div class="body">
        <?php echo $model->body;?>
    </div>
</div>
