<?php
/* @var $this RelasiPengadaanSparepartController */
/* @var $model RelasiPengadaanSparepart */
/* @var $form CActiveForm */
?>

<div class="wide form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'action'=>Yii::app()->createUrl($this->route),
	'method'=>'get',
)); ?>

	<div class="row">
		<?php echo $form->label($model,'ID_RELASI'); ?>
		<?php echo $form->textField($model,'ID_RELASI'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'ID_PENGADAAN'); ?>
		<?php echo $form->textField($model,'ID_PENGADAAN'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'ID_SPAREPART'); ?>
		<?php echo $form->textField($model,'ID_SPAREPART'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'ID_SATUAN'); ?>
		<?php echo $form->textField($model,'ID_SATUAN'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'JUMLAH'); ?>
		<?php echo $form->textField($model,'JUMLAH'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'HARGA_SEMENTARA'); ?>
		<?php echo $form->textField($model,'HARGA_SEMENTARA'); ?>
	</div>

	<div class="row buttons">
		<?php echo CHtml::submitButton('Search'); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- search-form -->