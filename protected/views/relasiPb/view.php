

<h1>Riwayat Penggantian Ban</h1>

<?php 

	$this->widget('bootstrap.widgets.TbGridView', array(
	'id'=>'relasi-pb-grid',
	'type' => TbHtml::GRID_TYPE_HOVER,
	'dataProvider'=>$model->search(),
	'columns'=>array(
	array(
		'header'=>'Tanggal Perbaikan',
		'value'=>'$data->iDPERBAIKAN->TGL_PERBAIKAN',
		),
	array(
		'header'=>'Nomor Seri Ban',
		'value'=>'$data->iDBAN->NOMOR_SERI',
		),
	array(
		'name'=>'JUMLAH',
		),
	array(
		'header'=>'Aksi',
		'type'=>'raw',
		'value'=>'TbHtml::link("Hapus", array("Hapusrelasi", "id"=>$data->ID_PERBAIKAN),array("style" => "font-weight:900;text-decoration:none;"))',
		),
		),
	));

?>
