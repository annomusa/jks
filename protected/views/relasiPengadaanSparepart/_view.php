<?php
/* @var $this RelasiPengadaanSparepartController */
/* @var $data RelasiPengadaanSparepart */
?>

<div class="view">

	<b><?php echo CHtml::encode($data->getAttributeLabel('ID_RELASI')); ?>:</b>
	<?php echo CHtml::link(CHtml::encode($data->ID_RELASI), array('view', 'id'=>$data->ID_RELASI)); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('ID_PENGADAAN')); ?>:</b>
	<?php echo CHtml::encode($data->ID_PENGADAAN); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('ID_SPAREPART')); ?>:</b>
	<?php echo CHtml::encode($data->ID_SPAREPART); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('ID_SATUAN')); ?>:</b>
	<?php echo CHtml::encode($data->ID_SATUAN); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('JUMLAH')); ?>:</b>
	<?php echo CHtml::encode($data->JUMLAH); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('HARGA_SEMENTARA')); ?>:</b>
	<?php echo CHtml::encode($data->HARGA_SEMENTARA); ?>
	<br />


</div>