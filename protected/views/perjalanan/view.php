<?php
/* @var $this PerjalananController */
/* @var $model Perjalanan */

$this->breadcrumbs=array(
	'Perjalanans'=>array('index'),
	$model->ID_PERJALANAN,
);

$this->menu=array(
	array('label'=>'List Perjalanan', 'url'=>array('index')),
	array('label'=>'Create Perjalanan', 'url'=>array('create')),
	array('label'=>'Update Perjalanan', 'url'=>array('update', 'id'=>$model->ID_PERJALANAN)),
	array('label'=>'Delete Perjalanan', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->ID_PERJALANAN),'confirm'=>'Are you sure you want to delete this item?')),
	array('label'=>'Manage Perjalanan', 'url'=>array('admin')),
);
?>

<h1>View Perjalanan #<?php echo $model->ID_PERJALANAN; ?></h1>

<?php $this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
	'attributes'=>array(
		'ID_PERJALANAN',
		'ID_PENERBIT',
		'ID_ONGKOS',
		'ID_KENDARAAN',
		'TGL_PERJALANAN',
		'NO_SURAT_PO',
		'JENIS_PERINTAH',
		'RITASE',
		'TITIPAN_AWAL',
		'LEBIH',
		'KURANG',
		'AKHIR',
	),
)); ?>
