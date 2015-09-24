<?php
/* @var $this KaryawanController */
/* @var $model Karyawan */

$this->breadcrumbs=array(
	'Karyawan'=>array('index'),
	$model->NAMA=>array('view','id'=>$model->ID_KARYAWAN),
	'Update Data Karyawan',
);

$this->menu=array(
	array('label'=>'List Karyawan', 'url'=>array('index')),
	//array('label'=>'Create Karyawan', 'url'=>array('create')),
	//array('label'=>'View Karyawan', 'url'=>array('view', 'id'=>$model->ID_KARYAWAN)),
	//array('label'=>'Manage Karyawan', 'url'=>array('admin')),
);
?>

<h1>Update Data Karyawan - <?php echo $model->NAMA; ?></h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>