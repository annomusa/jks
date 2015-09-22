<?php
/* @var $this SparepartController */
/* @var $dataProvider CActiveDataProvider */

$this->breadcrumbs=array(
	'Sparepart',
);

$this->menu=array(
	array('label'=>'Create Sparepart', 'url'=>array('create')),
	array('label'=>'Manage Sparepart', 'url'=>array('admin')),
);
?>

<h1>Data Sparepart</h1>

<?php $this->widget('zii.widgets.CListView', array(
	'dataProvider'=>$dataProvider,
	'itemView'=>'_view',
)); ?>
