<?php
/* @var $this KendaraanController */
/* @var $dataProvider CActiveDataProvider */

$this->breadcrumbs=array(
	'Kendaraan',
);

$this->menu=array(
	array('label'=>'Buat Data Kendaraan Baru', 'url'=>array('create')),
	//array('label'=>'Manage Kendaraan', 'url'=>array('admin')),
);
?>

<h1>Data Kendaraan</h1>

<?php $this->widget('zii.widgets.grid.CGridView', array(
	'id'=>'kendaraan-grid',
	'dataProvider'=>$model->search(),
	'filter'=>$model,
	'columns'=>array(
		'ID_KENDARAAN',
		'ID_KARYAWAN',
		'NOPOL',
		'STATUS_SOPIR',
		array(
			'class'=>'CButtonColumn',
		),
	),
)); ?>
