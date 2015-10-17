<?php
/* @var $this SparepartController */
/* @var $dataProvider CActiveDataProvider */

$this->breadcrumbs=array(
	'Sparepart',
);

$this->menu=array(
	//array('label'=>'Buat Daftar Sparepart Baru', 'url'=>array('create')),
	//array('label'=>'Manage Sparepart', 'url'=>array('admin')),
);
?>

<h1>Data Sparepart</h1>

<?php 
	$this->widget('bootstrap.widgets.TbGridView', array(
	'id'=>'sparepart-grid',
	'type' => TbHtml::GRID_TYPE_HOVER,
	'dataProvider'=>$model->search(),
	'filter'=>$model,
	'columns'=>array(

		array(
			'header'=>'No','value'=>'$this->grid->dataProvider->pagination->currentPage*$this->grid->dataProvider->pagination->pageSize + $row+1',
			),
		array(
			'name'=>'NAMA_BARANG',
			'header'=>'Nama Barang',
			),
		array(
			'header'=>'Harga Satuan',
			'value'=>'$data->HARGA_SATUAN',
			),
		array(
			'header'=>'Stok',
			'value'=>'$data->STOK'
			),
		array(
				'class'=>'CButtonColumn',
				'template'=>'{update}{delete}',
			),
	),

)); ?>
