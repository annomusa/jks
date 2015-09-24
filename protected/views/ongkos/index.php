<?php
/* @var $this OngkosController */
/* @var $dataProvider CActiveDataProvider */

$this->breadcrumbs=array(
	'Ongkos',
);

$this->menu=array(
	//array('label'=>'Buat Data Ongkos Baru', 'url'=>array('create')),
	//array('label'=>'Manage Ongkos', 'url'=>array('admin')),
);
?>

<h1>Data Ongkos</h1>

<?php $this->widget('zii.widgets.grid.CGridView', array(
	'id'=>'ongkos-grid',
	'dataProvider'=>$model->search(),
	'filter'=>$model,
	'columns'=>array(
		'ID_ONGKOS',
		'ID_SATUAN',
		'TUJUAN',
		'HARGA',
		array(
			'class'=>'CButtonColumn',
		),
	),
)); ?>

