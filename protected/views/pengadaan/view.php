<?php
/* @var $this PengadaanController */
/* @var $model Pengadaan */

$this->breadcrumbs=array(
	'Pengadaans'=>array('index'),
	$model->ID_PENGADAAN,
);

$this->menu=array(
	array('label'=>'List Pengadaan', 'url'=>array('index')),
	array('label'=>'Create Pengadaan', 'url'=>array('create')),
	array('label'=>'Update Pengadaan', 'url'=>array('update', 'id'=>$model->ID_PENGADAAN)),
	array('label'=>'Delete Pengadaan', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->ID_PENGADAAN),'confirm'=>'Are you sure you want to delete this item?')),
	array('label'=>'Manage Pengadaan', 'url'=>array('admin')),
);
?>

<h1>View Pengadaan #<?php echo $model->ID_PENGADAAN; ?></h1>

<?php $this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
	'attributes'=>array(
		'ID_PENGADAAN',
		'NO_PO',
		'TGL_PENGADAAN',
		'PERMINTAAN',
		'HARGA_TOTAL',
		'NAMA_TOKO',
		'NO_TLP',
	),
)); ?>
