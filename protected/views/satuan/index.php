<?php
/* @var $this SatuanController */
/* @var $dataProvider CActiveDataProvider */

$this->breadcrumbs=array(
	'Satuan',
);

$this->menu=array(
	array('label'=>'Buat Daftar Satuan Baru', 'url'=>array('create')),
	//array('label'=>'Manage Satuan', 'url'=>array('admin')),
);
?>

<h1>Data Satuan</h1>

<?php $this->widget('zii.widgets.grid.CGridView', array(
	'id'=>'satuan-grid',
	'dataProvider'=>$model->search(),
	'filter'=>$model,
	'columns'=>array(
		'SATUAN',
		'JENIS_SATUAN',
		array(
			'class'=>'CButtonColumn',
			'template'=>'{update}{delete}',
		),
	),
)); ?>
