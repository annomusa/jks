<?php
/* @var $this PerjalananController */
/* @var $model Perjalanan */

$this->breadcrumbs=array(
	'Perjalanans'=>array('index'),
	$model->ID_PERJALANAN=>array('view','id'=>$model->ID_PERJALANAN),
	'Update',
);

$this->menu=array(
	array('label'=>'List Perjalanan', 'url'=>array('index')),
	array('label'=>'Create Perjalanan', 'url'=>array('create')),
	array('label'=>'View Perjalanan', 'url'=>array('view', 'id'=>$model->ID_PERJALANAN)),
	array('label'=>'Manage Perjalanan', 'url'=>array('admin')),
);
?>

<h1>Update Perjalanan <?php echo $model->ID_PERJALANAN; ?></h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>