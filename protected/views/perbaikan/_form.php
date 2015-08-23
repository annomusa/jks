<?php
/* @var $this PerbaikanController */
/* @var $model Perbaikan */
/* @var $form CActiveForm */
?>

<div class="form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'id'=>'perbaikan-form',
	// Please note: When you enable ajax validation, make sure the corresponding
	// controller action is handling ajax validation correctly.
	// There is a call to performAjaxValidation() commented in generated controller code.
	// See class documentation of CActiveForm for details on this.
	'enableAjaxValidation'=>false,
)); ?>

	<p class="note">Fields with <span class="required">*</span> are required.</p>

	<?php echo $form->errorSummary($model); ?>

	<div class="row">
		<?php echo $form->labelEx($model,'ID_KENDARAAN'); ?>
		<?php echo $form->textField($model,'ID_KENDARAAN'); ?>
		<?php echo $form->error($model,'ID_KENDARAAN'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'TGL_PERBAIKAN'); ?>
		<?php echo $form->textField($model,'TGL_PERBAIKAN'); ?>
		<?php echo $form->error($model,'TGL_PERBAIKAN'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'KERUSAKAN'); ?>
		<?php echo $form->textField($model,'KERUSAKAN',array('size'=>50,'maxlength'=>50)); ?>
		<?php echo $form->error($model,'KERUSAKAN'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'ESTIMASI_WAKTU_PERBAIKAN'); ?>
		<?php echo $form->textField($model,'ESTIMASI_WAKTU_PERBAIKAN'); ?>
		<?php echo $form->error($model,'ESTIMASI_WAKTU_PERBAIKAN'); ?>
	</div>

	<div class="row buttons">
		<?php echo CHtml::submitButton($model->isNewRecord ? 'Create' : 'Save'); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- form -->