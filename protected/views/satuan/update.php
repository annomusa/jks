<?php
/* @var $this SatuanController */
/* @var $model Satuan */

$this->breadcrumbs=array(
	'Satuan'=>array('index'),
	$model->SATUAN=>array('view','id'=>$model->ID_SATUAN),
	'Update Data Satuan',
);

$this->menu=array(
	array('label'=>'List Satuan', 'url'=>array('index')),
	//array('label'=>'Create Satuan', 'url'=>array('create')),
	//array('label'=>'View Satuan', 'url'=>array('view', 'id'=>$model->ID_SATUAN)),
	//array('label'=>'Manage Satuan', 'url'=>array('admin')),
);
?>

<h1>Update Data Satuan - <?php echo $model->SATUAN; ?></h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>