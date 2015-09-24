<?php
/* @var $this PenerbitController */
/* @var $model Penerbit */

$this->breadcrumbs=array(
	'Penerbit'=>array('index'),
	$model->NAMA_PENERBIT,
);

$this->menu=array(
	array('label'=>'List Penerbit', 'url'=>array('index')),
	//array('label'=>'Create Penerbit', 'url'=>array('create')),
	//array('label'=>'Update Penerbit', 'url'=>array('update', 'id'=>$model->ID_PENERBIT)),
	//array('label'=>'Delete Penerbit', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->ID_PENERBIT),'confirm'=>'Are you sure you want to delete this item?')),
	//array('label'=>'Manage Penerbit', 'url'=>array('admin')),
);
?>

<h1>Lihat Data Penerbit - <?php echo $model->NAMA_PENERBIT; ?></h1>

<?php $this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
	'attributes'=>array(
		'ID_PENERBIT',
		'NAMA_PENERBIT',
		'NO_TLP',
		'ALAMAT',
	),
)); ?>
