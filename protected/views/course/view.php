<?php
/* @var $this CourseController */
/* @var $model Course */
?>
<h5><?php echo CHtml::link('Назад', array('index'), array('class' => 'colorAccent'));?></h5>

<h4 class='colorAccent'>
    <?php echo CHtml::encode($model->name); ?>
</h4>

<?php echo $model->content; ?>