<?php
/* @var $this BanController */
/* @var $model Ban */

$this->breadcrumbs=array(
	'List Data Ban'=>array('admin'),
	'Buat Data Ban',
);

$this->menu=array(
	array('label'=>'List Data Ban', 'url'=>array('admin')),
);
?>

<h1>Buat Data Ban</h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>