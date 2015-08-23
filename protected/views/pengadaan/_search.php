<?php
/* @var $this PengadaanController */
/* @var $model Pengadaan */
/* @var $form CActiveForm */
?>

<div class="wide form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'action'=>Yii::app()->createUrl($this->route),
	'method'=>'get',
)); ?>

	<div class="row">
		<?php echo $form->label($model,'ID_PENGADAAN'); ?>
		<?php echo $form->textField($model,'ID_PENGADAAN'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'NO_PO'); ?>
		<?php echo $form->textField($model,'NO_PO',array('size'=>25,'maxlength'=>25)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'TGL_PENGADAAN'); ?>
		<?php echo $form->textField($model,'TGL_PENGADAAN'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'PERMINTAAN'); ?>
		<?php echo $form->textField($model,'PERMINTAAN',array('size'=>25,'maxlength'=>25)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'HARGA_TOTAL'); ?>
		<?php echo $form->textField($model,'HARGA_TOTAL'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'NAMA_TOKO'); ?>
		<?php echo $form->textField($model,'NAMA_TOKO',array('size'=>25,'maxlength'=>25)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'NO_TLP'); ?>
		<?php echo $form->textField($model,'NO_TLP',array('size'=>15,'maxlength'=>15)); ?>
	</div>

	<div class="row buttons">
		<?php echo CHtml::submitButton('Search'); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- search-form -->