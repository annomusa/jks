<?php
/* @var $this PenerbitController */
/* @var $model Penerbit */
/* @var $form CActiveForm */
?>

<div class="form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'id'=>'penerbit-form',
	// Please note: When you enable ajax validation, make sure the corresponding
	// controller action is handling ajax validation correctly.
	// There is a call to performAjaxValidation() commented in generated controller code.
	// See class documentation of CActiveForm for details on this.
	'enableAjaxValidation'=>false,
)); ?>

	<p class="note">Fields with <span class="required">*</span> are required.</p>

	<?php echo $form->errorSummary($model); ?>

	<div class="row">
		<?php echo $form->labelEx($model,'NAMA_PENERBIT'); ?>
		<?php echo $form->textField($model,'NAMA_PENERBIT',array('size'=>25,'maxlength'=>25)); ?>
		<?php echo $form->error($model,'NAMA_PENERBIT'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'NO_TLP'); ?>
		<?php echo $form->textField($model,'NO_TLP',array('size'=>15,'maxlength'=>15)); ?>
		<?php echo $form->error($model,'NO_TLP'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'ALAMAT'); ?>
		<?php echo $form->textField($model,'ALAMAT',array('size'=>50,'maxlength'=>50)); ?>
		<?php echo $form->error($model,'ALAMAT'); ?>
	</div>

	<div class="row buttons">
		<?php echo CHtml::submitButton($model->isNewRecord ? 'Create' : 'Save'); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- form -->