<?php
/* @var $this CourseController */
/* @var $data Course */
?>

<div>
    <?php echo ($index + 1) . ". " . CHtml::link(CHtml::encode($data->name), array('update', 'id' => $data->id_course)); ?>
</div>