<?php
/* @var $this OngkosController */
/* @var $model Ongkos */
/* @var $form CActiveForm */
?>

<div class="wide form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'action'=>Yii::app()->createUrl($this->route),
	'method'=>'get',
)); ?>

	<div class="row">
		<?php echo $form->label($model,'ID_ONGKOS'); ?>
		<?php echo $form->textField($model,'ID_ONGKOS'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'ID_SATUAN'); ?>
		<?php echo $form->textField($model,'ID_SATUAN'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'TUJUAN'); ?>
		<?php echo $form->textField($model,'TUJUAN',array('size'=>25,'maxlength'=>25)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'HARGA'); ?>
		<?php echo $form->textField($model,'HARGA'); ?>
	</div>

	<div class="row buttons">
		<?php echo CHtml::submitButton('Search'); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- search-form -->