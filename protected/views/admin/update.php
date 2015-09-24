<?php
/* @var $this AdminController */
/* @var $model Admin */

$this->breadcrumbs=array(
	'Administrator'=>array('index'),
	$model->NAMA=>array('view','id'=>$model->ID_ADMIN),
	'Update Data Administrator',
);

$this->menu=array(
	array('label'=>'List Administrator', 'url'=>array('index')),
	//array('label'=>'Create Admin', 'url'=>array('create')),
	//array('label'=>'View Admin', 'url'=>array('view', 'id'=>$model->ID_ADMIN)),
	//array('label'=>'Manage Admin', 'url'=>array('admin')),
);
?>

<h1>Update Data Administrator - <?php echo $model->NAMA; ?></h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>