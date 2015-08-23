<?php
/* @var $this AdminController */
/* @var $data Admin */
?>

<div class="view">

	<b><?php echo CHtml::encode($data->getAttributeLabel('ID_ADMIN')); ?>:</b>
	<?php echo CHtml::link(CHtml::encode($data->ID_ADMIN), array('view', 'id'=>$data->ID_ADMIN)); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('NAMA')); ?>:</b>
	<?php echo CHtml::encode($data->NAMA); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('USERNAME')); ?>:</b>
	<?php echo CHtml::encode($data->USERNAME); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('PASSWORD')); ?>:</b>
	<?php echo CHtml::encode($data->PASSWORD); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('PRIVILEGE')); ?>:</b>
	<?php echo CHtml::encode($data->PRIVILEGE); ?>
	<br />


</div>