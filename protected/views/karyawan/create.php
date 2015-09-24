<?php
/* @var $this KaryawanController */
/* @var $model Karyawan */

$this->breadcrumbs=array(
	'Karyawan'=>array('index'),
	'Create',
);

$this->menu=array(
	array('label'=>'List Data Karyawan', 'url'=>array('index')),
	//array('label'=>'Manage Karyawan', 'url'=>array('admin')),
);
?>

<h1>Buat Data Karyawan Baru</h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>