<?php
/* @var $this AdminController */
/* @var $model Admin */
/* @var $form CActiveForm */
?>

<div class="wide form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'action'=>Yii::app()->createUrl($this->route),
	'method'=>'get',
)); ?>

	<div class="row">
		<?php echo $form->label($model,'ID_ADMIN'); ?>
		<?php echo $form->textField($model,'ID_ADMIN'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'NAMA'); ?>
		<?php echo $form->textField($model,'NAMA',array('size'=>50,'maxlength'=>50)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'USERNAME'); ?>
		<?php echo $form->textField($model,'USERNAME',array('size'=>20,'maxlength'=>20)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'PASSWORD'); ?>
		<?php echo $form->passwordField($model,'PASSWORD',array('size'=>10,'maxlength'=>10)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'PRIVILEGE'); ?>
		<?php echo $form->textField($model,'PRIVILEGE'); ?>
	</div>

	<div class="row buttons">
		<?php echo CHtml::submitButton('Search'); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- search-form -->