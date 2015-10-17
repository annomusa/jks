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

<?php $this->widget('bootstrap.widgets.TbGridView', array(
		'id'=>'kendaraan-grid',
		'type' => TbHtml::GRID_TYPE_HOVER,
		'dataProvider'=>$model->search(),
		'columns'=>array(
		array(
			'header'=>'Karyawan',
			'value'=>'$data->iDKARYAWAN->NAMA',
			),
		array(
			'name'=>'NOPOL',
			),
		array(
			'name'=>'STATUS_SOPIR',
			),
		array(
			'class'=>'CButtonColumn',
			'template'=>'{update}{delete}',
		),
	),
)); ?>
