<?php
/* @var $this OngkosController */
/* @var $model Ongkos */

$this->breadcrumbs=array(
	'Ongkos'=>array('index'),
	$model->TUJUAN=>array('view','id'=>$model->ID_ONGKOS),
	'Update Data Ongkos',
);

$this->menu=array(
	array('label'=>'List Ongkos', 'url'=>array('index')),
	//array('label'=>'Create Ongkos', 'url'=>array('create')),
	//array('label'=>'View Ongkos', 'url'=>array('view', 'id'=>$model->ID_ONGKOS)),
	//array('label'=>'Manage Ongkos', 'url'=>array('admin')),
);
?>

<h1>Update Data Ongkos Tujuan <?php echo $model->TUJUAN; ?></h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>