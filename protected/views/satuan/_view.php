<?php
/* @var $this SatuanController */
/* @var $data Satuan */
?>

<div class="view">

	<b><?php echo CHtml::encode($data->getAttributeLabel('ID_SATUAN')); ?>:</b>
	<?php echo CHtml::link(CHtml::encode($data->ID_SATUAN), array('view', 'id'=>$data->ID_SATUAN)); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('SATUAN')); ?>:</b>
	<?php echo CHtml::encode($data->SATUAN); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('JENIS_SATUAN')); ?>:</b>
	<?php echo CHtml::encode($data->JENIS_SATUAN); ?>
	<br />


</div>