<?php
/* @var $this SatuanController */
/* @var $model Satuan */

$this->breadcrumbs=array(
	'Satuan'=>array('index'),
	'Create',
);

$this->menu=array(
	array('label'=>'List Satuan', 'url'=>array('index')),
	//array('label'=>'Manage Satuan', 'url'=>array('admin')),
);
?>

<h1>Buat Daftar Satuan Baru</h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>