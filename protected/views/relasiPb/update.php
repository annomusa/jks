<?php
/* @var $this RelasiPbController */
/* @var $model RelasiPb */

$this->breadcrumbs=array(
	'Relasi Pbs'=>array('index'),
	$model->ID_RELASI_PB=>array('view','id'=>$model->ID_RELASI_PB),
	'Update',
);

$this->menu=array(
	array('label'=>'List RelasiPb', 'url'=>array('index')),
	array('label'=>'Create RelasiPb', 'url'=>array('create')),
	array('label'=>'View RelasiPb', 'url'=>array('view', 'id'=>$model->ID_RELASI_PB)),
	array('label'=>'Manage RelasiPb', 'url'=>array('admin')),
);
?>

<h1>Update RelasiPb <?php echo $model->ID_RELASI_PB; ?></h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>