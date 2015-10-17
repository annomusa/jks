<?php
/* @var $this BanController */
/* @var $model Ban */
/* @var $form CActiveForm */
?>

<div class="wide form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'action'=>Yii::app()->createUrl($this->route),
	'method'=>'get',
)); ?>
	
	<div class="row">
		<?php echo $form->labelEx($model,'POSISI_BAN'); ?>
		<?php $data = TbHtml::listData(PosisiBan::model()->findAll(), 'ID_POSISI', 'POSISI');
        echo $form->dropDownList($model,'ID_POSISI', $data, array('empty'=>'Pilih Posisi Ban')); ?>
		<?php echo $form->error($model,'ID_POSISI'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'NOMOR_SERI'); ?>
		<?php echo $form->textField($model,'NOMOR_SERI',array('size'=>20,'maxlength'=>20)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'MERK'); ?>
		<?php echo $form->textField($model,'MERK',array('size'=>20,'maxlength'=>20)); ?>
	</div>

	<!--div class="row">
		<?php echo $form->label($model,'HARGA'); ?>
		<?php echo $form->textField($model,'HARGA'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'JUMLAH'); ?>
		<?php echo $form->textField($model,'JUMLAH'); ?>
	</div-->

	<div class="row buttons">
		<?php echo CHtml::submitButton('Search'); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- search-form -->