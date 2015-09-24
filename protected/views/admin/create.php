<?php
/* @var $this AdminController */
/* @var $model Admin */

$this->breadcrumbs=array(
	'Administrator'=>array('index'),
	'Create',
);

$this->menu=array(
	array('label'=>'List Administrator', 'url'=>array('index')),
	//array('label'=>'Manage Admin', 'url'=>array('admin')),
);
?>

<h1>Buat Data Administrator Baru</h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>