<?php
/* @var $this BanController */
/* @var $model Ban */

$this->breadcrumbs=array(
	'Bans'=>array('index'),
	$model->ID_BAN,
);

$this->menu=array(
	array('label'=>'List Ban', 'url'=>array('index')),
	array('label'=>'Create Ban', 'url'=>array('create')),
	array('label'=>'Update Ban', 'url'=>array('update', 'id'=>$model->ID_BAN)),
	array('label'=>'Delete Ban', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->ID_BAN),'confirm'=>'Are you sure you want to delete this item?')),
	array('label'=>'Manage Ban', 'url'=>array('admin')),
);
?>

<h1>View Ban #<?php echo $model->ID_BAN; ?></h1>

<?php $this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
	'attributes'=>array(
		'ID_BAN',
		'ID_POSISI',
		'NOMOR_SERI',
		'MERK',
		'HARGA',
		'JUMLAH',
	),
)); ?>
