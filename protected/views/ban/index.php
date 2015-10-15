<?php
/* @var $this BanController */
/* @var $model Ban */

$this->breadcrumbs=array(
	'Data Ban',
);

?>

<h1>Data Ban</h1>

<div class="search-form">
<?php $this->renderPartial('_search',array(
	'model'=>$model,
)); ?>
</div><!-- search-form -->

<p></p>

<?php 
	
	$this->widget('bootstrap.widgets.TbGridView', array(
	'id'=>'perbaikan-grid',
	'type' => TbHtml::GRID_TYPE_HOVER,
	'dataProvider'=>$model->search(),
	'columns'=>array(
	array(
		'header'=>'Posisi Ban',
		'value'=>'$data->iDPOSISI->POSISI',
		),
	array(
		'name'=>'NOMOR_SERI',
		),
	array(
		'name'=>'MERK',
		),
	array(
		'name'=>'HARGA',
		),
	array(
		'name'=>'JUMLAH',
		),
	array(
		'header'=>'Aksi',
		'type'=>'raw',
		'value'=>'TbHtml::link("Ambil", array("Ambilban", "id"=>$_GET[\'id\'], "id_ban"=>$data->ID_BAN),array("style" => "font-weight:900;text-decoration:none;"))',
		),
		),
	));

?>

<p></p>

<?php
	$this->renderPartial('/relasiPb/view', array('model'=>RelasiPb::model(), 'id'=>'$_GET[\'id\']'));
?>

<p></p>
<div align="right">
<?php
	echo TbHtml::formActions(array(
	TbHtml::linkButton('SELESAI', array('submit'=>array('perbaikan/admin'),'style' => 'text-decoration:none;','color' => TbHtml::BUTTON_COLOR_PRIMARY)),
	));
?>
</div>