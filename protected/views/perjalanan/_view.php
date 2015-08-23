<?php
/* @var $this PerjalananController */
/* @var $data Perjalanan */
?>

<div class="view">

	<b><?php echo CHtml::encode($data->getAttributeLabel('ID_PERJALANAN')); ?>:</b>
	<?php echo CHtml::link(CHtml::encode($data->ID_PERJALANAN), array('view', 'id'=>$data->ID_PERJALANAN)); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('ID_PENERBIT')); ?>:</b>
	<?php echo CHtml::encode($data->ID_PENERBIT); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('ID_ONGKOS')); ?>:</b>
	<?php echo CHtml::encode($data->ID_ONGKOS); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('ID_KENDARAAN')); ?>:</b>
	<?php echo CHtml::encode($data->ID_KENDARAAN); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('TGL_PERJALANAN')); ?>:</b>
	<?php echo CHtml::encode($data->TGL_PERJALANAN); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('NO_SURAT_PO')); ?>:</b>
	<?php echo CHtml::encode($data->NO_SURAT_PO); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('JENIS_PERINTAH')); ?>:</b>
	<?php echo CHtml::encode($data->JENIS_PERINTAH); ?>
	<br />

	<?php /*
	<b><?php echo CHtml::encode($data->getAttributeLabel('RITASE')); ?>:</b>
	<?php echo CHtml::encode($data->RITASE); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('TITIPAN_AWAL')); ?>:</b>
	<?php echo CHtml::encode($data->TITIPAN_AWAL); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('LEBIH')); ?>:</b>
	<?php echo CHtml::encode($data->LEBIH); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('KURANG')); ?>:</b>
	<?php echo CHtml::encode($data->KURANG); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('AKHIR')); ?>:</b>
	<?php echo CHtml::encode($data->AKHIR); ?>
	<br />

	*/ ?>

</div>