<?php
/* @var $this SparepartController */
/* @var $model Sparepart */

$this->breadcrumbs=array(
	'Spareparts'=>array('index'),
	'Manage',
);

$this->menu=array(
	array('label'=>'List Sparepart', 'url'=>array('index')),
	array('label'=>'Create Sparepart', 'url'=>array('create')),
);

Yii::app()->clientScript->registerScript('search', "
$('.search-button').click(function(){
	$('.search-form').toggle();
	return false;
});
$('.search-form form').submit(function(){
	$('#sparepart-grid').yiiGridView('update', {
		data: $(this).serialize()
	});
	return false;
});
");
?>

<h1>Daftar Spareparts</h1>

<?php 
	$this->widget('bootstrap.widgets.TbGridView', array(
	'id'=>'sparepart-grid',
	'type' => TbHtml::GRID_TYPE_HOVER,
	'dataProvider'=>$model->search(),
	'filter'=>$model,
	'columns'=>array(

		array(
			'header'=>'No',
			'value'=>'$data->ID_SPAREPART',
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
				'header'=>'Aksi', 'type'=>'raw', 'value'=>'CHtml::link(\'pilih\', array(\'sparepart/insert\', \'id\'=>$data->ID_SPAREPART,\'peng\'=>$_GET[\'id\']))'
			)
	),
	/*
	'columns'=> function($data)
	{
		if(empty($data))
		{
			return TbHtml::linkButton("Buat Material Kantor Baru", array("submit"=>array("materialKantor/create", "id"=>$_GET["id"]),"color" => TbHtml::BUTTON_COLOR_INFO));
		}
	}
	*/
	'emptyText'=> TbHtml::linkButton("Buat Nama Sparepart Baru", array("submit"=>array("sparepart/create", "id"=>$_GET["id"]),"color" => TbHtml::BUTTON_COLOR_INFO))
	//'emptyText'=> 'TbHtml::linkButton(\'Buat Material Kantor Baru\', array(\'submit\'=>array(\'materialKantor/create\', \'id\'=>$_GET[\'id\']),\'color\' => TbHtml::BUTTON_COLOR_INFO))'
)); ?>
