<?php
/* @var $this ProductCatalogController */
/* @var $model ProductCatalog */

$this->menu=array(
    array('label'=>'Назад', 'url'=>array('index')),
    array(
        'label' => 'Удалить',
        'url' => '#',
        'linkOptions' => array(
            'submit' => array('delete', 'id' => $model->id_product_catalog),
            'confirm' => 'Вы уверены?',
            'params' => array('YII_CSRF_TOKEN' => Yii::app()->request->csrfToken),
        ),
        'itemOptions' => array('class' => 'pull-right btn-danger')
    ),
);
?>

<h4>Редактирование каталога магазина "<?php echo $model->name; ?>"</h4>

<?php echo $this->renderPartial('_form', array('model'=>$model)); ?>