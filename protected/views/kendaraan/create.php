<?php
/* @var $this KendaraanController */
/* @var $model Kendaraan */

$this->breadcrumbs=array(
	'Kendaraan'=>array('index'),
	'Buat Data Kendaraan Baru',
);

$this->menu=array(
	array('label'=>'List Kendaraan', 'url'=>array('index')),
	//array('label'=>'Manage Kendaraan', 'url'=>array('admin')),
);
?>

<h1>Buat Data Kendaraan Baru</h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>