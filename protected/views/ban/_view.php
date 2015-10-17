<?php
/* @var $this BanController */
/* @var $data Ban */
?>

<div class="view">

	<b><?php echo CHtml::encode($data->getAttributeLabel('ID_BAN')); ?>:</b>
	<?php echo CHtml::link(CHtml::encode($data->ID_BAN), array('view', 'id'=>$data->ID_BAN)); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('ID_POSISI')); ?>:</b>
	<?php echo CHtml::encode($data->ID_POSISI); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('NOMOR_SERI')); ?>:</b>
	<?php echo CHtml::encode($data->NOMOR_SERI); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('MERK')); ?>:</b>
	<?php echo CHtml::encode($data->MERK); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('HARGA')); ?>:</b>
	<?php echo CHtml::encode($data->HARGA); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('JUMLAH')); ?>:</b>
	<?php echo CHtml::encode($data->JUMLAH); ?>
	<br />


</div>