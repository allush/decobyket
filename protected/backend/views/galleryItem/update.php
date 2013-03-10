<?php
/* @var $this GalleryItemController */
/* @var $model GalleryItem */

$this->menu = array(
    array('label' => 'Назад', 'url' => array('index')),
    array(
        'label' => 'Удалить',
        'url' => '',
        'linkOptions' => array(
            'confirm' => 'Вы уверены?',
            'submit' => array('delete', 'id' => $model->id_gallery_item),
            'params' => array(
                'YII_CSRF_TOKEN' => Yii::app()->request->csrfToken
            ),
        ),
        'itemOptions' => array(
            'class' => 'btn-danger pull-right',
        ),
    ),
);
?>

<h4>Редактирование работы "<?php echo $model->name; ?>"</h4>

<?php echo $this->renderPartial('_form', array('model' => $model)); ?>