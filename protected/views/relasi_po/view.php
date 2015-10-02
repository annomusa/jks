<?php
/* @var $this Relasi_poController */
/* @var $model RelasiPo */

$this->breadcrumbs=array(
	'Relasi Pos'=>array('index'),
	$model->ID_RELASI_PO,
);

$model2 = Perjalanan::model()->findByPk($id);

?>

<h1>Daftar Tujuan PO Perjalanan # <?php echo $id." - ".$model2->iDKENDARAAN->NOPOL ?></h1>

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
				'name'=>'Tujuan', 'value'=>'$data->iDONGKOS->TUJUAN',
				'footer'=>"Total Ritase: "
				),
			array(
				'name'=>'Ongkos',  'value'=>'$data->iDONGKOS->HARGA',
				'footer'=>RelasiPo::model()->hitungtotalongkos($model->search2($id)->getData())
				),
			array(
				'header'=>'Aksi', 'type'=>'raw', 'value'=>'CHtml::link(\'batal\', array(\'relasi_po/batal\', \'id\'=>$data->ID_RELASI_PO,\'perj\'=>$_GET[\'id\']))'
			),
			),
		)); 
?>
