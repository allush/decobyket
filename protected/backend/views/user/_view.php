<?php
/* @var $this UserController */
/* @var $data User */
?>

<div>
	<?php echo CHtml::link(CHtml::encode($data->name .' '.$data->surname), array('view', 'id'=>$data->id_user)); ?>

	<?php echo CHtml::encode($data->email); ?>
</div>