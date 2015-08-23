<?php
/* @var $this PerbaikanController */
/* @var $model Perbaikan */

$this->breadcrumbs=array(
	'Perbaikans'=>array('index'),
	$model->ID_PERBAIKAN,
);

$this->menu=array(
	array('label'=>'List Perbaikan', 'url'=>array('index')),
	array('label'=>'Create Perbaikan', 'url'=>array('create')),
	array('label'=>'Update Perbaikan', 'url'=>array('update', 'id'=>$model->ID_PERBAIKAN)),
	array('label'=>'Delete Perbaikan', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->ID_PERBAIKAN),'confirm'=>'Are you sure you want to delete this item?')),
	array('label'=>'Manage Perbaikan', 'url'=>array('admin')),
);
?>

<h1>View Perbaikan #<?php echo $model->ID_PERBAIKAN; ?></h1>

<?php $this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
	'attributes'=>array(
		'ID_PERBAIKAN',
		'ID_KENDARAAN',
		'TGL_PERBAIKAN',
		'KERUSAKAN',
		'ESTIMASI_WAKTU_PERBAIKAN',
	),
)); ?>
