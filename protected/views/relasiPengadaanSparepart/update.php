<?php
/* @var $this RelasiPengadaanSparepartController */
/* @var $model RelasiPengadaanSparepart */

$this->breadcrumbs=array(
	'Relasi Pengadaan Spareparts'=>array('index'),
	$model->ID_RELASI=>array('view','id'=>$model->ID_RELASI),
	'Update',
);

$this->menu=array(
	array('label'=>'List RelasiPengadaanSparepart', 'url'=>array('index')),
	array('label'=>'Create RelasiPengadaanSparepart', 'url'=>array('create')),
	array('label'=>'View RelasiPengadaanSparepart', 'url'=>array('view', 'id'=>$model->ID_RELASI)),
	array('label'=>'Manage RelasiPengadaanSparepart', 'url'=>array('admin')),
);
?>

<h1>Update RelasiPengadaanSparepart <?php echo $model->ID_RELASI; ?></h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>