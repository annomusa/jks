<?php
/* @var $this SatuanController */
/* @var $dataProvider CActiveDataProvider */

$this->breadcrumbs=array(
	'Satuan',
);

$this->menu=array(
	array('label'=>'Create Satuan', 'url'=>array('create')),
	array('label'=>'Manage Satuan', 'url'=>array('admin')),
);
?>

<h1>Data Satuan</h1>

<?php $this->widget('zii.widgets.CListView', array(
	'dataProvider'=>$dataProvider,
	'itemView'=>'_view',
)); ?>
