<?php
/* @var $this PengadaanController */
/* @var $model Pengadaan */

$this->breadcrumbs=array(
	'Pengadaans'=>array('index'),
	'Create',
);

$this->menu=array(
	array('label'=>'List Pengadaan', 'url'=>array('index')),
	array('label'=>'Manage Pengadaan', 'url'=>array('admin')),
);
?>

<h1>Pilih jenis Spare-parts yang akan diadakan</h1>

<?php
	$this->renderPartial('/sparepart/admin', array('model'=>Sparepart::model()));
?>
