<?php
/* @var $this KendaraanController */
/* @var $data Kendaraan */
?>

<div class="view">

	<b><?php echo CHtml::encode($data->getAttributeLabel('ID_KENDARAAN')); ?>:</b>
	<?php echo CHtml::link(CHtml::encode($data->ID_KENDARAAN), array('view', 'id'=>$data->ID_KENDARAAN)); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('ID_KARYAWAN')); ?>:</b>
	<?php echo CHtml::encode($data->ID_KARYAWAN); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('NOPOL')); ?>:</b>
	<?php echo CHtml::encode($data->NOPOL); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('STATUS_SOPIR')); ?>:</b>
	<?php echo CHtml::encode($data->STATUS_SOPIR); ?>
	<br />


</div>