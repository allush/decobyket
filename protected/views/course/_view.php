<?php
/* @var $this CourseController */
/* @var $data Course */
?>
<h4>
    <?php echo CHtml::link(CHtml::encode($data->name), array('view', 'id' => $data->id_course), array('class' => 'colorAccent')); ?>
</h4>

<?php echo $data->content; ?>