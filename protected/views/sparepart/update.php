<?php
/* @var $this SparepartController */
/* @var $model Sparepart */

$this->breadcrumbs=array(
	'Spareparts'=>array('index'),
	$model->ID_SPAREPART=>array('view','id'=>$model->ID_SPAREPART),
	'Update',
);

$this->menu=array(
	array('label'=>'List Sparepart', 'url'=>array('index')),
	array('label'=>'Create Sparepart', 'url'=>array('create')),
	array('label'=>'View Sparepart', 'url'=>array('view', 'id'=>$model->ID_SPAREPART)),
	array('label'=>'Manage Sparepart', 'url'=>array('admin')),
);
?>

<h1>Update Sparepart <?php echo $model->ID_SPAREPART; ?></h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>