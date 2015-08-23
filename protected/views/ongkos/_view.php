<?php
/* @var $this OngkosController */
/* @var $data Ongkos */
?>

<div class="view">

	<b><?php echo CHtml::encode($data->getAttributeLabel('ID_ONGKOS')); ?>:</b>
	<?php echo CHtml::link(CHtml::encode($data->ID_ONGKOS), array('view', 'id'=>$data->ID_ONGKOS)); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('ID_SATUAN')); ?>:</b>
	<?php echo CHtml::encode($data->ID_SATUAN); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('TUJUAN')); ?>:</b>
	<?php echo CHtml::encode($data->TUJUAN); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('HARGA')); ?>:</b>
	<?php echo CHtml::encode($data->HARGA); ?>
	<br />


</div>