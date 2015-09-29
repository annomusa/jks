<?php
/* @var $this PerbaikanController */
/* @var $model Perbaikan */
/* @var $form CActiveForm */
?>

<div class="wide form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'action'=>Yii::app()->createUrl($this->route),
	'method'=>'get',
)); ?>
	
	<div class="row">
		<?php echo $form->label($model,'Nomor Polisi'); ?>
		<?php echo $form->textField($model,'NOPOL',array('size'=>25,'maxlength'=>25)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'Tanggal Perbaikan'); ?>
		<?php echo TbHtml::activeTextField($model,'from_date', array("id"=>"from_date"), 'required'); ?>
		&nbsp; s/d &nbsp;
		<?php echo TbHtml::activeTextField($model,'to_date', array("id"=>"to_date")); ?>
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

	<div class="row">
		<?php echo $form->label($model,'Jenis Perbaikan'); ?>
		<?php
		$data = array('0'=>'Perbaikan','1'=>'Penggantian','2'=>'Perbaikan & Penggantian');
        echo $form->dropDownList($model,'JENIS_PERBAIKAN', $data, array('empty'=>'- Pilih Jenis Perbaikan -')); ?>
		<?php echo $form->error($model,'JENIS_PERBAIKAN'); ?>

	</div>

	<div class="row buttons">
		<?php echo TbHtml::submitButton('Search'); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- search-form -->