<?php
/* @var $this RelasiPengadaanSparepartController */
/* @var $model RelasiPengadaanSparepart */

$this->breadcrumbs=array(
	'Relasi Pengadaan Spareparts'=>array('index'),
	'Create',
);

$this->menu=array(
	array('label'=>'List RelasiPengadaanSparepart', 'url'=>array('index')),
	array('label'=>'Manage RelasiPengadaanSparepart', 'url'=>array('admin')),
);
?>

<h1>Create RelasiPengadaanSparepart</h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>