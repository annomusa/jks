<?php
/* @var $this SatuanController */
/* @var $model Satuan */
/* @var $form CActiveForm */
?>

<div class="wide form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'action'=>Yii::app()->createUrl($this->route),
	'method'=>'get',
)); ?>

	<div class="row">
		<?php echo $form->label($model,'ID_SATUAN'); ?>
		<?php echo $form->textField($model,'ID_SATUAN'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'SATUAN'); ?>
		<?php echo $form->textField($model,'SATUAN',array('size'=>20,'maxlength'=>20)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'JENIS_SATUAN'); ?>
		<?php echo $form->textField($model,'JENIS_SATUAN',array('size'=>25,'maxlength'=>25)); ?>
	</div>

	<div class="row buttons">
		<?php echo CHtml::submitButton('Search'); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- search-form -->