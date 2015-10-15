<?php
/* @var $this RelasiPbController */
/* @var $data RelasiPb */
?>

<div class="view">

	<b><?php echo CHtml::encode($data->getAttributeLabel('ID_RELASI_PB')); ?>:</b>
	<?php echo CHtml::link(CHtml::encode($data->ID_RELASI_PB), array('view', 'id'=>$data->ID_RELASI_PB)); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('ID_PERBAIKAN')); ?>:</b>
	<?php echo CHtml::encode($data->ID_PERBAIKAN); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('ID_BAN')); ?>:</b>
	<?php echo CHtml::encode($data->ID_BAN); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('JUMLAH')); ?>:</b>
	<?php echo CHtml::encode($data->JUMLAH); ?>
	<br />


</div>