<?php
/* @var $this KaryawanController */
/* @var $model Karyawan */
/* @var $form CActiveForm */
?>

<div class="wide form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'action'=>Yii::app()->createUrl($this->route),
	'method'=>'get',
)); ?>

	<div class="row">
		<?php echo $form->label($model,'ID_KARYAWAN'); ?>
		<?php echo $form->textField($model,'ID_KARYAWAN'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'NAMA'); ?>
		<?php echo $form->textField($model,'NAMA',array('size'=>25,'maxlength'=>25)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'NO_HP'); ?>
		<?php echo $form->textField($model,'NO_HP',array('size'=>15,'maxlength'=>15)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'ALAMAT'); ?>
		<?php echo $form->textField($model,'ALAMAT',array('size'=>30,'maxlength'=>30)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'TGL_MASUK_KERJA'); ?>
		<?php echo $form->textField($model,'TGL_MASUK_KERJA'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'PENEMPATAN'); ?>
		<?php echo $form->textField($model,'PENEMPATAN',array('size'=>25,'maxlength'=>25)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'STATUS'); ?>
		<?php echo $form->textField($model,'STATUS',array('size'=>25,'maxlength'=>25)); ?>
	</div>

	<div class="row buttons">
		<?php echo CHtml::submitButton('Search'); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- search-form -->