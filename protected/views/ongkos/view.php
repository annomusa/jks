<?php
/* @var $this OngkosController */
/* @var $model Ongkos */

$this->breadcrumbs=array(
	'Ongkos'=>array('index'),
	$model->TUJUAN,
);

$this->menu=array(
	array('label'=>'List Ongkos', 'url'=>array('index')),
	//array('label'=>'Create Ongkos', 'url'=>array('create')),
	//array('label'=>'Update Ongkos', 'url'=>array('update', 'id'=>$model->ID_ONGKOS)),
	//array('label'=>'Delete Ongkos', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->ID_ONGKOS),'confirm'=>'Are you sure you want to delete this item?')),
	//array('label'=>'Manage Ongkos', 'url'=>array('admin')),
);
?>

<h1>Lihat Ongkos Tujuan <?php echo $model->TUJUAN; ?></h1>

<?php $this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
	'attributes'=>array(
		'ID_ONGKOS',
		'ID_SATUAN',
		'TUJUAN',
		'HARGA',
	),
)); ?>
