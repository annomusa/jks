<?php
/* @var $this PengadaanController */
/* @var $model Pengadaan */

$this->breadcrumbs=array(
	'Pengadaan'=>array('index'),
	'Rekap Pengadaan',
);

$this->menu=array(
	//array('label'=>'List Pengadaan', 'url'=>array('index')),
	//array('label'=>'Create Pengadaan', 'url'=>array('create')),
);

Yii::app()->clientScript->registerScript('search', "
$('.search-button').click(function(){
	$('.search-form').toggle();
	return false;
});
$('.search-form form').submit(function(){
	$('#pengadaan-grid').yiiGridView('update', {
		data: $(this).serialize()
	});
	return false;
});
");
?>

<h1>Rekap Pengadaan</h1>

<div class="search-form">
<?php $this->renderPartial('_search',array(
	'model'=>$model,
));

?>
</div><!-- search-form -->

<?php 
$this->widget('bootstrap.widgets.TbGridView', array(
		'id'=>'pengadaan-grid',
		'type' => TbHtml::GRID_TYPE_HOVER,
		'dataProvider'=>$model->search2(),
		'template' => "{items}\n{pager}",
		'columns'=>array(
			array(
			'header'=>'No',   'value'=>'$this->grid->dataProvider->pagination->currentPage*$this->grid->dataProvider->pagination->pageSize + $row+1',
			),
			array(
				'name'=>'ID Pengadaan', 'value'=>'$data->ID_PENGADAAN'
				),
			array(
				'name'=>'No Po', 'value'=>'$data->NO_PO'
				),
			array(
				'name'=>'Tanggal Pengadaan', 'value'=>'$data->TGL_PENGADAAN'
				),
			array(
				'name'=>'Permintaan', 'value'=>'$data->PERMINTAAN'
				),
			array(
				'name'=>'Nama Toko', 'value'=>'$data->NAMA_TOKO'
				),
			array(
				'name'=>'Harga Total', 'value'=>'$data->HARGA_TOTAL'
				),
			array(
				'name'=>'Status', 'value'=>'$data->STATUS'
				),
			array(
				'name'=>'Aksi', 'type'=>'raw', 'value'=>function($data, $row)
				{
					if($data->STATUS=="BARU")
					{
						return TbHtml::link("Pilih Sparepart", array("sparepart/admin", "id"=>$data->ID_PENGADAAN),array('style'=>'font-weight:900;text-decoration:none;'));
					}
					else if($data->STATUS=="PENYETUJUAN KEUANGAN")
					{
						return TbHtml::link("Setujui", array("create3", "id"=>$data->ID_PENGADAAN),array('style' => 'font-weight:900;text-decoration:none;'));
					}
					else if($data->STATUS=="DISETUJUI KEUANGAN")
					{
						return TbHtml::link("Lihat Detil", array("view", "id"=>$data->ID_PENGADAAN),array('style' => 'font-weight:900;text-decoration:none;'));
					}
				}
				),
			),
		)); 
?>
