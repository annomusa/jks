<?php
/* @var $this PerjalananController */
/* @var $model Perjalanan */

?>

<h1>View PO Perjalanan #<?php echo $model->iDKENDARAAN->NOPOL; ?></h1>

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
				'name'=>'Titipan Awal', 'value'=>'$data->TITIPAN_AWAL'
				),
			array(
				'name'=>'Ritase', 'value'=>'$data->RITASE', 'htmlOptions'=>array('style'=>'color:red;')
				),
			array(
				'name'=>'Tambahan', 'value'=>'$data->TAMBAHAN' , 'htmlOptions'=>array('style'=>'color:red;')
				),
			array(
				'name'=>'Sisa', 'value'=>'$data->SISA', 'htmlOptions'=>array('style'=>'color:red;')
				),
			array(
				'name'=>'Uang Diberikan', 'value'=>'$data->UANG_DIBERIKAN'
				),
			array(
				'name'=>'Uang Dibawa', 'value'=>'$data->UANG_DIBAWA'
				),
			array(
				'name'=>'Status', 'value'=>'$data->STATUS'
				),
			),
		));
 ?>
 <?php
	$this->renderPartial('/relasi_po/view3', array('model'=>RelasiPo::model(), "id"=>$model->ID_PERJALANAN));
	echo TbHtml::submitButton('Kembali', array('submit'=> array("admin"),'color' => TbHtml::BUTTON_COLOR_PRIMARY));
?>
