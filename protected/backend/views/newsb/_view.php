<?php
/* @var $this NewsController */
/* @var $data News */
?>

<div class="row">
    <div class="span9">
        <?php echo CHtml::encode($data->datetime); ?>
    </div>
</div>

<div class="row">
    <div class="span9">
        <?php echo CHtml::link(CHtml::encode($data->title), array('update', 'id' => $data->id_news)); ?>
    </div>

</div>
<div class="row">
    <div class="span9">
        <?php echo CHtml::encode($data->user->name." ".$data->user->surname); ?>
    </div>
</div>