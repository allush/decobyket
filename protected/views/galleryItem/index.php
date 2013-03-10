<?php
/* @var $this GalleryItemController */
/* @var $dataProvider CActiveDataProvider */
?>
<div class="row galleryCatalogs">
    <div class="span12">
        <?php $this->widget('zii.widgets.CListView', array(
        'dataProvider' => $galleryCatalogs,
        'itemView' => 'catalog',
        'emptyText' => '',
        'itemsTagName' => 'ul',
        'itemsCssClass' => 'inline',
        'summaryText' => '',
    )); ?>
    </div>
</div>

<?php $this->widget('zii.widgets.CListView', array(
    'dataProvider' => $dataProvider,
    'itemView' => '_view',
    'itemsTagName' => 'ul',
    'itemsCssClass' => 'thumbnails',
    'emptyText' => '',
    'summaryText' => '',
    'pager' => array(
        'firstPageLabel'=>'<<',
        'prevPageLabel'=>'<',
        'nextPageLabel'=>'>',
        'lastPageLabel'=>'>>',
        'maxButtonCount'=>'10',
        'header'=>'',
        'cssFile' => '',
        'selectedPageCssClass' => 'active',
    ),
)); ?>
