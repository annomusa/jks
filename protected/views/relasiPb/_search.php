<?php
/* @var $this RelasiPbController */
/* @var $model RelasiPb */
/* @var $form CActiveForm */
?>

<div class="wide form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'action'=>Yii::app()->createUrl($this->route),
	'method'=>'get',
)); ?>

	<div class="row">
		<?php echo $form->label($model,'ID_RELASI_PB'); ?>
		<?php echo $form->textField($model,'ID_RELASI_PB'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'ID_PERBAIKAN'); ?>
		<?php echo $form->textField($model,'ID_PERBAIKAN'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'ID_BAN'); ?>
		<?php echo $form->textField($model,'ID_BAN'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'JUMLAH'); ?>
		<?php echo $form->textField($model,'JUMLAH'); ?>
	</div>

	<div class="row buttons">
		<?php echo CHtml::submitButton('Search'); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- search-form -->