<?php
/* @var $this PageController */
/* @var $data Page */
?>

<div>
    <small><?php echo ($index + 1) . ". "; ?></small>
    <?php echo CHtml::link($data->title, array('update', 'id' => $data->id_page)); ?>
</div>