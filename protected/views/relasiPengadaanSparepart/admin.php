<?php
/* @var $this RelasiPengadaanSparepartController */
/* @var $model RelasiPengadaanSparepart */

$this->breadcrumbs=array(
	'Relasi Pengadaan Spareparts'=>array('index'),
	'Manage',
);

$this->menu=array(
	array('label'=>'List RelasiPengadaanSparepart', 'url'=>array('index')),
	array('label'=>'Create RelasiPengadaanSparepart', 'url'=>array('create')),
);

Yii::app()->clientScript->registerScript('search', "
$('.search-button').click(function(){
	$('.search-form').toggle();
	return false;
});
$('.search-form form').submit(function(){
	$('#relasi-pengadaan-sparepart-grid').yiiGridView('update', {
		data: $(this).serialize()
	});
	return false;
});
");
?>

<h1>Manage Relasi Pengadaan Spareparts</h1>

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

<?php $this->widget('zii.widgets.grid.CGridView', array(
	'id'=>'relasi-pengadaan-sparepart-grid',
	'dataProvider'=>$model->search(),
	'filter'=>$model,
	'columns'=>array(
		'ID_RELASI',
		'ID_PENGADAAN',
		'ID_SPAREPART',
		'ID_SATUAN',
		'JUMLAH',
		'HARGA_SEMENTARA',
		array(
			'class'=>'CButtonColumn',
		),
	),
)); ?>
