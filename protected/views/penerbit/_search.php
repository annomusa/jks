<?php
/* @var $this PenerbitController */
/* @var $model Penerbit */
/* @var $form CActiveForm */
?>

<div class="wide form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'action'=>Yii::app()->createUrl($this->route),
	'method'=>'get',
)); ?>

	<div class="row">
		<?php echo $form->label($model,'ID_PENERBIT'); ?>
		<?php echo $form->textField($model,'ID_PENERBIT'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'NAMA_PENERBIT'); ?>
		<?php echo $form->textField($model,'NAMA_PENERBIT',array('size'=>25,'maxlength'=>25)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'NO_TLP'); ?>
		<?php echo $form->textField($model,'NO_TLP',array('size'=>15,'maxlength'=>15)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'ALAMAT'); ?>
		<?php echo $form->textField($model,'ALAMAT',array('size'=>50,'maxlength'=>50)); ?>
	</div>

	<div class="row buttons">
		<?php echo CHtml::submitButton('Search'); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- search-form -->