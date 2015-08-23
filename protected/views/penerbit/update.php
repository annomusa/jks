<?php
/* @var $this PenerbitController */
/* @var $model Penerbit */

$this->breadcrumbs=array(
	'Penerbits'=>array('index'),
	$model->ID_PENERBIT=>array('view','id'=>$model->ID_PENERBIT),
	'Update',
);

$this->menu=array(
	array('label'=>'List Penerbit', 'url'=>array('index')),
	array('label'=>'Create Penerbit', 'url'=>array('create')),
	array('label'=>'View Penerbit', 'url'=>array('view', 'id'=>$model->ID_PENERBIT)),
	array('label'=>'Manage Penerbit', 'url'=>array('admin')),
);
?>

<h1>Update Penerbit <?php echo $model->ID_PENERBIT; ?></h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>