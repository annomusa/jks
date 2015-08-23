<?php
/* @var $this SparepartController */
/* @var $data Sparepart */
?>

<div class="view">

	<b><?php echo CHtml::encode($data->getAttributeLabel('ID_SPAREPART')); ?>:</b>
	<?php echo CHtml::link(CHtml::encode($data->ID_SPAREPART), array('view', 'id'=>$data->ID_SPAREPART)); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('NAMA_BARANG')); ?>:</b>
	<?php echo CHtml::encode($data->NAMA_BARANG); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('HARGA_SATUAN')); ?>:</b>
	<?php echo CHtml::encode($data->HARGA_SATUAN); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('STOK')); ?>:</b>
	<?php echo CHtml::encode($data->STOK); ?>
	<br />


</div>