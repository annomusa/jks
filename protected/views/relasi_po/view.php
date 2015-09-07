<?php
/* @var $this Relasi_poController */
/* @var $model RelasiPo */

$this->breadcrumbs=array(
	'Relasi Pos'=>array('index'),
	$model->ID_RELASI_PO,
);

$this->menu=array(
	array('label'=>'List RelasiPo', 'url'=>array('index')),
	array('label'=>'Create RelasiPo', 'url'=>array('create')),
	array('label'=>'Update RelasiPo', 'url'=>array('update', 'id'=>$model->ID_RELASI_PO)),
	array('label'=>'Delete RelasiPo', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->ID_RELASI_PO),'confirm'=>'Are you sure you want to delete this item?')),
	array('label'=>'Manage RelasiPo', 'url'=>array('admin')),
);
?>

<h1>View RelasiPo #<?php echo $model->ID_RELASI_PO; ?></h1>

<?php $this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
	'attributes'=>array(
		'ID_RELASI_PO',
		'ID_PERJALANAN',
		'ID_ONGKOS',
		'KETERANGAN',
	),
)); ?>
