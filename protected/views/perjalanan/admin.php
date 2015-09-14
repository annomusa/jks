<?php
/* @var $this PerjalananController */
/* @var $model Perjalanan */

$this->breadcrumbs=array(
	'Perjalanans'=>array('index'),
	'Manage',
);

$this->menu=array(
	array('label'=>'List Perjalanan', 'url'=>array('index')),
	array('label'=>'Create Perjalanan', 'url'=>array('create')),
);

Yii::app()->clientScript->registerScript('search', "
$('.search-button').click(function(){
	$('.search-form').toggle();
	return false;
});
$('.search-form form').submit(function(){
	$('#perjalanan-grid').yiiGridView('update', {
		data: $(this).serialize()
	});
	return false;
});
");
?>

<h1>Manage Perjalanans</h1>

<p>
You may optionally enter a comparison operator (<b>&lt;</b>, <b>&lt;=</b>, <b>&gt;</b>, <b>&gt;=</b>, <b>&lt;&gt;</b>
or <b>=</b>) at the beginning of each of your search values to specify how the comparison should be done.
</p>

<?php echo CHtml::link('Advanced Search','#',array('class'=>'search-button')); ?>
<div class="search-form" style="display:none">
<?php $this->renderPartial('_search',array(
	'model'=>$model,
)); ?>
</div><!-- search-form -->

<?php 

$this->widget('bootstrap.widgets.TbGridView', array(
		'id'=>'perjalanan-grid',
		'type' => TbHtml::GRID_TYPE_HOVER,
		'dataProvider'=>$model->search(),
		'template' => "{items}\n{pager}",
		'columns'=>array(
			array(
			'header'=>'No',   'value'=>'$this->grid->dataProvider->pagination->currentPage*$this->grid->dataProvider->pagination->pageSize + $row+1',
			),
			array(
				'name'=>'ID Perjalanan', 'value'=>'$data->ID_PERJALANAN'
				),
			array(
				'name'=>'ID Penerbit', 'value'=>'$data->ID_PENERBIT'
				),
			array(
				'name'=>'ID Kendaraan', 'value'=>'$data->ID_KENDARAAN'
				),
			array(
				'name'=>'Tanggal Perjalanan', 'value'=>'$data->TGL_PERJALANAN'
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
