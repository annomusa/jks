<?php
/* @var $this OngkosController */
/* @var $dataProvider CActiveDataProvider */

$this->breadcrumbs=array(
	'Ongkos',
);

$this->menu=array(
	array('label'=>'Buat Data Ongkos Baru', 'url'=>array('create2')),
	//array('label'=>'Manage Ongkos', 'url'=>array('admin')),
);
?>

<h1>Data Ongkos</h1>

<?php $this->widget('zii.widgets.grid.CGridView', array(
	'id'=>'ongkos-grid',
	'dataProvider'=>$model->search(),
	'filter'=>$model,
	'columns'=>array(
		'TUJUAN',
		'HARGA',
		array(
			'header'=>'Satuan', 'value'=>'$data->iDSATUAN->SATUAN'
		),
		array(
				'header'=>"Jenis Ongkos", 'value'=>function($data,$row)
				{
					if($data->JENIS_ONGKOS==0)
					{
						return "POKOK";
					}
					else return 'TAMBAHAN';
				}
		),
		array(
			'class'=>'CButtonColumn',
			'template'=>'{update}{delete}',
		),
	),
)); ?>

