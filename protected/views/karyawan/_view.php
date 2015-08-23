<?php
/* @var $this KaryawanController */
/* @var $data Karyawan */
?>

<div class="view">

	<b><?php echo CHtml::encode($data->getAttributeLabel('ID_KARYAWAN')); ?>:</b>
	<?php echo CHtml::link(CHtml::encode($data->ID_KARYAWAN), array('view', 'id'=>$data->ID_KARYAWAN)); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('NAMA')); ?>:</b>
	<?php echo CHtml::encode($data->NAMA); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('NO_HP')); ?>:</b>
	<?php echo CHtml::encode($data->NO_HP); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('ALAMAT')); ?>:</b>
	<?php echo CHtml::encode($data->ALAMAT); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('TGL_MASUK_KERJA')); ?>:</b>
	<?php echo CHtml::encode($data->TGL_MASUK_KERJA); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('PENEMPATAN')); ?>:</b>
	<?php echo CHtml::encode($data->PENEMPATAN); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('STATUS')); ?>:</b>
	<?php echo CHtml::encode($data->STATUS); ?>
	<br />


</div>