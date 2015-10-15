<?php
/* @var $this BanController */
/* @var $model Ban */

$this->breadcrumbs=array(
	'List Data Ban'=>array('admin'),
	'Update',
);

$this->menu=array(
	array('label'=>'List Data Ban', 'url'=>array('admin')),
);
?>

<h1>Update Data Ban</h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>