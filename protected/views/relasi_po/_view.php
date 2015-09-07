<?php
/* @var $this Relasi_poController */
/* @var $data RelasiPo */
?>

<div class="view">

	<b><?php echo CHtml::encode($data->getAttributeLabel('ID_RELASI_PO')); ?>:</b>
	<?php echo CHtml::link(CHtml::encode($data->ID_RELASI_PO), array('view', 'id'=>$data->ID_RELASI_PO)); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('ID_PERJALANAN')); ?>:</b>
	<?php echo CHtml::encode($data->ID_PERJALANAN); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('ID_ONGKOS')); ?>:</b>
	<?php echo CHtml::encode($data->ID_ONGKOS); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('KETERANGAN')); ?>:</b>
	<?php echo CHtml::encode($data->KETERANGAN); ?>
	<br />


</div>