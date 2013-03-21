<?php /* @var $this Controller */ ?>
<!DOCTYPE html>

<html lang="ru">

<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8"/>
    <meta name="language" content="ru"/>

    <script type="text/javascript" src="https://ajax.googleapis.com/ajax/libs/jquery/1.5.1/jquery.min.js"></script>

    <title><?php echo CHtml::encode($this->pageTitle); ?></title>

    <?php
    Yii::app()->clientScript->registerCssFile(
        CHtml::asset(Yii::app()->basePath . '/backend/assets/css/bootstrap.min.css')
    );
    Yii::app()->clientScript->registerCssFile(
        CHtml::asset(Yii::app()->basePath . '/backend/assets/css/main.css')
    );

    Yii::app()->clientScript->registerScriptFile(
        CHtml::asset(Yii::app()->basePath . '/backend/assets/js/bootstrap.min.js'),
        CClientScript::POS_HEAD
    );
    ?>
    <script type="text/javascript" src="<?php echo Yii::app()->baseUrl . '/ckeditor/ckeditor.js'; ?>"></script>
    <script type="text/javascript" src="<?php echo Yii::app()->baseUrl . '/ckfinder/ckfinder.js'; ?>"></script>
</head>

<body>

<div class="container">
    <div class="row" id="menu">

        <div class="span12">
            <div class="navbar">
                <div class="navbar-inner">
                    <?php $this->widget('zii.widgets.CMenu', array(
                    'items' => array(
                        array('label' => 'Страницы', 'url' => array('/page/index')),
                        array('label' => 'Новости', 'url' => array('/news/index')),
                        array('label' => 'Курсы', 'url' => array('/course/index')),
                        array('label' => 'Галерея', 'url' => array('/galleryItem/index')),
                        array('label' => 'Магазин(Не активен)', 'url' => '#'),
                        array('label' => 'Пользователи', 'url' => array('/user/index')),
                        array('label' => '(' . Yii::app()->user->getState('login') . ') Выйти', 'url' => array('/site/logout'), 'visible' => !Yii::app()->user->isGuest),
                    ),
                    'htmlOptions' => array('class' => 'nav'),
                )); ?>
                </div>
            </div>
        </div>

    </div>

    <div class="row">
        <div class="span12">
            <div class="row">
                <div class="span12">
                    <?php
                    $this->widget('zii.widgets.CMenu', array(
                            'items' => $this->menu,
                            'htmlOptions' => array('style' => 'margin-left: 0;'),
                            'itemCssClass' => 'btn',
                        )
                    );
                    ?><!-- menu -->
                </div>
            </div>


            <div class="row" id="content">
                <div class="span12">
                    <?php echo $content; ?>
                </div>
            </div>
        </div>
    </div>
</div>


</body>

</html>
