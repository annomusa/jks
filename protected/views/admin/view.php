<?php
/* @var $this AdminController */
/* @var $model Admin */

$this->breadcrumbs=array(
	'Administrator'=>array('index'),
	$model->NAMA,
);

$this->menu=array(
	array('label'=>'List Admin', 'url'=>array('index')),
	//array('label'=>'Create Admin', 'url'=>array('create')),
	//array('label'=>'Update Admin', 'url'=>array('update', 'id'=>$model->ID_ADMIN)),
	//array('label'=>'Delete Admin', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->ID_ADMIN),'confirm'=>'Are you sure you want to delete this item?')),
	//array('label'=>'Manage Admin', 'url'=>array('admin')),
);
?>

<h1>View Admin - <?php echo $model->NAMA; ?></h1>

<?php $this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
	'attributes'=>array(
		'ID_ADMIN',
		'NAMA',
		'USERNAME',
		'PASSWORD',
		'PRIVILEGE',
	),
)); ?>
