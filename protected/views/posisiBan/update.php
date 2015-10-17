<?php
/* @var $this PosisiBanController */
/* @var $model PosisiBan */

$this->breadcrumbs=array(
	'Posisi Bans'=>array('index'),
	$model->ID_POSISI=>array('view','id'=>$model->ID_POSISI),
	'Update',
);

$this->menu=array(
	array('label'=>'List PosisiBan', 'url'=>array('index')),
	array('label'=>'Create PosisiBan', 'url'=>array('create')),
	array('label'=>'View PosisiBan', 'url'=>array('view', 'id'=>$model->ID_POSISI)),
	array('label'=>'Manage PosisiBan', 'url'=>array('admin')),
);
?>

<h1>Update PosisiBan <?php echo $model->ID_POSISI; ?></h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>