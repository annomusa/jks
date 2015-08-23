<?php
/* @var $this OngkosController */
/* @var $model Ongkos */

$this->breadcrumbs=array(
	'Ongkoses'=>array('index'),
	$model->ID_ONGKOS,
);

$this->menu=array(
	array('label'=>'List Ongkos', 'url'=>array('index')),
	array('label'=>'Create Ongkos', 'url'=>array('create')),
	array('label'=>'Update Ongkos', 'url'=>array('update', 'id'=>$model->ID_ONGKOS)),
	array('label'=>'Delete Ongkos', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->ID_ONGKOS),'confirm'=>'Are you sure you want to delete this item?')),
	array('label'=>'Manage Ongkos', 'url'=>array('admin')),
);
?>

<h1>View Ongkos #<?php echo $model->ID_ONGKOS; ?></h1>

<?php $this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
	'attributes'=>array(
		'ID_ONGKOS',
		'ID_SATUAN',
		'TUJUAN',
		'HARGA',
	),
)); ?>
