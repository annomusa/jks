<?php
/* @var $this PrivilegeController */
/* @var $data Privilege */
?>

<div class="view">

	<b><?php echo CHtml::encode($data->getAttributeLabel('ID_PRIVILEGE')); ?>:</b>
	<?php echo CHtml::link(CHtml::encode($data->ID_PRIVILEGE), array('view', 'id'=>$data->ID_PRIVILEGE)); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('NAMA_PRIVILEGE')); ?>:</b>
	<?php echo CHtml::encode($data->NAMA_PRIVILEGE); ?>
	<br />


</div>