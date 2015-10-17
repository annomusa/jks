<?php
/* @var $this PerjalananController */
/* @var $model Perjalanan */

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
<h1>Buat PO Perjalanan Baru - Step 4 : Finalisasi Proses PO - <?php echo $model->iDKENDARAAN->NOPOL; ?></h1>

<?php
	$this->renderPartial('/relasi_po/view3', array('model'=>RelasiPo::model(), "id"=>$model->ID_PERJALANAN));
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
		<?php echo $form->labelEx($model,'TAMBAHAN'); ?>
		<?php echo $form->textField($model,'TAMBAHAN',array('size'=>25,'maxlength'=>25, 'readonly'=>true)); ?>
		<?php echo $form->error($model,'TAMBAHAN'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'TITIPAN_AWAL'); ?>
		<?php echo $form->textField($model,'TITIPAN_AWAL',array('size'=>25,'maxlength'=>25, 'readonly'=>true)); ?>
		<?php echo $form->error($model,'TITIPAN_AWAL'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'SISA'); ?>
		<?php echo $form->textField($model,'SISA',array('size'=>25,'maxlength'=>25, 'readonly'=>true)); ?>
		<?php echo $form->error($model,'SISA'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'UANG_DIBERIKAN'); ?>
		<?php echo $form->textField($model,'UANG_DIBERIKAN',array('size'=>25,'maxlength'=>25)); ?>
		<?php echo $form->error($model,'UANG_DIBERIKAN'); ?>
	</div>

	<div class="row buttons">
		<?php echo CHtml::submitButton($model->isNewRecord ? 'Create' : 'Save'); ?>
	</div>

<?php $this->endWidget(); ?>

<p>
<?php 
echo TbHtml::submitButton('Kembali', array('submit'=> array("create3","id"=>$model->ID_PERJALANAN),'color' => TbHtml::BUTTON_COLOR_PRIMARY));
?>
</p>