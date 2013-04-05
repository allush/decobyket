<?php
/* @var $this ProductController */
/* @var $model Product */


$this->menu = array(
    array('label' => 'Список товаров', 'url' => array('index')),
    array(
        'label' => 'Удалить',
        'url' => '#',
        'linkOptions' => array(
            'submit' => array('delete', 'id' => $model->id_product),
            'confirm' => 'Вы уверены?',
            'params' => array('YII_CSRF_TOKEN' => Yii::app()->request->csrfToken),
        ),
        'itemOptions' => array('class' => 'pull-right btn-danger')
    ),
);


$this->widget('zii.widgets.CDetailView', array(
    'data' => $model,
    'attributes' => array(
        'date_create',
        'name',
        'description',
        'cost',
        'existence',
        array(
            'name' => 'id_product_catalog',
            'value' => ProductCatalog::model()->findByPk($model->id_product_catalog)->name,
        ),
        array(
            'name' => 'visible',
            'value' => $model->visible == 1 ? 'Да' : 'Нет',
        ),
    ),
    'tagName' => 'table',
    'itemCssClass' => '',
    'htmlOptions' => array(
        'class' => 'table table-bordered table-striped table-condensed table-hover'
    ),
));

?>

<h4>Фотографии товара</h4>

<?php
echo CHtml::beginForm(array('addPicture'), 'post', array('enctype' => 'multipart/form-data'));
echo CHtml::hiddenField('id_product', $model->id_product);
?>
<?php echo CHtml::fileField('picture[]', '', array('required' => 'required', 'multiple' => 'multiple', 'accept' => 'image/jpeg')); ?>
<br>
<?php echo CHtml::submitButton('Загрузить', array('class' => 'btn')); ?>
<?php echo CHtml::endForm();
?>
<table>
    <?php
    foreach ($model->pictures as $picture) {
        ?>
        <tr>
            <td><?php echo CHtml::image(Yii::app()->baseUrl . '/images/product/' . $picture->picture_path, '', array('style' => 'width: 100px; margin: 10px;'));?></td>
            <td><?php echo CHtml::link('Удалить', array('productPicture/delete', 'id' => $picture->id_product_picture), array('confirm' => 'Вы уверены?'));?></td>
        </tr>
    <?php
    }
    ?>
</table>
