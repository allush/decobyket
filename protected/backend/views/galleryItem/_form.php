<?php
/* @var $this GalleryItemController */
/* @var $model GalleryItem */
/* @var $form CActiveForm */
?>

<div class="form">

    <?php $form = $this->beginWidget('CActiveForm', array(
    'id' => 'gallery-item-form',
    'enableAjaxValidation' => false,
    'htmlOptions' => array(
        'enctype' => 'multipart/form-data',
    ),
)); ?>

    <div>
        <?php echo $form->labelEx($model, 'name'); ?>
        <?php echo $form->textField($model, 'name', array('size' => 60, 'maxlength' => 255)); ?>
        <?php echo $form->error($model, 'name'); ?>
    </div>

    <div>
        <?php echo $form->labelEx($model, 'description'); ?>
        <?php echo $form->textArea($model, 'description', array('rows' => 6, 'cols' => 50)); ?>
        <?php echo $form->error($model, 'description'); ?>
    </div>

    <div>
        <?php echo $form->labelEx($model, 'imgName'); ?>

        <?php echo $form->fileField($model, 'imageFile', array('accept' => 'image/jpeg', 'multiple' => 'multiple')); ?>
        <?php
        echo $form->hiddenField($model, 'imgName', array('value' => $model->imgName));
        if (!$model->isNewRecord) {
            echo '<div>' . CHtml::image(Yii::app()->baseUrl . $model->thumbnail(), '') . '</div>';
        }
        ?>
        <?php echo $form->error($model, 'imgName'); ?>
    </div>

    <div>
        <?php echo $form->labelEx($model, 'id_gallery_catalog'); ?>
        <?php echo $form->dropDownList($model, 'id_gallery_catalog', CHtml::listData(GalleryCatalog::model()->findAll(), 'id_gallery_catalog', 'name'), array('prompt' => '')); ?>
        <?php echo $form->error($model, 'id_gallery_catalog'); ?>
    </div>

    <div>
        <?php echo CHtml::submitButton($model->isNewRecord ? 'Создать' : 'Сохранить', array('class' => 'btn')); ?>
    </div>

    <?php $this->endWidget(); ?>

</div><!-- form -->