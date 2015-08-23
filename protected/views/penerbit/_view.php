<?php
/* @var $this PenerbitController */
/* @var $data Penerbit */
?>

<div class="view">

	<b><?php echo CHtml::encode($data->getAttributeLabel('ID_PENERBIT')); ?>:</b>
	<?php echo CHtml::link(CHtml::encode($data->ID_PENERBIT), array('view', 'id'=>$data->ID_PENERBIT)); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('NAMA_PENERBIT')); ?>:</b>
	<?php echo CHtml::encode($data->NAMA_PENERBIT); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('NO_TLP')); ?>:</b>
	<?php echo CHtml::encode($data->NO_TLP); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('ALAMAT')); ?>:</b>
	<?php echo CHtml::encode($data->ALAMAT); ?>
	<br />


</div>