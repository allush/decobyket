<?php
/* @var $this NewsController */
/* @var $dataProvider CActiveDataProvider */

 $this->widget('zii.widgets.CListView', array(
	'dataProvider'=>$dataProvider,
	'itemView'=>'_view',
     'summaryText' => '{start} - {end} из {count}'
));
?>
