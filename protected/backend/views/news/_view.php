<?php
/* @var $this NewsController */
/* @var $data News */
?>

<div class="row">
    <div class="span9">
        <small><?php echo CHtml::encode(date("d-m-Y", strtotime($data->datetime))); ?></small>
        <?php echo CHtml::link(CHtml::encode($data->title), array('update', 'id' => $data->id_news)); ?>
    </div>
</div>
