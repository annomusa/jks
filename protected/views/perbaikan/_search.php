<?php
/* @var $this PerbaikanController */
/* @var $model Perbaikan */
/* @var $form CActiveForm */
?>

<div class="wide form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'action'=>Yii::app()->createUrl($this->route),
	'method'=>'get',
)); ?>

	<div class="row">
		<?php echo $form->label($model,'ID_PERBAIKAN'); ?>
		<?php echo $form->textField($model,'ID_PERBAIKAN'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'ID_KENDARAAN'); ?>
		<?php echo $form->textField($model,'ID_KENDARAAN'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'TGL_PERBAIKAN'); ?>
		<?php echo $form->textField($model,'TGL_PERBAIKAN'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'KERUSAKAN'); ?>
		<?php echo $form->textField($model,'KERUSAKAN',array('size'=>50,'maxlength'=>50)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'ESTIMASI_WAKTU_PERBAIKAN'); ?>
		<?php echo $form->textField($model,'ESTIMASI_WAKTU_PERBAIKAN'); ?>
	</div>

	<div class="row buttons">
		<?php echo CHtml::submitButton('Search'); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- search-form -->