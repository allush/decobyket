<?php
/* @var $this NewsController */
/* @var $model News */

$this->menu = array(
    array('label' => 'Назад', 'url' => array('index')),
    array(
        'label' => 'Удалить',
        'url' => '',
        'linkOptions' => array(
            'confirm' => 'Вы уверены?',
            'submit' => array('delete', 'id' => $model->id_news),
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

<h4>Редактирование новости "<?php echo $model->title; ?>"</h4>

<?php echo $this->renderPartial('_form', array('model' => $model)); ?>