<?php
/* @var $this RelasiPengadaanSparepartController */
/* @var $model RelasiPengadaanSparepart */
/* @var $form CActiveForm */
?>

<div class="form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'id'=>'relasi-pengadaan-sparepart-form',
	// Please note: When you enable ajax validation, make sure the corresponding
	// controller action is handling ajax validation correctly.
	// There is a call to performAjaxValidation() commented in generated controller code.
	// See class documentation of CActiveForm for details on this.
	'enableAjaxValidation'=>false,
)); ?>

	<p class="note">Fields with <span class="required">*</span> are required.</p>

	<?php echo $form->errorSummary($model); ?>

	<div class="row">
		<?php echo $form->labelEx($model,'ID_PENGADAAN'); ?>
		<?php echo $form->textField($model,'ID_PENGADAAN'); ?>
		<?php echo $form->error($model,'ID_PENGADAAN'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'ID_SPAREPART'); ?>
		<?php echo $form->textField($model,'ID_SPAREPART'); ?>
		<?php echo $form->error($model,'ID_SPAREPART'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'ID_SATUAN'); ?>
		<?php echo $form->textField($model,'ID_SATUAN'); ?>
		<?php echo $form->error($model,'ID_SATUAN'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'JUMLAH'); ?>
		<?php echo $form->textField($model,'JUMLAH'); ?>
		<?php echo $form->error($model,'JUMLAH'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'HARGA_SEMENTARA'); ?>
		<?php echo $form->textField($model,'HARGA_SEMENTARA'); ?>
		<?php echo $form->error($model,'HARGA_SEMENTARA'); ?>
	</div>

	<div class="row buttons">
		<?php echo CHtml::submitButton($model->isNewRecord ? 'Create' : 'Save'); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- form -->