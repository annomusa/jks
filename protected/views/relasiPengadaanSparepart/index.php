<?php
/* @var $this RelasiPengadaanSparepartController */
/* @var $dataProvider CActiveDataProvider */

$this->breadcrumbs=array(
	'Relasi Pengadaan Spareparts',
);

$this->menu=array(
	array('label'=>'Create RelasiPengadaanSparepart', 'url'=>array('create')),
	array('label'=>'Manage RelasiPengadaanSparepart', 'url'=>array('admin')),
);
?>

<h1>Relasi Pengadaan Spareparts</h1>

<?php $this->widget('zii.widgets.CListView', array(
	'dataProvider'=>$dataProvider,
	'itemView'=>'_view',
)); ?>
