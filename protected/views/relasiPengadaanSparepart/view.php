<?php
/* @var $this RelasiPengadaanSparepartController */
/* @var $model RelasiPengadaanSparepart */

$this->breadcrumbs=array(
	'Relasi Pengadaan Spareparts'=>array('index'),
	$model->ID_RELASI,
);

?>

<h1>Daftar Sparepart yang dipilih #<?php echo $id; ?></h1>

<?php 
$this->widget('bootstrap.widgets.TbGridView', array(
		'id'=>'relasiPengadaanSparepart-grid',
		'type' => TbHtml::GRID_TYPE_HOVER,
		'dataProvider'=>$model->search2($id),
		'template' => "{items}\n{pager}",
		'columns'=>array(
			array(
			'header'=>'No',   'value'=>'$this->grid->dataProvider->pagination->currentPage*$this->grid->dataProvider->pagination->pageSize + $row+1',
			),
			array(
				'name'=>'ID Pengadaan', 'value'=>'$data->ID_PENGADAAN'
				),
			array(
				'name'=>'Nama Sparepart', 'value'=>'$data->iDSPAREPART->NAMA_BARANG'
				),
			array(
				'name'=>'Jumlah', 'type'=>'raw', 'value'=>function($data,$row)
				{
					if($data->JUMLAH==NULL)
					{
						return TbHtml::link("ISI JUMLAH", array("relasiPengadaanSparepart/isi", "id"=>$data->ID_RELASI),array('style'=>'font-weight:900;text-decoration:none;'));
					}
					else return $data->JUMLAH;
				}
				),
			array(
				'name'=>'Harga Sementara', 'value'=>'$data->HARGA_SEMENTARA'
				),
			),
		));
 ?>
