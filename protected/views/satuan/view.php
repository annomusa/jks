<?php
/* @var $this SatuanController */
/* @var $model Satuan */

$this->breadcrumbs=array(
	'Satuans'=>array('index'),
	$model->ID_SATUAN,
);

$this->menu=array(
	array('label'=>'List Satuan', 'url'=>array('index')),
	array('label'=>'Create Satuan', 'url'=>array('create')),
	array('label'=>'Update Satuan', 'url'=>array('update', 'id'=>$model->ID_SATUAN)),
	array('label'=>'Delete Satuan', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->ID_SATUAN),'confirm'=>'Are you sure you want to delete this item?')),
	array('label'=>'Manage Satuan', 'url'=>array('admin')),
);
?>

<h1>View Satuan #<?php echo $model->ID_SATUAN; ?></h1>

<?php $this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
	'attributes'=>array(
		'ID_SATUAN',
		'SATUAN',
		'JENIS_SATUAN',
	),
)); ?>
