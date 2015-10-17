<?php
/* @var $this KaryawanController */
/* @var $dataProvider CActiveDataProvider */

$this->breadcrumbs=array(
	'Karyawan',
);

$this->menu=array(
	array('label'=>'Buat Data Karyawan Baru', 'url'=>array('create')),
	//array('label'=>'Manage Karyawan', 'url'=>array('admin')),
);
?>

<h1>Data Karyawan</h1>

<?php $this->widget('zii.widgets.grid.CGridView', array(
	'id'=>'karyawan-grid',
	'dataProvider'=>$model->search(),
	'filter'=>$model,
	'columns'=>array(
		'NAMA',
		'NO_HP',
		'ALAMAT',
		'TGL_MASUK_KERJA',
		'PENEMPATAN',
		/*
		'STATUS',
		*/
		array(
			'class'=>'CButtonColumn',
			'template'=>'{update}{delete}',
		),
	),
)); ?>
