<?php
/* @var $this PengadaanController */
/* @var $model Pengadaan */

$this->breadcrumbs=array(
	'Pengadaans'=>array('index'),
	$model->ID_PENGADAAN=>array('view','id'=>$model->ID_PENGADAAN),
	'Update',
);

$this->menu=array(
	array('label'=>'List Pengadaan', 'url'=>array('index')),
	array('label'=>'Create Pengadaan', 'url'=>array('create')),
	array('label'=>'View Pengadaan', 'url'=>array('view', 'id'=>$model->ID_PENGADAAN)),
	array('label'=>'Manage Pengadaan', 'url'=>array('admin')),
);
?>

<h1>Update Pengadaan <?php echo $model->ID_PENGADAAN; ?></h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>