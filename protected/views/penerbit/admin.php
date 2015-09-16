<?php
/* @var $this PenerbitController */
/* @var $model Penerbit */

$this->breadcrumbs=array(
	'Penerbits'=>array('index'),
	'Manage',
);

$this->menu=array(
	array('label'=>'List Penerbit', 'url'=>array('index')),
	array('label'=>'Create Penerbit', 'url'=>array('create')),
);

Yii::app()->clientScript->registerScript('search', "
$('.search-button').click(function(){
	$('.search-form').toggle();
	return false;
});
$('.search-form form').submit(function(){
	$('#penerbit-grid').yiiGridView('update', {
		data: $(this).serialize()
	});
	return false;
});
");
?>

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
	),
	/*
	'columns'=> function($data)
	{
		if(empty($data))
		{
			return TbHtml::linkButton("Buat Material Kantor Baru", array("submit"=>array("materialKantor/create", "id"=>$_GET["id"]),"color" => TbHtml::BUTTON_COLOR_INFO));
		}
	}
	*/
	'emptyText'=> TbHtml::linkButton("Buat Penerbit Baru", array("submit"=>array("penerbit/create"),"color" => TbHtml::BUTTON_COLOR_INFO)),
	//'emptyText'=> 'TbHtml::linkButton(\'Buat Material Kantor Baru\', array(\'submit\'=>array(\'materialKantor/create\', \'id\'=>$_GET[\'id\']),\'color\' => TbHtml::BUTTON_COLOR_INFO))'
));

?>
