<?php
/* @var $this PosisiBanController */
/* @var $model PosisiBan */
/* @var $form CActiveForm */
?>

<div class="wide form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'action'=>Yii::app()->createUrl($this->route),
	'method'=>'get',
)); ?>

	<div class="row">
		<?php echo $form->label($model,'ID_POSISI'); ?>
		<?php echo $form->textField($model,'ID_POSISI'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'POSISI'); ?>
		<?php echo $form->textField($model,'POSISI',array('size'=>25,'maxlength'=>25)); ?>
	</div>

	<div class="row buttons">
		<?php echo CHtml::submitButton('Search'); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- search-form -->