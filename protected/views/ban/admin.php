<?php
/* @var $this BanController */
/* @var $model Ban */

$this->breadcrumbs=array(
	'Data Ban',
);

$this->menu=array(
	array('label'=>'Buat Data Ban', 'url'=>array('create')),
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
		'class'=>'CButtonColumn',
		'template'=>'{update}{delete}',
	),
		),
	));

?>