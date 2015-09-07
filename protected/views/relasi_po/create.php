<?php
/* @var $this Relasi_poController */
/* @var $model RelasiPo */

$this->breadcrumbs=array(
	'Relasi Pos'=>array('index'),
	'Create',
);

$this->menu=array(
	array('label'=>'List RelasiPo', 'url'=>array('index')),
	array('label'=>'Manage RelasiPo', 'url'=>array('admin')),
);
?>

<h1>Create RelasiPo</h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>