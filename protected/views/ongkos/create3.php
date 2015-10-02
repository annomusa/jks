<h1>Buat Data Ongkos Baru</h1>
<div class="form">
<?php $form=$this->beginWidget('CActiveForm', array(
	'id'=>'ongkos-form',
	// Please note: When you enable ajax validation, make sure the corresponding
	// controller action is handling ajax validation correctly.
	// There is a call to performAjaxValidation() commented in generated controller code.
	// See class documentation of CActiveForm for details on this.
	'enableAjaxValidation'=>false,
)); ?>

	<p class="note">Kolom dengan tanda <span class="required">*</span> harus diisi.</p>

	<?php echo $form->errorSummary($model); ?>

	<div class="row">
		<?php echo $form->labelEx($model,'Pilih Satuan'); ?>
		<?php $data = CHtml::listData(Satuan::model()->findAll(), 'ID_SATUAN', 'SATUAN');
        echo $form->dropDownList($model,'ID_SATUAN', $data); ?>
		<?php echo $form->error($model,'ID_SATUAN'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'Pilih Jenis Ongkos'); ?>
		<?php 
		$data = array('0'=>'POKOK');
        echo $form->dropDownList($model,'JENIS_ONGKOS', $data); ?>
		<?php echo $form->error($model,'JENIS_ONGKOS'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'TUJUAN / TAMBAHAN'); ?>
		<?php echo $form->textField($model,'TUJUAN',array('size'=>25,'maxlength'=>25)); ?>
		<?php echo $form->error($model,'TUJUAN'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'HARGA'); ?>
		<?php echo $form->textField($model,'HARGA'); ?>
		<?php echo $form->error($model,'HARGA'); ?>
	</div>

	<div class="row buttons">
		<?php echo CHtml::submitButton($model->isNewRecord ? 'Create' : 'Save'); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- form -->