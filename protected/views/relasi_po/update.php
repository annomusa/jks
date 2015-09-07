<?php
/* @var $this Relasi_poController */
/* @var $model RelasiPo */

$this->breadcrumbs=array(
	'Relasi Pos'=>array('index'),
	$model->ID_RELASI_PO=>array('view','id'=>$model->ID_RELASI_PO),
	'Update',
);

$this->menu=array(
	array('label'=>'List RelasiPo', 'url'=>array('index')),
	array('label'=>'Create RelasiPo', 'url'=>array('create')),
	array('label'=>'View RelasiPo', 'url'=>array('view', 'id'=>$model->ID_RELASI_PO)),
	array('label'=>'Manage RelasiPo', 'url'=>array('admin')),
);
?>

<h1>Update RelasiPo <?php echo $model->ID_RELASI_PO; ?></h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>