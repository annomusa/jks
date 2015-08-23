<?php
/* @var $this RelasiPengadaanSparepartController */
/* @var $model RelasiPengadaanSparepart */

$this->breadcrumbs=array(
	'Relasi Pengadaan Spareparts'=>array('index'),
	$model->ID_RELASI,
);

$this->menu=array(
	array('label'=>'List RelasiPengadaanSparepart', 'url'=>array('index')),
	array('label'=>'Create RelasiPengadaanSparepart', 'url'=>array('create')),
	array('label'=>'Update RelasiPengadaanSparepart', 'url'=>array('update', 'id'=>$model->ID_RELASI)),
	array('label'=>'Delete RelasiPengadaanSparepart', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->ID_RELASI),'confirm'=>'Are you sure you want to delete this item?')),
	array('label'=>'Manage RelasiPengadaanSparepart', 'url'=>array('admin')),
);
?>

<h1>View RelasiPengadaanSparepart #<?php echo $model->ID_RELASI; ?></h1>

<?php $this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
	'attributes'=>array(
		'ID_RELASI',
		'ID_PENGADAAN',
		'ID_SPAREPART',
		'ID_SATUAN',
		'JUMLAH',
		'HARGA_SEMENTARA',
	),
)); ?>
