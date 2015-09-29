<?php
/* @var $this PerjalananController */
/* @var $model Perjalanan */
/* @var $form CActiveForm */
?>

<div class="wide form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'action'=>Yii::app()->createUrl($this->route),
	'method'=>'get',
)); ?>
	<!--
	<div class="row">
		<?php echo $form->label($model,'ID_PERJALANAN'); ?>
		<?php echo $form->textField($model,'ID_PERJALANAN'); ?>
	</div>
	
	<div class="row">
		<?php echo $form->label($model,'ID_PENERBIT'); ?>
		<?php echo $form->textField($model,'ID_PENERBIT'); ?>
	</div>
	-->
	<div class="row">
		<?php echo $form->label($model,'NAMA PENERBIT'); ?>
		<?php $data = CHtml::listData(Penerbit::model()->findAll(), 'ID_PENERBIT', 'NAMA_PENERBIT');
        echo $form->dropDownList($model,'ID_PENERBIT', $data, array('empty'=>'- Pilih Nama Penerbit -')); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'NOPOL'); ?>
		<?php $data = CHtml::listData(Kendaraan::model()->findAll(), 'ID_KENDARAAN', 'NOPOL');
        echo $form->dropDownList($model,'ID_KENDARAAN', $data, array('empty'=>'- Pilih Nopol Kendaraan -')); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'Tanggal Perjalanan'); ?>
		<?php echo CHtml::activeTextField($model,'from_date', array("id"=>"from_date"), 'required'); ?>
		&nbsp; s/d
		<?php echo CHtml::activeTextField($model,'to_date', array("id"=>"to_date")); ?>
		<?php $this->widget('application.extensions.calendar.SCalendar',
			array(
				'inputField'=>'from_date',
				'ifFormat'=>'%Y-%m-%d',
		)); ?>
		<?php $this->widget('application.extensions.calendar.SCalendar',
			array(
				'inputField'=>'to_date',
				'ifFormat'=>'%Y-%m-%d',
		));  ?>
	</div>
	<!--
	<div class="row">
		<?php echo $form->label($model,'ID_ONGKOS'); ?>
		<?php echo $form->textField($model,'ID_ONGKOS'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'ID_KENDARAAN'); ?>
		<?php echo $form->textField($model,'ID_KENDARAAN'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'TGL_PERJALANAN'); ?>
		<?php echo $form->textField($model,'TGL_PERJALANAN'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'NO_SURAT_PO'); ?>
		<?php echo $form->textField($model,'NO_SURAT_PO',array('size'=>20,'maxlength'=>20)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'JENIS_PERINTAH'); ?>
		<?php echo $form->textField($model,'JENIS_PERINTAH',array('size'=>20,'maxlength'=>20)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'RITASE'); ?>
		<?php echo $form->textField($model,'RITASE',array('size'=>25,'maxlength'=>25)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'TITIPAN_AWAL'); ?>
		<?php echo $form->textField($model,'TITIPAN_AWAL'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'LEBIH'); ?>
		<?php echo $form->textField($model,'LEBIH'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'KURANG'); ?>
		<?php echo $form->textField($model,'KURANG'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'AKHIR'); ?>
		<?php echo $form->textField($model,'AKHIR'); ?>
	</div>
	-->
	<div class="row buttons">
		<?php echo CHtml::submitButton('Search'); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- search-form -->