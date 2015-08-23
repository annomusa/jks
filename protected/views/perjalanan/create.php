<?php
/* @var $this PerjalananController */
/* @var $model Perjalanan */

$this->breadcrumbs=array(
	'Perjalanans'=>array('index'),
	'Create',
);

$this->menu=array(
	array('label'=>'List Perjalanan', 'url'=>array('index')),
	array('label'=>'Manage Perjalanan', 'url'=>array('admin')),
);
?>

<h1>Create Perjalanan</h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>