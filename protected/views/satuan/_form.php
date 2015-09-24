<?php
/* @var $this SatuanController */
/* @var $model Satuan */
/* @var $form CActiveForm */
?>

<div class="form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'id'=>'satuan-form',
	// Please note: When you enable ajax validation, make sure the corresponding
	// controller action is handling ajax validation correctly.
	// There is a call to performAjaxValidation() commented in generated controller code.
	// See class documentation of CActiveForm for details on this.
	'enableAjaxValidation'=>false,
)); ?>

	<p class="note">Kolom dengan tanda <span class="required">*</span> harus diisi.</p>

	<?php echo $form->errorSummary($model); ?>

	<div class="row">
		<?php echo $form->labelEx($model,'SATUAN'); ?>
		<?php echo $form->textField($model,'SATUAN',array('size'=>20,'maxlength'=>20)); ?>
		<?php echo $form->error($model,'SATUAN'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'JENIS_SATUAN'); ?>
		<?php echo $form->textField($model,'JENIS_SATUAN',array('size'=>25,'maxlength'=>25)); ?>
		<?php echo $form->error($model,'JENIS_SATUAN'); ?>
	</div>

	<div class="row buttons">
		<?php echo CHtml::submitButton($model->isNewRecord ? 'Create' : 'Save'); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- form -->