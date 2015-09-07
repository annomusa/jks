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

<?php $this->widget('zii.widgets.grid.CGridView', array(
	'id'=>'perjalanan-grid',
	'dataProvider'=>$model->search(),
	'filter'=>$model,
	'columns'=>array(
		'ID_PERJALANAN',
		'ID_PENERBIT',
		'ID_ONGKOS',
		'ID_KENDARAAN',
		'TGL_PERJALANAN',
		'NO_SURAT_PO',
		
		'JENIS_PERINTAH',
		'RITASE',
		'TITIPAN_AWAL',
		'LEBIH',
		'KURANG',
		'AKHIR',
		'STATUS',
		array(
			'class'=>'CButtonColumn',
		),
	),
)); ?>
