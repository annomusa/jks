<?php
/* @var $this Relasi_poController */
/* @var $model RelasiPo */

$this->breadcrumbs=array(
	'Relasi Pos'=>array('index'),
	$model->ID_RELASI_PO,
);


?>

<h1>Daftar Tujuan PO Perjalanan # <?php echo $id ?></h1>

<?php 
$this->widget('bootstrap.widgets.TbGridView', array(
		'id'=>'relasi_po-grid',
		'type' => TbHtml::GRID_TYPE_HOVER,
		'dataProvider'=>$model->search2($id),
		'template' => "{items}\n{pager}",
		'columns'=>array(
			array(
			'header'=>'No',   'value'=>'$this->grid->dataProvider->pagination->currentPage*$this->grid->dataProvider->pagination->pageSize + $row+1',
			),
			array(
				'name'=>'ID Perjalanan', 'value'=>'$data->ID_PERJALANAN'
				),
			array(
				'name'=>'ID Ongkos', 'value'=>'$data->ID_ONGKOS'
				),
			array(
				'name'=>'Tujuan', 'value'=>'$data->iDONGKOS->TUJUAN'
				),
			array(
				'name'=>'Ongkos', 'value'=>'$data->iDONGKOS->HARGA'
				),
			),
		)); 
?>
