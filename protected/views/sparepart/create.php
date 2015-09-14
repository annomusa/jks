<?php
/* @var $this SparepartController */
/* @var $model Sparepart */

$this->breadcrumbs=array(
	'Spareparts'=>array('index'),
	'Create',
);

$this->menu=array(
	array('label'=>'List Sparepart', 'url'=>array('index')),
	array('label'=>'Manage Sparepart', 'url'=>array('admin')),
);
?>

<h1>Create Sparepart</h1>

<div class="form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'id'=>'sparepart-form',
	// Please note: When you enable ajax validation, make sure the corresponding
	// controller action is handling ajax validation correctly.
	// There is a call to performAjaxValidation() commented in generated controller code.
	// See class documentation of CActiveForm for details on this.
	'enableAjaxValidation'=>false,
)); ?>

	<p class="note">Fields with <span class="required">*</span> are required.</p>

	<?php echo $form->errorSummary($model); ?>

	<div class="row">
		<?php echo $form->labelEx($model,'NAMA_BARANG'); ?>
		<?php echo $form->textField($model,'NAMA_BARANG',array('size'=>25,'maxlength'=>25)); ?>
		<?php echo $form->error($model,'NAMA_BARANG'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'HARGA_SATUAN'); ?>
		<?php echo $form->textField($model,'HARGA_SATUAN'); ?>
		<?php echo $form->error($model,'HARGA_SATUAN'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'STOK'); ?>
		<?php echo $form->textField($model,'STOK'); ?>
		<?php echo $form->error($model,'STOK'); ?>
	</div>

	<div class="row buttons">
		<?php echo CHtml::submitButton($model->isNewRecord ? 'Create' : 'Save',array('peng'=>$_GET['id'])); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- form -->