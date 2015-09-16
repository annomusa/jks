<?php
/* @var $this PrivilegeController */
/* @var $model Privilege */
/* @var $form CActiveForm */
?>

<div class="wide form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'action'=>Yii::app()->createUrl($this->route),
	'method'=>'get',
)); ?>

	<div class="row">
		<?php echo $form->label($model,'ID_PRIVILEGE'); ?>
		<?php echo $form->textField($model,'ID_PRIVILEGE'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'NAMA_PRIVILEGE'); ?>
		<?php echo $form->textField($model,'NAMA_PRIVILEGE',array('size'=>50,'maxlength'=>50)); ?>
	</div>

	<div class="row buttons">
		<?php echo CHtml::submitButton('Search'); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- search-form -->