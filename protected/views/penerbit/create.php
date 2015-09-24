<?php
/* @var $this PenerbitController */
/* @var $model Penerbit */

$this->breadcrumbs=array(
	'Penerbit'=>array('index'),
	'Buat Data Penerbit Baru',
);

$this->menu=array(
	array('label'=>'List Penerbit', 'url'=>array('index')),
	//array('label'=>'Manage Penerbit', 'url'=>array('admin')),
);
?>

<h1>Buat Data Penerbit Baru</h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>