<?php
/* @var $this KendaraanController */
/* @var $model Kendaraan */
/* @var $form CActiveForm */
?>

<div class="form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'id'=>'kendaraan-form',
	// Please note: When you enable ajax validation, make sure the corresponding
	// controller action is handling ajax validation correctly.
	// There is a call to performAjaxValidation() commented in generated controller code.
	// See class documentation of CActiveForm for details on this.
	'enableAjaxValidation'=>false,
)); ?>

	<p class="note">Fields with <span class="required">*</span> are required.</p>

	<?php echo $form->errorSummary($model); ?>

	<div class="row">
		<?php echo $form->labelEx($model,'ID_KARYAWAN'); ?>
		<?php echo $form->textField($model,'ID_KARYAWAN'); ?>
		<?php echo $form->error($model,'ID_KARYAWAN'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'NOPOL'); ?>
		<?php echo $form->textField($model,'NOPOL',array('size'=>10,'maxlength'=>10)); ?>
		<?php echo $form->error($model,'NOPOL'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'STATUS_SOPIR'); ?>
		<?php echo $form->textField($model,'STATUS_SOPIR',array('size'=>10,'maxlength'=>10)); ?>
		<?php echo $form->error($model,'STATUS_SOPIR'); ?>
	</div>

	<div class="row buttons">
		<?php echo CHtml::submitButton($model->isNewRecord ? 'Create' : 'Save'); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- form -->