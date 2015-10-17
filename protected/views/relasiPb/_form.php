<?php
/* @var $this RelasiPbController */
/* @var $model RelasiPb */
/* @var $form CActiveForm */
?>

<div class="form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'id'=>'relasi-pb-form',
	// Please note: When you enable ajax validation, make sure the corresponding
	// controller action is handling ajax validation correctly.
	// There is a call to performAjaxValidation() commented in generated controller code.
	// See class documentation of CActiveForm for details on this.
	'enableAjaxValidation'=>false,
)); ?>

	<p class="note">Fields with <span class="required">*</span> are required.</p>

	<?php echo $form->errorSummary($model); ?>

	<div class="row">
		<?php echo $form->labelEx($model,'ID_PERBAIKAN'); ?>
		<?php echo $form->textField($model,'ID_PERBAIKAN'); ?>
		<?php echo $form->error($model,'ID_PERBAIKAN'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'ID_BAN'); ?>
		<?php echo $form->textField($model,'ID_BAN'); ?>
		<?php echo $form->error($model,'ID_BAN'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'JUMLAH'); ?>
		<?php echo $form->textField($model,'JUMLAH'); ?>
		<?php echo $form->error($model,'JUMLAH'); ?>
	</div>

	<div class="row buttons">
		<?php echo CHtml::submitButton($model->isNewRecord ? 'Create' : 'Save'); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- form -->