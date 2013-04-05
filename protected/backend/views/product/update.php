<?php
/* @var $this ProductController */
/* @var $model Product */


$this->menu = array(
    array('label' => 'Назад', 'url' => array('view', 'id' => $model->id_product)),
);
?>
    <h4>Редактирование товара "<?php echo $model->name;?>"</h4>
<?php echo $this->renderPartial('_form', array('model' => $model)); ?>