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
		&nbsp; s/d &nbsp;
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
	
	<div class="row buttons">
		<?php echo TbHtml::submitButton('Search'); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- search-form -->