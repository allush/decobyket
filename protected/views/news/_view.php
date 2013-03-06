<?php
/* @var $this NewsController */
/* @var $data News */
?>

<div class="news">
    <div class="date">
        <?php echo CHtml::encode(date("d/m/Y", strtotime($data->datetime)));?>
    </div>

    <div class="body">
        <?php echo $data->body;?>
    </div>

    <div class="more">
        <?php echo CHtml::link('ПОДРОБНЕЕ', array('/news/view', 'id' => $data->id_news)); ?>
    </div>
</div>