<?php
/* @var $this KaryawanController */
/* @var $model Karyawan */
/* @var $form CActiveForm */
?>

<div class="form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'id'=>'karyawan-form',
	// Please note: When you enable ajax validation, make sure the corresponding
	// controller action is handling ajax validation correctly.
	// There is a call to performAjaxValidation() commented in generated controller code.
	// See class documentation of CActiveForm for details on this.
	'enableAjaxValidation'=>false,
)); ?>

	<p class="note">Kolom dengan tanda <span class="required">*</span> harus diisi.</p>

	<?php echo $form->errorSummary($model); ?>

	<div class="row">
		<?php echo $form->labelEx($model,'NAMA'); ?>
		<?php echo $form->textField($model,'NAMA',array('size'=>25,'maxlength'=>25)); ?>
		<?php echo $form->error($model,'NAMA'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'Pilih Privilege'); ?>
		<?php $data = CHtml::listData(Privilege::model()->findAll(), 'ID_PRIVILEGE', 'NAMA_PRIVILEGE');
        echo $form->dropDownList($model,'ID_PRIVILEGE', $data); ?>
		<?php echo $form->error($model,'ID_PRIVILEGE'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'NO_HP'); ?>
		<?php echo $form->textField($model,'NO_HP',array('size'=>15,'maxlength'=>15)); ?>
		<?php echo $form->error($model,'NO_HP'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'ALAMAT'); ?>
		<?php echo $form->textField($model,'ALAMAT',array('size'=>30,'maxlength'=>30)); ?>
		<?php echo $form->error($model,'ALAMAT'); ?>
	</div>


	<div class="row">
		<?php echo CHtml::activeLabelEx($model,'Tanggal Masuk Kerja'); ?>
		<?php echo CHtml::activeTextField($model,'TGL_MASUK_KERJA', array("id"=>"TGL_MASUK_KERJA")); ?>
		<?php $this->widget('application.extensions.calendar.SCalendar',
			array(
				'inputField'=>'TGL_MASUK_KERJA',
				'ifFormat'=>'%Y-%m-%d',
		)); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'PENEMPATAN'); ?>
		<?php echo $form->textField($model,'PENEMPATAN',array('size'=>25,'maxlength'=>25)); ?>
		<?php echo $form->error($model,'PENEMPATAN'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'STATUS'); ?>
		<?php echo $form->textField($model,'STATUS',array('size'=>25,'maxlength'=>25)); ?>
		<?php echo $form->error($model,'STATUS'); ?>
	</div>

	<div class="row buttons">
		<?php echo CHtml::submitButton($model->isNewRecord ? 'Create' : 'Save'); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- form -->