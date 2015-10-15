<?php
/* @var $this PosisiBanController */
/* @var $model PosisiBan */

$this->breadcrumbs=array(
	'Posisi Bans'=>array('index'),
	'Create',
);

$this->menu=array(
	array('label'=>'List PosisiBan', 'url'=>array('index')),
	array('label'=>'Manage PosisiBan', 'url'=>array('admin')),
);
?>

<h1>Create PosisiBan</h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>