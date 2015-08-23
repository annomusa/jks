<?php
/* @var $this KendaraanController */
/* @var $model Kendaraan */
/* @var $form CActiveForm */
?>

<div class="wide form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'action'=>Yii::app()->createUrl($this->route),
	'method'=>'get',
)); ?>

	<div class="row">
		<?php echo $form->label($model,'ID_KENDARAAN'); ?>
		<?php echo $form->textField($model,'ID_KENDARAAN'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'ID_KARYAWAN'); ?>
		<?php echo $form->textField($model,'ID_KARYAWAN'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'NOPOL'); ?>
		<?php echo $form->textField($model,'NOPOL',array('size'=>10,'maxlength'=>10)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'STATUS_SOPIR'); ?>
		<?php echo $form->textField($model,'STATUS_SOPIR',array('size'=>10,'maxlength'=>10)); ?>
	</div>

	<div class="row buttons">
		<?php echo CHtml::submitButton('Search'); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- search-form -->