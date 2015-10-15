<p></p>
<h1>Riwayat Penggantian Ban</h1>

<?php
	
	$id = $_GET['id'];
	$this->widget('zii.widgets.grid.CGridView', array(
	'id'=>'relasi-pb-grid',
	'dataProvider'=>$model->carirekap($id),
	'filter'=>$model,
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
		'header'=>'Jumlah',
		'value'=>'$data->JUMLAH',
		),
		),
	));
?>

<p></p>
<div align="right">
<?php
	echo TbHtml::formActions(array(
	TbHtml::linkButton('KEMBALI', array('submit'=>array('perbaikan/admin'),'style' => 'text-decoration:none;','color' => TbHtml::BUTTON_COLOR_PRIMARY)),
	));
?>
</div>
