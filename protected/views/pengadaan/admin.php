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

?>

<h1>Rekap Pengadaan</h1>

<div class="search-form">
<?php $this->renderPartial('_search',array(
	'model'=>$model,
));

?>
</div><!-- search-form -->

<div align="right">
	<?php
		echo TbHtml::formActions(array(
		TbHtml::linkButton('Cetak Laporan', array('submit'=>array('Cetaklaporan', 'tgl_awal'=>$model->from_date, 'tgl_akhir'=>$model->to_date, 'toko'=>$model->NAMA_TOKO, 'status'=>$model->STATUS),'target'=>'_blank','style' => 'text-decoration:none;','color' => TbHtml::BUTTON_COLOR_PRIMARY)),
		));
	?>

<p></p>

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
				'name'=>'No Po', 'value'=>'$data->NO_PO'
				),
			array(
				'name'=>'Tanggal Pengadaan', 'value'=>function($data,$row)
				{
					if($data->TGL_PENGADAAN!="0000-00-00")
					{
						return date("d-M-y", strtotime($data->TGL_PENGADAAN));
					}
					else return '-';
				}
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
