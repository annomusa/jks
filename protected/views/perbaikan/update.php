<?php
/* @var $this PerbaikanController */
/* @var $model Perbaikan */

$this->breadcrumbs=array(
	'Perbaikans'=>array('index'),
	$model->ID_PERBAIKAN=>array('view','id'=>$model->ID_PERBAIKAN),
	'Update',
);

$this->menu=array(
	array('label'=>'List Perbaikan', 'url'=>array('index')),
	array('label'=>'Create Perbaikan', 'url'=>array('create')),
	array('label'=>'View Perbaikan', 'url'=>array('view', 'id'=>$model->ID_PERBAIKAN)),
	array('label'=>'Manage Perbaikan', 'url'=>array('admin')),
);
?>

<h1>Update Perbaikan <?php echo $model->ID_PERBAIKAN; ?></h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>