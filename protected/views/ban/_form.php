<?php
/* @var $this BanController */
/* @var $model Ban */
/* @var $form CActiveForm */
?>

<div class="form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'id'=>'ban-form',
	// Please note: When you enable ajax validation, make sure the corresponding
	// controller action is handling ajax validation correctly.
	// There is a call to performAjaxValidation() commented in generated controller code.
	// See class documentation of CActiveForm for details on this.
	'enableAjaxValidation'=>false,
)); ?>

	<p class="note">Kolom dengan tanda <span class="required">*</span> harus diisi.</p>

	<?php echo $form->errorSummary($model); ?>

	<div class="row">
		<?php echo $form->labelEx($model,'POSISI_BAN'); ?>
		<?php $data = TbHtml::listData(PosisiBan::model()->findAll(), 'ID_POSISI', 'POSISI');
        echo $form->dropDownList($model,'ID_POSISI', $data, array('empty'=>'Pilih Posisi Ban')); ?>
		<?php echo $form->error($model,'ID_POSISI'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'NOMOR_SERI'); ?>
		<?php echo $form->textField($model,'NOMOR_SERI',array('size'=>20,'maxlength'=>20)); ?>
		<?php echo $form->error($model,'NOMOR_SERI'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'MERK'); ?>
		<?php echo $form->textField($model,'MERK',array('size'=>20,'maxlength'=>20)); ?>
		<?php echo $form->error($model,'MERK'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'HARGA'); ?>
		<?php echo $form->textField($model,'HARGA'); ?>
		<?php echo $form->error($model,'HARGA'); ?>
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