<?php
/* @var $this PerbaikanController */
/* @var $model Perbaikan */

$this->breadcrumbs=array(
	'Perbaikan'=>array('index'),
	'Buat Perbaikan Baru',
);

$this->menu=array(
	//array('label'=>'List Perbaikan', 'url'=>array('index')),
	//array('label'=>'Manage Perbaikan', 'url'=>array('admin')),
);

Yii::app()->clientScript->registerScript('search', "
$('.pilih_menu').click(function(){
	$('.ganti').toggle();
	return false;
});
");
?>

<h1>Buat Perbaikan Baru</h1>

<div class="form">

<?php 
	$form=$this->beginWidget('CActiveForm', array(
	'id'=>'perbaikan-form',
	// Please note: When you enable ajax validation, make sure the corresponding
	// controller action is handling ajax validation correctly.
	// There is a call to performAjaxValidation() commented in generated controller code.
	// See class documentation of CActiveForm for details on this.
	'enableAjaxValidation'=>false,
)); ?>

	<p class="note">Kolom dengan tanda <span class="required">*</span> harus diisi.</p>

	<?php echo $form->errorSummary($model); ?>

	<div class="row">
		<?php echo $form->labelEx($model,'Pilih Kendaraan'); ?>
		<?php $data = CHtml::listData(Kendaraan::model()->findAll(), 'ID_KENDARAAN', 'NOPOL');
        echo $form->dropDownList($model,'ID_KENDARAAN', $data); ?>
		<?php echo $form->error($model,'ID_KENDARAAN'); ?>
	</div>

	<div class="row">
		<?php echo CHtml::activeLabelEx($model,'Tanggal Perbaikan'); ?>
		<?php echo CHtml::activeTextField($model,'TGL_PERBAIKAN', array("id"=>"TGL_PERBAIKAN")); ?>
		<?php $this->widget('application.extensions.calendar.SCalendar',
			array(
				'inputField'=>'TGL_PERBAIKAN',
				'ifFormat'=>'%Y-%m-%d',
		)); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'KERUSAKAN'); ?>
		<?php echo $form->textField($model,'KERUSAKAN',array('size'=>50,'maxlength'=>50)); ?>
		<?php echo $form->error($model,'KERUSAKAN'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'ESTIMASI_WAKTU_PERBAIKAN (hari)'); ?>
		<?php echo $form->textField($model,'ESTIMASI_WAKTU_PERBAIKAN'); ?>
		<?php echo $form->error($model,'ESTIMASI_WAKTU_PERBAIKAN'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'Jenis Perbaikan'); ?>
		<?php 
		$data = array('0'=>'Perbaikan','1'=>'Penggantian','2'=>'Perbaikan & Penggantian');
        echo $form->dropDownList($model,'JENIS_PERBAIKAN', $data, array('empty'=>'- Pilih Jenis Perbaikan -',
        'class'=>'pilih_menu',
        'onchange'=>"
        	var selected = $('.pilih_menu option:selected').val();
        	if (selected == 1 || selected == 2)
        	{
        		$('.ganti').hide();
        	}
        	else if (selected == 0)
        	{
        		$('.ganti').show();
        	}
    	"
        )); ?>
		<?php echo $form->error($model,'JENIS_PERBAIKAN'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'Penggantian', array('class'=>'ganti', 'style'=>"display:none")); ?>
		<?php 
		$data = array('0'=>'Ganti Sparepart','1'=>'Ganti Ban');
        echo $form->dropDownList($model,'JENIS_PENGGANTIAN', $data, array('empty'=>'- Pilih Jenis Penggantian -',
        'class'=>'ganti', 'style'=>"display:none")); ?>
		<?php echo $form->error($model,'JENIS_PENGGANTIAN'); ?>
	</div>

	<div class="row buttons">
		<?php echo CHtml::submitButton($model->isNewRecord ? 'Create' : 'Save'); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- form -->