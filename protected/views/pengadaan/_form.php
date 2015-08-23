<?php
/* @var $this PengadaanController */
/* @var $model Pengadaan */
/* @var $form CActiveForm */
?>

<div class="form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'id'=>'pengadaan-form',
	// Please note: When you enable ajax validation, make sure the corresponding
	// controller action is handling ajax validation correctly.
	// There is a call to performAjaxValidation() commented in generated controller code.
	// See class documentation of CActiveForm for details on this.
	'enableAjaxValidation'=>false,
)); ?>

	<p class="note">Fields with <span class="required">*</span> are required.</p>

	<?php echo $form->errorSummary($model); ?>

	<div class="row">
		<?php echo $form->labelEx($model,'NO_PO'); ?>
		<?php echo $form->textField($model,'NO_PO',array('size'=>25,'maxlength'=>25)); ?>
		<?php echo $form->error($model,'NO_PO'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'TGL_PENGADAAN'); ?>
		<?php echo $form->textField($model,'TGL_PENGADAAN'); ?>
		<?php echo $form->error($model,'TGL_PENGADAAN'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'PERMINTAAN'); ?>
		<?php echo $form->textField($model,'PERMINTAAN',array('size'=>25,'maxlength'=>25)); ?>
		<?php echo $form->error($model,'PERMINTAAN'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'HARGA_TOTAL'); ?>
		<?php echo $form->textField($model,'HARGA_TOTAL'); ?>
		<?php echo $form->error($model,'HARGA_TOTAL'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'NAMA_TOKO'); ?>
		<?php echo $form->textField($model,'NAMA_TOKO',array('size'=>25,'maxlength'=>25)); ?>
		<?php echo $form->error($model,'NAMA_TOKO'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'NO_TLP'); ?>
		<?php echo $form->textField($model,'NO_TLP',array('size'=>15,'maxlength'=>15)); ?>
		<?php echo $form->error($model,'NO_TLP'); ?>
	</div>

	<div class="row buttons">
		<?php echo CHtml::submitButton($model->isNewRecord ? 'Create' : 'Save'); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- form -->