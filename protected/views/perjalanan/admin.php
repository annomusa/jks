<?php
/* @var $this PerjalananController */
/* @var $model Perjalanan */

$this->breadcrumbs=array(
	'Perjalanan'=>array('index'),
	'Rekap PO',
);

$this->menu=array(
	//array('label'=>'List Perjalanan', 'url'=>array('index')),
	//array('label'=>'Create Perjalanan', 'url'=>array('create')),
);

?>

<h1>Rekap PO</h1>

<div class="search-form">
<?php 
	$this->renderPartial('_search',array('model'=>$model,));

?>
</div><!-- search-form -->

<div align="right">
	<?php
		echo TbHtml::formActions(array(
		TbHtml::linkButton('Cetak Laporan Pdf', array('submit'=>array('Cetaklaporan', 'penerbit'=>$model->ID_PENERBIT, 'nopol'=>$model->ID_KENDARAAN, 'tgl_awal'=>$model->from_date, 'tgl_akhir'=>$model->to_date),'target'=>'_blank','style' => 'text-decoration:none;','color' => TbHtml::BUTTON_COLOR_PRIMARY)),
		TbHtml::linkButton('Cetak Laporan Excel', array('submit'=>array('Cetakexcel', 'penerbit'=>$model->ID_PENERBIT, 'nopol'=>$model->ID_KENDARAAN, 'tgl_awal'=>$model->from_date, 'tgl_akhir'=>$model->to_date),'target'=>'_blank','style' => 'text-decoration:none;','color' => TbHtml::BUTTON_COLOR_PRIMARY)),
		));
	?>

<p></p>

<?php 

$this->widget('bootstrap.widgets.TbGridView', array(
		'id'=>'perjalanan-grid',
		'type' => TbHtml::GRID_TYPE_HOVER,
		'dataProvider'=>$model->search2(),
		'template' => "{items}\n{pager}",
		'columns'=>array(
			array(
			'header'=>'No',   'value'=>'$this->grid->dataProvider->pagination->currentPage*$this->grid->dataProvider->pagination->pageSize + $row+1',
			),
			array(
				'name'=>'Nama Penerbit', 'value'=>'$data->iDPENERBIT->NAMA_PENERBIT'
				),
			array(
				'name'=>'NOPOL Kendaraan', 'value'=>'$data->iDKENDARAAN->NOPOL'
				),
			array(
				'name'=>'Tanggal Perjalanan', 'value'=>function($data,$row)
				{
					if($data->TGL_PERJALANAN!="0000-00-00")
					{
						return date("d-M-y", strtotime($data->TGL_PERJALANAN));
					}
					else return '-';
				}
				),
			array(
				'name'=>'NO Surat PO', 'value'=>'$data->NO_SURAT_PO'
				),
			array(
				'name'=>'Jenis Perintah', 'value'=>'$data->JENIS_PERINTAH'
				),
			array(
				'name'=>'Ritase', 'value'=>'$data->RITASE'
				),
			array(
				'name'=>'Titipan Awal', 'value'=>'$data->TITIPAN_AWAL'
				),
			array(
				'name'=>'Lebih', 'value'=>'$data->LEBIH'
				),
			array(
				'name'=>'Kurang', 'value'=>'$data->KURANG'
				),
			array(
				'name'=>'Akhir', 'value'=>'$data->AKHIR'
				),
			array(
				'name'=>'Status', 'value'=>'$data->STATUS'
				),
			array(
				'name'=>'Aksi', 'type'=>'raw', 'value'=>function($data, $row)
				{
					if($data->STATUS=="BARU")
					{
						return TbHtml::link("Pilih Tujuan", array("create2", "id"=>$data->ID_PERJALANAN),array('style'=>'font-weight:900;text-decoration:none;'));
					}
					else if($data->STATUS=="TUJUAN TERISI")
					{
						return TbHtml::link("Finalisasi", array("create3", "id"=>$data->ID_PERJALANAN),array('style' => 'font-weight:900;text-decoration:none;'));
					}
					else if($data->STATUS=="SELESAI")
					{
						return TbHtml::link("Lihat Detil", array("view", "id"=>$data->ID_PERJALANAN),array('style' => 'font-weight:900;text-decoration:none;'));
					}
				}
				),
			),
		));

?>
