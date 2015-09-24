<?php
/* @var $this OngkosController */
/* @var $model Ongkos */
/* @var $form CActiveForm */
?>

<div class="form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'id'=>'ongkos-form',
	// Please note: When you enable ajax validation, make sure the corresponding
	// controller action is handling ajax validation correctly.
	// There is a call to performAjaxValidation() commented in generated controller code.
	// See class documentation of CActiveForm for details on this.
	'enableAjaxValidation'=>false,
)); ?>

	<p class="note">Kolom dengan tanda <span class="required">*</span> harus diisi.</p>

	<?php echo $form->errorSummary($model); ?>

	<div class="row">
		<?php echo $form->labelEx($model,'ID_SATUAN'); ?>
		<?php echo $form->textField($model,'ID_SATUAN'); ?>
		<?php echo $form->error($model,'ID_SATUAN'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'TUJUAN'); ?>
		<?php echo $form->textField($model,'TUJUAN',array('size'=>25,'maxlength'=>25)); ?>
		<?php echo $form->error($model,'TUJUAN'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'HARGA'); ?>
		<?php echo $form->textField($model,'HARGA'); ?>
		<?php echo $form->error($model,'HARGA'); ?>
	</div>

	<div class="row buttons">
		<?php echo CHtml::submitButton($model->isNewRecord ? 'Create' : 'Save'); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- form -->