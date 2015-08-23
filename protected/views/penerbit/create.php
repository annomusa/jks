<?php
/* @var $this PenerbitController */
/* @var $model Penerbit */

$this->breadcrumbs=array(
	'Penerbits'=>array('index'),
	'Create',
);

$this->menu=array(
	array('label'=>'List Penerbit', 'url'=>array('index')),
	array('label'=>'Manage Penerbit', 'url'=>array('admin')),
);
?>

<h1>Create Penerbit</h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>