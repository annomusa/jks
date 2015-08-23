<?php
/* @var $this PerbaikanController */
/* @var $model Perbaikan */

$this->breadcrumbs=array(
	'Perbaikans'=>array('index'),
	'Create',
);

$this->menu=array(
	array('label'=>'List Perbaikan', 'url'=>array('index')),
	array('label'=>'Manage Perbaikan', 'url'=>array('admin')),
);
?>

<h1>Create Perbaikan</h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>