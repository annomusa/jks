<?php
/* @var $this PerjalananController */
/* @var $model Perjalanan */
/* @var $form CActiveForm */
?>

<div class="form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'id'=>'perjalanan-form',
	// Please note: When you enable ajax validation, make sure the corresponding
	// controller action is handling ajax validation correctly.
	// There is a call to performAjaxValidation() commented in generated controller code.
	// See class documentation of CActiveForm for details on this.
	'enableAjaxValidation'=>false,
)); ?>

	<p class="note">Fields with <span class="required">*</span> are required.</p>

	<?php echo $form->errorSummary($model); ?>

	<div class="row">
		<?php echo $form->labelEx($model,'ID_PENERBIT'); ?>
		<?php echo $form->textField($model,'ID_PENERBIT'); ?>
		<?php echo $form->error($model,'ID_PENERBIT'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'ID_ONGKOS'); ?>
		<?php echo $form->textField($model,'ID_ONGKOS'); ?>
		<?php echo $form->error($model,'ID_ONGKOS'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'ID_KENDARAAN'); ?>
		<?php echo $form->textField($model,'ID_KENDARAAN'); ?>
		<?php echo $form->error($model,'ID_KENDARAAN'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'TGL_PERJALANAN'); ?>
		<?php echo $form->textField($model,'TGL_PERJALANAN'); ?>
		<?php echo $form->error($model,'TGL_PERJALANAN'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'NO_SURAT_PO'); ?>
		<?php echo $form->textField($model,'NO_SURAT_PO',array('size'=>20,'maxlength'=>20)); ?>
		<?php echo $form->error($model,'NO_SURAT_PO'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'JENIS_PERINTAH'); ?>
		<?php echo $form->textField($model,'JENIS_PERINTAH',array('size'=>20,'maxlength'=>20)); ?>
		<?php echo $form->error($model,'JENIS_PERINTAH'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'RITASE'); ?>
		<?php echo $form->textField($model,'RITASE',array('size'=>25,'maxlength'=>25)); ?>
		<?php echo $form->error($model,'RITASE'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'TITIPAN_AWAL'); ?>
		<?php echo $form->textField($model,'TITIPAN_AWAL'); ?>
		<?php echo $form->error($model,'TITIPAN_AWAL'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'LEBIH'); ?>
		<?php echo $form->textField($model,'LEBIH'); ?>
		<?php echo $form->error($model,'LEBIH'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'KURANG'); ?>
		<?php echo $form->textField($model,'KURANG'); ?>
		<?php echo $form->error($model,'KURANG'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'AKHIR'); ?>
		<?php echo $form->textField($model,'AKHIR'); ?>
		<?php echo $form->error($model,'AKHIR'); ?>
	</div>

	<div class="row buttons">
		<?php echo CHtml::submitButton($model->isNewRecord ? 'Create' : 'Save'); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- form -->