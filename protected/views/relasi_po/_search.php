<?php
/* @var $this Relasi_poController */
/* @var $model RelasiPo */
/* @var $form CActiveForm */
?>

<div class="wide form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'action'=>Yii::app()->createUrl($this->route),
	'method'=>'get',
)); ?>

	<div class="row">
		<?php echo $form->label($model,'ID_RELASI_PO'); ?>
		<?php echo $form->textField($model,'ID_RELASI_PO'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'ID_PERJALANAN'); ?>
		<?php echo $form->textField($model,'ID_PERJALANAN'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'ID_ONGKOS'); ?>
		<?php echo $form->textField($model,'ID_ONGKOS'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'KETERANGAN'); ?>
		<?php echo $form->textField($model,'KETERANGAN'); ?>
	</div>

	<div class="row buttons">
		<?php echo CHtml::submitButton('Search'); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- search-form -->