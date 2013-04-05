<?php
/* @var $this ProductController */
/* @var $model Product */
/* @var $form CActiveForm */
?>

<div class="form">

    <?php $form = $this->beginWidget('CActiveForm', array(
        'id' => 'product-form',
        'enableAjaxValidation' => false,
    )); ?>

    <div>
        <?php echo $form->labelEx($model, 'name'); ?>
        <?php echo $form->textField($model, 'name', array('size' => 60, 'maxlength' => 255, 'class' => 'span5')); ?>
        <?php echo $form->error($model, 'name'); ?>
    </div>

    <div>
        <?php echo $form->labelEx($model, 'description'); ?>
        <?php echo $form->textArea($model, 'description', array('rows' => 6, 'cols' => 50, 'class' => 'span5')); ?>
        <?php echo $form->error($model, 'description'); ?>
    </div>

    <div>
        <?php echo $form->labelEx($model, 'id_product_catalog'); ?>
        <?php echo $form->dropDownList($model, 'id_product_catalog', CHtml::listData(ProductCatalog::model()->findAll(array('order' => 'name asc')), 'id_product_catalog', 'name'), array('class' => 'span5')); ?>
        <?php echo $form->error($model, 'id_product_catalog'); ?>
    </div>

    <div>
        <?php echo $form->labelEx($model, 'cost'); ?>
        <?php echo $form->numberField($model, 'cost', array('min' => 0, 'class' => 'span1')); ?>
        <?php echo $form->error($model, 'cost'); ?>
    </div>

    <div>
        <?php echo $form->labelEx($model, 'existence'); ?>
        <?php echo $form->numberField($model, 'existence', array('min' => 0, 'class' => 'span1')); ?>
        <?php echo $form->error($model, 'existence'); ?>
    </div>

    <div>
        <?php echo $form->labelEx($model, 'visible'); ?>
        <?php echo $form->checkBox($model, 'visible'); ?>
        <?php echo $form->error($model, 'visible'); ?>
    </div>

    <br>

    <div>
        <?php echo CHtml::submitButton($model->isNewRecord ? 'Создать' : 'Сохранить', array('class' => 'btn')); ?>
    </div>

    <?php $this->endWidget(); ?>

</div><!-- form -->