<?php
/* @var $this Relasi_poController */
/* @var $dataProvider CActiveDataProvider */

$this->breadcrumbs=array(
	'Relasi Pos',
);

$this->menu=array(
	array('label'=>'Create RelasiPo', 'url'=>array('create')),
	array('label'=>'Manage RelasiPo', 'url'=>array('admin')),
);
?>

<h1>Relasi Pos</h1>

<?php $this->widget('zii.widgets.CListView', array(
	'dataProvider'=>$dataProvider,
	'itemView'=>'_view',
)); ?>
