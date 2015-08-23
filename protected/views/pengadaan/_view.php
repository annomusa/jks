<?php
/* @var $this PengadaanController */
/* @var $data Pengadaan */
?>

<div class="view">

	<b><?php echo CHtml::encode($data->getAttributeLabel('ID_PENGADAAN')); ?>:</b>
	<?php echo CHtml::link(CHtml::encode($data->ID_PENGADAAN), array('view', 'id'=>$data->ID_PENGADAAN)); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('NO_PO')); ?>:</b>
	<?php echo CHtml::encode($data->NO_PO); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('TGL_PENGADAAN')); ?>:</b>
	<?php echo CHtml::encode($data->TGL_PENGADAAN); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('PERMINTAAN')); ?>:</b>
	<?php echo CHtml::encode($data->PERMINTAAN); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('HARGA_TOTAL')); ?>:</b>
	<?php echo CHtml::encode($data->HARGA_TOTAL); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('NAMA_TOKO')); ?>:</b>
	<?php echo CHtml::encode($data->NAMA_TOKO); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('NO_TLP')); ?>:</b>
	<?php echo CHtml::encode($data->NO_TLP); ?>
	<br />


</div>