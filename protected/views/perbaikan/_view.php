<?php
/* @var $this PerbaikanController */
/* @var $data Perbaikan */
?>

<div class="view">

	<b><?php echo CHtml::encode($data->getAttributeLabel('ID_PERBAIKAN')); ?>:</b>
	<?php echo CHtml::link(CHtml::encode($data->ID_PERBAIKAN), array('view', 'id'=>$data->ID_PERBAIKAN)); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('ID_KENDARAAN')); ?>:</b>
	<?php echo CHtml::encode($data->ID_KENDARAAN); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('TGL_PERBAIKAN')); ?>:</b>
	<?php echo CHtml::encode($data->TGL_PERBAIKAN); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('KERUSAKAN')); ?>:</b>
	<?php echo CHtml::encode($data->KERUSAKAN); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('ESTIMASI_WAKTU_PERBAIKAN')); ?>:</b>
	<?php echo CHtml::encode($data->ESTIMASI_WAKTU_PERBAIKAN); ?>
	<br />


</div>