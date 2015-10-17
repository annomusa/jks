<?php
/* @var $this PosisiBanController */
/* @var $data PosisiBan */
?>

<div class="view">

	<b><?php echo CHtml::encode($data->getAttributeLabel('ID_POSISI')); ?>:</b>
	<?php echo CHtml::link(CHtml::encode($data->ID_POSISI), array('view', 'id'=>$data->ID_POSISI)); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('POSISI')); ?>:</b>
	<?php echo CHtml::encode($data->POSISI); ?>
	<br />


</div>