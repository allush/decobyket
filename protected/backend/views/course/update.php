<?php
/* @var $this CourseController */
/* @var $model Course */

$this->menu = array(
    array('label' => 'Назад', 'url' => array('index')),
    array(
        'label' => 'Удалить',
        'url' => '',
        'linkOptions' => array(
            'confirm' => 'Вы уверены?',
            'submit' => array('delete', 'id' => $model->id_course),
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

<h4>Редактирование курса "<?php echo $model->name; ?>"</h4>

<?php echo $this->renderPartial('_form', array('model' => $model)); ?>