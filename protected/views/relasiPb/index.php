<?php
/* @var $this RelasiPbController */
/* @var $dataProvider CActiveDataProvider */

$this->breadcrumbs=array(
	'Relasi Pbs',
);

$this->menu=array(
	array('label'=>'Create RelasiPb', 'url'=>array('create')),
	array('label'=>'Manage RelasiPb', 'url'=>array('admin')),
);
?>

<h1>Relasi Pbs</h1>

<?php $this->widget('zii.widgets.CListView', array(
	'dataProvider'=>$dataProvider,
	'itemView'=>'_view',
)); ?>
