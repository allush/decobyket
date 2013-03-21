<?php
/* @var $this NewsController */
/* @var $model News */
/* @var $form CActiveForm */
?>


<?php $form = $this->beginWidget('CActiveForm', array(
    'id' => 'news-form',
    'enableAjaxValidation' => false,
)); ?>

<?php echo $form->errorSummary($model); ?>

<div>
    <?php echo $form->hiddenField($model, 'id_user', array('value' => Yii::app()->user->id)) ?>
</div>

<div>
    <?php echo $form->labelEx($model, 'title'); ?>
    <?php echo $form->textField($model, 'title', array('class' => 'span12', 'maxlength' => 255)); ?>
    <?php echo $form->error($model, 'title'); ?>
</div>


<div>
    <?php echo $form->labelEx($model, 'body'); ?>
    <?php echo $form->textArea($model, 'body') ?>
    <script>
        var editor = CKEDITOR.replace('News[body]');
        CKFinder.setupCKEditor( editor, '/ckfinder/' );
    </script>
    <?php echo $form->error($model, 'body'); ?>
</div>



<br/>
<div>
    <?php echo CHtml::submitButton($model->isNewRecord ? 'Создать' : 'Сохранить', array('class' => 'btn span3')); ?>
</div>

<?php $this->endWidget(); ?>