<?php
/* @var $this KendaraanController */
/* @var $model Kendaraan */

$this->breadcrumbs=array(
	'Kendaraan'=>array('index'),
	$model->ID_KENDARAAN=>array('view','id'=>$model->ID_KENDARAAN),
	'Update Data Kendaraan',
);

$this->menu=array(
	array('label'=>'List Kendaraan', 'url'=>array('index')),
	//array('label'=>'Create Kendaraan', 'url'=>array('create')),
	//array('label'=>'View Kendaraan', 'url'=>array('view', 'id'=>$model->ID_KENDARAAN)),
	//array('label'=>'Manage Kendaraan', 'url'=>array('admin')),
);
?>

<h1>Update Data Kendaraan - <?php echo $model->ID_KENDARAAN; ?></h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>