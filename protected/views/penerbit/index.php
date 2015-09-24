<?php
/* @var $this PenerbitController */
/* @var $dataProvider CActiveDataProvider */

$this->breadcrumbs=array(
	'Penerbit',
);

$this->menu=array(
	array('label'=>'Buat Data Penerbit Baru', 'url'=>array('create')),
	//array('label'=>'Manage Penerbit', 'url'=>array('admin')),
);
?>

<h1>Data Penerbit</h1>

<?php  

$this->widget('bootstrap.widgets.TbGridView', array(
	'id'=>'penerbit-grid',
	'type' => TbHtml::GRID_TYPE_HOVER,
	'dataProvider'=>$model->search(),
	'filter'=>$model,
	'columns'=>array(

		array(
			'header'=>'No','value'=>'$this->grid->dataProvider->pagination->currentPage*$this->grid->dataProvider->pagination->pageSize + $row+1',
			),
		array(
			'name'=>'NAMA_PENERBIT',
			'header'=>'Nama Penerbit',
			),
		array(
			'header'=>'No Tlp',
			'value'=>'$data->NO_TLP',
			),
		array(
			'header'=>'Alamat',
			'value'=>'$data->ALAMAT'
			),
		array(
			'class'=>'CButtonColumn'
			),
	),
));

?>
