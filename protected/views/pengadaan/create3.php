<h1>Detail Pengadaan #<?php echo $model->ID_PENGADAAN; ?></h1>
<?php 
$this->widget('bootstrap.widgets.TbGridView', array(
		'id'=>'pengadaan-grid',
		'type' => TbHtml::GRID_TYPE_HOVER,
		'dataProvider'=>$model->search(),
		'template' => "{items}\n{pager}",
		'columns'=>array(
			array(
			'header'=>'No',   'value'=>'$this->grid->dataProvider->pagination->currentPage*$this->grid->dataProvider->pagination->pageSize + $row+1',
			),
			array(
				'name'=>'No Po', 'value'=>'$data->NO_PO'
				),
			array(
				'name'=>'Tgl Pengadaan', 'value'=>'$data->TGL_PENGADAAN'
				),
			array(
				'name'=>'Permintaan', 'value'=>'$data->PERMINTAAN'
				),
			array(
				'name'=>'Nama Toko', 'value'=>'$data->NAMA_TOKO'
				),
			array(
				'name'=>'No Telp', 'value'=>'$data->NO_TLP'
				),
			array(
				'name'=>'Harga Total', 'value'=>'$data->HARGA_TOTAL'
				),
			),
		));
 ?>

 <?php
	$this->renderPartial('/relasiPengadaanSparepart/view', array('model'=>RelasiPengadaanSparepart::model(), "id"=>$model->ID_PENGADAAN));
?>
<?php
echo "Setuju?";
	echo TbHtml::submitButton('SETUJU', array('submit'=> array("setuju","id"=>$model->ID_PENGADAAN),'color' => TbHtml::BUTTON_COLOR_PRIMARY));
?>