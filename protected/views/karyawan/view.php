<?php
/* @var $this KaryawanController */
/* @var $model Karyawan */

$this->breadcrumbs=array(
	'Karyawan'=>array('index'),
	$model->NAMA,
);

$this->menu=array(
	array('label'=>'List Karyawan', 'url'=>array('index')),
	//array('label'=>'Create Karyawan', 'url'=>array('create')),
	//array('label'=>'Update Karyawan', 'url'=>array('update', 'id'=>$model->ID_KARYAWAN)),
	//array('label'=>'Delete Karyawan', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->ID_KARYAWAN),'confirm'=>'Are you sure you want to delete this item?')),
	//array('label'=>'Manage Karyawan', 'url'=>array('admin')),
);
?>

<h1>Lihat Data Karyawan - <?php echo $model->NAMA; ?></h1>

<?php $this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
	'attributes'=>array(
		'ID_KARYAWAN',
		'NAMA',
		'NO_HP',
		'ALAMAT',
		'TGL_MASUK_KERJA',
		'PENEMPATAN',
		'STATUS',
	),
)); ?>
