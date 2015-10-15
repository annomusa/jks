<?php
/* @var $this RelasiPbController */
/* @var $model RelasiPb */

$this->breadcrumbs=array(
	'Relasi Pbs'=>array('index'),
	'Create',
);

$this->menu=array(
	array('label'=>'List RelasiPb', 'url'=>array('index')),
	array('label'=>'Manage RelasiPb', 'url'=>array('admin')),
);
?>

<h1>Create RelasiPb</h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>