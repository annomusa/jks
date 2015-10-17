<?php
/* @var $this PosisiBanController */
/* @var $model PosisiBan */

$this->breadcrumbs=array(
	'Posisi Bans'=>array('index'),
	$model->ID_POSISI,
);

$this->menu=array(
	array('label'=>'List PosisiBan', 'url'=>array('index')),
	array('label'=>'Create PosisiBan', 'url'=>array('create')),
	array('label'=>'Update PosisiBan', 'url'=>array('update', 'id'=>$model->ID_POSISI)),
	array('label'=>'Delete PosisiBan', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->ID_POSISI),'confirm'=>'Are you sure you want to delete this item?')),
	array('label'=>'Manage PosisiBan', 'url'=>array('admin')),
);
?>

<h1>View PosisiBan #<?php echo $model->ID_POSISI; ?></h1>

<?php $this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
	'attributes'=>array(
		'ID_POSISI',
		'POSISI',
	),
)); ?>
