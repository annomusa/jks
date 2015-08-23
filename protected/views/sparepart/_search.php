<?php
/* @var $this SparepartController */
/* @var $model Sparepart */
/* @var $form CActiveForm */
?>

<div class="wide form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'action'=>Yii::app()->createUrl($this->route),
	'method'=>'get',
)); ?>

	<div class="row">
		<?php echo $form->label($model,'ID_SPAREPART'); ?>
		<?php echo $form->textField($model,'ID_SPAREPART'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'NAMA_BARANG'); ?>
		<?php echo $form->textField($model,'NAMA_BARANG',array('size'=>25,'maxlength'=>25)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'HARGA_SATUAN'); ?>
		<?php echo $form->textField($model,'HARGA_SATUAN'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'STOK'); ?>
		<?php echo $form->textField($model,'STOK'); ?>
	</div>

	<div class="row buttons">
		<?php echo CHtml::submitButton('Search'); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- search-form -->