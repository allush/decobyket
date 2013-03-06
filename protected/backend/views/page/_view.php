<?php
/* @var $this PageController */
/* @var $data Page */
?>

<div>
    <?php echo ($index+1) . ". " . CHtml::link($data->title, array('update', 'id' => $data->id_page)); ?>
</div>