<?php /* @var $this Controller */ ?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN"
        "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en" lang="en">
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8"/>
    <meta name="language" content="en"/>


    <!-- Twitter Bootstrap CSS framework -->
    <link rel="stylesheet" type="text/css" href="<?php echo Yii::app()->request->baseUrl; ?>/css/bootstrap.min.css"
          media="screen"/>

    <link rel="stylesheet/less" type="text/css" href="<?php echo Yii::app()->request->baseUrl; ?>/css/main.less"
          media="screen"/>


    <script src="<?php echo Yii::app()->request->baseUrl; ?>/js/bootstrap.min.js" type="text/javascript"></script>
    <script src="<?php echo Yii::app()->request->baseUrl; ?>/js/less-1.3.3.min.js" type="text/javascript"></script>

    <title><?php echo CHtml::encode($this->pageTitle); ?></title>
</head>

<body>

<div class="container" id="page">

    <div class="row" id="header">
        <div class="span4" id="logo"><?php echo CHtml::image(Yii::app()->baseUrl . '/images/logoDark.png'); ?></div>
        <div class="span8">
            <div class="topContacts">
                Санкт-Петербург, Ул.Бухарестская д.90<br>
                <?php echo CHtml::image(Yii::app()->baseUrl . '/images/phone.png')?> 8 981 73 45 771
                <br>
                <?php echo CHtml::image(Yii::app()->baseUrl . '/images/mail.png')?> info@decobyket.ru
            </div>
        </div>
    </div>
    <!-- header -->

    <div class="row" id="menu">
        <div class="span12">
            <?php $this->widget('zii.widgets.CMenu', array(
            'items' => array(
                array('label' => 'О ШКОЛЕ', 'url' => array('/site/index')),
                array('label' => 'ГАЛЕРЕЯ', 'url' => array('/site/page', 'view' => 'about')),
                array('label' => 'ОБУЧЕНИЕ', 'url' => array('/course/index')),
                array('label' => 'МАТЕРИАЛЫ', 'url' => array('/site/materials')),
                array('label' => 'МАГАЗИН', 'url' => array('/product/index')),
                array('label' => 'КОНТАКТЫ', 'url' => array('/site/contacts')),
            ),

        )); ?>
        </div>
    </div>
    <div class="row">
        <?php echo $content; ?>
    </div>

    <div class="row" id="footer">
        <div class="span3">
            <?php echo CHtml::image(Yii::app()->baseUrl . '/images/logoLight.png');?>
        </div>
        <div class="span2">
            <?php echo CHtml::link('О ШКОЛЕ', array('/site/index'), array('class' => 'footerLink'));?>
            <?php echo CHtml::link('ОБУЧЕНИЕ', array('/course/index'), array('class' => 'footerLink'));?>
            <?php echo CHtml::link('РАСПИСАНИЕ', array('/course/index'), array('class' => 'footerLink'));?>
            <?php echo CHtml::link('ГАЛЛЕРЕЯ', array('/product/index'), array('class' => 'footerLink'));?>
        </div>
        <div class="span2">
            <?php echo CHtml::link('МАТЕРИАЛЫ', array('/site/materials/'), array('class' => 'footerLink'));?>
            <?php echo CHtml::link('МАГАЗИН', array('/product/index'), array('class' => 'footerLink'));?>
            <?php echo CHtml::link('НОВОСТИ', array('/news/index'), array('class' => 'footerLink'));?>
            <?php echo CHtml::link('КОНТАКТЫ', array('/site/contacts'), array('class' => 'footerLink'));?>
        </div>
        <div class="span5">
            <div class="footerContacts">
                Санкт-Петербург, Ул.Бухарестская д.90<br>
                <?php echo CHtml::image(Yii::app()->baseUrl . '/images/phone.png')?>
                8 981 73 45 771
                <?php echo CHtml::image(Yii::app()->baseUrl . '/images/mail.png')?>
                info@decobyket.ru
            </div>
        </div>
    </div>
    <!-- footer -->
</div>
<!-- page -->

</body>
</html>
