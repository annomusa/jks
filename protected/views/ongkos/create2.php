<?php
/* @var $this KaryawanController */
/* @var $model Karyawan */
$this->menu=array(
	array('label'=>'List Ongkos', 'url'=>array('index')),
);
?>

<h1>Buat Data Ongkos Baru</h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>