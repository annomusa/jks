<h1>Pilih Penanggung Jawab Mekanik</h1>

<div class="form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'id'=>'perbaikan-form',
	// Please note: When you enable ajax validation, make sure the corresponding
	// controller action is handling ajax validation correctly.
	// There is a call to performAjaxValidation() commented in generated controller code.
	// See class documentation of CActiveForm for details on this.
	'enableAjaxValidation'=>false,
)); ?>

	<?php echo $form->errorSummary($model); ?>

	<div class="row">
		<?php echo $form->labelEx($model,'Pilih PJ Mekanik'); ?>
		<?php $data = CHtml::listData(Karyawan::model()->findAllByAttributes(array('ID_PRIVILEGE'=>3)), 'ID_KARYAWAN', 'NAMA');
        echo $form->dropDownList($model,'PJ_MEKANIK', $data); ?>
		<?php echo $form->error($model,'PJ_MEKANIK'); ?>
	</div>

	<div class="row buttons">
		<?php echo CHtml::submitButton($model->isNewRecord ? 'Create' : 'Save'); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- form -->