<?php
/* @var $this PerbaikanController */
/* @var $model Perbaikan */

$this->breadcrumbs=array(
	'Perbaikans'=>array('index'),
	'Manage',
);

$this->menu=array(
	array('label'=>'List Perbaikan', 'url'=>array('index')),
	array('label'=>'Create Perbaikan', 'url'=>array('create')),
);

Yii::app()->clientScript->registerScript('search', "
$('.search-button').click(function(){
	$('.search-form').toggle();
	return false;
});
$('.search-form form').submit(function(){
	$('#perbaikan-grid').yiiGridView('update', {
		data: $(this).serialize()
	});
	return false;
});
");
?>

<h1>Manage Perbaikans</h1>

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
				'name'=>'Tanggal Perbaikan', 'value'=>'$data->TGL_PERBAIKAN'
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
				'name'=>'Aksi', 'type'=>'raw', 'value'=>function($data, $row)
				{
					if($data->STATUS=="Ke Mekanik")
					{
						return TbHtml::link("Ke Mekanik", array("view", "id"=>$data->ID_PERBAIKAN),array('style'=>'font-weight:900;text-decoration:none;'));
					}
					else if($data->STATUS=="Ganti Sparepart")
					{
						return TbHtml::link("Ganti Sparepart", array("view", "id"=>$data->ID_PERBAIKAN),array('style' => 'font-weight:900;text-decoration:none;'));
					}
					else if($data->STATUS=="Ke Mekanik dan Ganti Sparepart")
					{
						return TbHtml::link("Ke Mekanik dan Ganti Sparepart", array("view", "id"=>$data->ID_PERBAIKAN),array('style' => 'font-weight:900;text-decoration:none;'));
					}
				}
				),
			),
		)); 
?>
