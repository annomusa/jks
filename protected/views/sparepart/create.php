<?php
/* @var $this SparepartController */
/* @var $model Sparepart */

$this->breadcrumbs=array(
	'Spareparts'=>array('index'),
	'Create',
);

$this->menu=array(
	array('label'=>'List Sparepart', 'url'=>array('index')),
	array('label'=>'Manage Sparepart', 'url'=>array('admin')),
);
?>

<h1>Create Sparepart</h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>