<?php
/* @var $this SparepartController */
/* @var $model Sparepart */

$this->breadcrumbs=array(
	'Spareparts'=>array('index'),
	$model->NAMA_BARANG=>array('view','id'=>$model->ID_SPAREPART),
	'Update Data Sparepart',
);

$this->menu=array(
	array('label'=>'List Sparepart', 'url'=>array('index')),
	//array('label'=>'Create Sparepart', 'url'=>array('create')),
	//array('label'=>'View Sparepart', 'url'=>array('view', 'id'=>$model->ID_SPAREPART)),
	//array('label'=>'Manage Sparepart', 'url'=>array('admin')),
);
?>

<h1>Update Data Sparepart <?php echo $model->NAMA_BARANG; ?></h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>