<?php
/* @var $this PrivilegeController */
/* @var $model Privilege */

$this->breadcrumbs=array(
	'Privileges'=>array('index'),
	$model->ID_PRIVILEGE,
);

$this->menu=array(
	array('label'=>'List Privilege', 'url'=>array('index')),
	array('label'=>'Create Privilege', 'url'=>array('create')),
	array('label'=>'Update Privilege', 'url'=>array('update', 'id'=>$model->ID_PRIVILEGE)),
	array('label'=>'Delete Privilege', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->ID_PRIVILEGE),'confirm'=>'Are you sure you want to delete this item?')),
	array('label'=>'Manage Privilege', 'url'=>array('admin')),
);
?>

<h1>View Privilege #<?php echo $model->ID_PRIVILEGE; ?></h1>

<?php $this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
	'attributes'=>array(
		'ID_PRIVILEGE',
		'NAMA_PRIVILEGE',
	),
)); ?>
