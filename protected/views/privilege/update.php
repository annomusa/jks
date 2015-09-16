<?php
/* @var $this PrivilegeController */
/* @var $model Privilege */

$this->breadcrumbs=array(
	'Privileges'=>array('index'),
	$model->ID_PRIVILEGE=>array('view','id'=>$model->ID_PRIVILEGE),
	'Update',
);

$this->menu=array(
	array('label'=>'List Privilege', 'url'=>array('index')),
	array('label'=>'Create Privilege', 'url'=>array('create')),
	array('label'=>'View Privilege', 'url'=>array('view', 'id'=>$model->ID_PRIVILEGE)),
	array('label'=>'Manage Privilege', 'url'=>array('admin')),
);
?>

<h1>Update Privilege <?php echo $model->ID_PRIVILEGE; ?></h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>