<?php
/* @var $this KendaraanController */
/* @var $model Kendaraan */

$this->breadcrumbs=array(
	'Kendaraan'=>array('index'),
	$model->ID_KENDARAAN,
);

$this->menu=array(
	array('label'=>'List Kendaraan', 'url'=>array('index')),
	//array('label'=>'Create Kendaraan', 'url'=>array('create')),
	//array('label'=>'Update Kendaraan', 'url'=>array('update', 'id'=>$model->ID_KENDARAAN)),
	//array('label'=>'Delete Kendaraan', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->ID_KENDARAAN),'confirm'=>'Are you sure you want to delete this item?')),
	//array('label'=>'Manage Kendaraan', 'url'=>array('admin')),
);
?>

<h1>Lihat Data Kendaraan - <?php echo $model->ID_KENDARAAN; ?></h1>

<?php $this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
	'attributes'=>array(
		'ID_KENDARAAN',
		'ID_KARYAWAN',
		'NOPOL',
		'STATUS_SOPIR',
	),
)); ?>
