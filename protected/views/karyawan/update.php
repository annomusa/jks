<?php
/* @var $this KaryawanController */
/* @var $model Karyawan */

$this->breadcrumbs=array(
	'Karyawans'=>array('index'),
	$model->ID_KARYAWAN=>array('view','id'=>$model->ID_KARYAWAN),
	'Update',
);

$this->menu=array(
	array('label'=>'List Karyawan', 'url'=>array('index')),
	array('label'=>'Create Karyawan', 'url'=>array('create')),
	array('label'=>'View Karyawan', 'url'=>array('view', 'id'=>$model->ID_KARYAWAN)),
	array('label'=>'Manage Karyawan', 'url'=>array('admin')),
);
?>

<h1>Update Karyawan <?php echo $model->ID_KARYAWAN; ?></h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>