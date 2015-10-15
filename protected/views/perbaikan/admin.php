<?php
/* @var $this PerbaikanController */
/* @var $model Perbaikan */

$this->breadcrumbs=array(
	'Perbaikan'=>array('index'),
	'Rekap Perbaikan',
);

/*$this->menu=array(
	array('label'=>'List Perbaikan', 'url'=>array('index')),
	array('label'=>'Create Perbaikan', 'url'=>array('create')),
);*/

?>

<h1>Rekap Perbaikan</h1>

<div class="search-form">
<?php $this->renderPartial('_search',array(
	'model'=>$model,
)); ?>
</div><!-- search-form -->

<div align="right">
	<?php
		echo TbHtml::formActions(array(
		TbHtml::linkButton('Cetak Laporan', array('submit'=>array('Cetaklaporan', 'nopol'=>$model->NOPOL, 'tgl_awal'=>$model->from_date, 'tgl_akhir'=>$model->to_date, 'jenis'=>$model->JENIS_PERBAIKAN),'target'=>'_blank','style' => 'text-decoration:none;','color' => TbHtml::BUTTON_COLOR_PRIMARY)),
		));
	?>

<p></p>

<?php 
$this->widget('bootstrap.widgets.TbGridView', array(
		'id'=>'perbaikan-grid',
		'type' => TbHtml::GRID_TYPE_HOVER,
		'dataProvider'=>$model->search(),
		'template' => "{items}\n{pager}",
		'columns'=>array(
			array(
			'header'=>'No',   'value'=>'$this->grid->dataProvider->pagination->currentPage*$this->grid->dataProvider->pagination->pageSize + $row+1',
			),
			array(
				'name'=>'NOPOL Kendaraan', 'value'=>'$data->iDKENDARAAN->NOPOL'
				),
			array(
				'name'=>'Tanggal Perbaikan', 'value'=>function($data,$row)
				{
					if($data->TGL_PERBAIKAN!="0000-00-00")
					{
						return date("d-M-y", strtotime($data->TGL_PERBAIKAN));
					}
					else return '-';
				}
				),
			array(
				'name'=>'Kerusakan', 'value'=>'$data->KERUSAKAN'
				),
			array(
				'name'=>'Estimasi Waktu Perbaikan (hari)', 'value'=>'$data->ESTIMASI_WAKTU_PERBAIKAN'
				),
			array(
				'name'=>'Jenis Perbaikan', 'value'=>function($data, $row)
				{
					if($data->JENIS_PERBAIKAN=="0")
					{
						return "Perbaikan";
					}
					else if($data->JENIS_PERBAIKAN=="1")
					{
						return "Penggantian";
					}
					else if($data->JENIS_PERBAIKAN=="2")
					{
						return "Perbaikan & Penggantian";
					}
				}
				),
			array(
				'name'=>'Status', 'value'=>'$data->STATUS'
				),
			array(
				'name'=>'PJ Mekanik', 'value'=>function($data, $row)
				{
					if($data->pJMEKANIK==NULL)
						return "";
					else
						return $data->pJMEKANIK->NAMA;
				}
				),
			array(
				'name'=>'Aksi', 'type'=>'raw', 'value'=>function($data, $row)
				{
					if($data->STATUS=="Ke Mekanik")
					{
						return TbHtml::link("Ke Mekanik", array("mekanik", "id"=>$data->ID_PERBAIKAN),array('style'=>'font-weight:900;text-decoration:none;'));
					}
					else if($data->STATUS=="Ganti Sparepart")
					{
						return TbHtml::link("Ganti Sparepart", array("view", "id"=>$data->ID_PERBAIKAN),array('style' => 'font-weight:900;text-decoration:none;'));
					}
					else if($data->STATUS=="Ganti Ban")
					{
						return TbHtml::link("Ganti Ban", array("ban/index", "id"=>$data->ID_PERBAIKAN),array('style' => 'font-weight:900;text-decoration:none;'));
					}
					else if($data->STATUS=="Ke Mekanik dan Ganti Sparepart")
					{
						return TbHtml::link("Ke Mekanik dan Ganti Sparepart", array("view", "id"=>$data->ID_PERBAIKAN),array('style' => 'font-weight:900;text-decoration:none;'));
					}
					
					else if($data->STATUS=="SELESAI")
					{
						$id_rpb = Yii::app()->db->createCommand()->select('ID_RELASI_PB')
		                    ->from('relasi_pb')
		                    ->where('ID_PERBAIKAN=:ID_PERBAIKAN', array(':ID_PERBAIKAN'=>$data->ID_PERBAIKAN))
		                    ->queryScalar();
						return TbHtml::link("Lihat Detail", array("/relasiPb/admin", "id"=>$data->ID_PERBAIKAN),array('style' => 'font-weight:900;text-decoration:none;'));
					}
				}
				),
			),
		)); 
?>
