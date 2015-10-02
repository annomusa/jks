<?php
/* @var $this PerjalananController */
/* @var $model Perjalanan */

$this->breadcrumbs=array(
	'Perjalanans'=>array('index'),
	'Create',
);

?>

<?php

Yii::app()->clientScript->registerScript('search', "
$('.search-button').click(function(){
	$('.search-form').toggle();
	return false;
});
$('.search-form form').submit(function(){
	$('#material-grid').yiiGridView('update', {
		data: $(this).serialize()
	});
	return false;
});
");
?>
<h1>Buat PO Perjalanan Baru - Step 3 : Pengisian Titipan Awal dan Tambahan</h1>

<?php
	$this->renderPartial('/relasi_po/view2', array('model'=>RelasiPo::model(), "id"=>$model->ID_PERJALANAN));
?>

<?php
	$this->renderPartial('/ongkos/create4', array('model'=>Ongkos::model(), "id"=>$model->ID_PERJALANAN));
?>

<div class="form">

<?php 

	$form=$this->beginWidget('CActiveForm', array(
	'id'=>'perjalanan-form',
	// Please note: When you enable ajax validation, make sure the corresponding
	// controller action is handling ajax validation correctly.
	// There is a call to performAjaxValidation() commented in generated controller code.
	// See class documentation of CActiveForm for details on this.
	'enableAjaxValidation'=>false,
)); ?>

	<p class="note">Kolom dengan tanda <span class="required">*</span> harus diisi.</p>

	<?php echo $form->errorSummary($model); ?>

	<div class="row">
		<?php echo $form->labelEx($model,'RITASE'); ?>
		<?php echo $form->textField($model,'RITASE',array('size'=>25,'maxlength'=>25, 'readonly'=>true)); ?>
		<?php echo $form->error($model,'RITASE'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'TITIPAN_AWAL'); ?>
		<?php echo $form->textField($model,'TITIPAN_AWAL'); ?>
		<?php echo $form->error($model,'TITIPAN_AWAL'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'LEBIH'); ?>
		<?php echo $form->textField($model,'LEBIH'); ?>
		<?php echo $form->error($model,'LEBIH'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'KURANG'); ?>
		<?php echo $form->textField($model,'KURANG'); ?>
		<?php echo $form->error($model,'KURANG'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'AKHIR'); ?>
		<?php echo $form->textField($model,'AKHIR'); ?>
		<?php echo $form->error($model,'AKHIR'); ?>
	</div>

	<div class="row buttons">
		<?php echo CHtml::submitButton($model->isNewRecord ? 'Create' : 'Save'); ?>
	</div>

<?php $this->endWidget(); ?>