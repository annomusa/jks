<?php
/* @var $this OngkosController */
/* @var $model Ongkos */

$this->breadcrumbs=array(
	'Ongkoses'=>array('index'),
	'Create',
);

$this->menu=array(
	array('label'=>'List Ongkos', 'url'=>array('index')),
	array('label'=>'Manage Ongkos', 'url'=>array('admin')),
);
?>

<h1>Create Ongkos</h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>