<?php
/* @var $this OngkosController */
/* @var $model Ongkos */

$this->breadcrumbs=array(
	'Ongkoses'=>array('index'),
	$model->ID_ONGKOS=>array('view','id'=>$model->ID_ONGKOS),
	'Update',
);

$this->menu=array(
	array('label'=>'List Ongkos', 'url'=>array('index')),
	array('label'=>'Create Ongkos', 'url'=>array('create')),
	array('label'=>'View Ongkos', 'url'=>array('view', 'id'=>$model->ID_ONGKOS)),
	array('label'=>'Manage Ongkos', 'url'=>array('admin')),
);
?>

<h1>Update Ongkos <?php echo $model->ID_ONGKOS; ?></h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>