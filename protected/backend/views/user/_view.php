<?php
/* @var $this UserController */
/* @var $data User */
?>

<div>
    <?php echo ($index + 1) . '. ' . CHtml::link(CHtml::encode($data->surname . ' ' . $data->name), array('update', 'id' => $data->id_user)); ?>
</div>