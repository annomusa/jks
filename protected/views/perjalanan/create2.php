<?php
/* @var $this PerjalananController */
/* @var $model Perjalanan */

$this->breadcrumbs=array(
	'Perjalanans'=>array('index'),
	'Create',
);

$this->menu=array(
	array('label'=>'List Perjalanan', 'url'=>array('index')),
	array('label'=>'Manage Perjalanan', 'url'=>array('admin')),
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
<h1>Buat PO Perjalanan Baru - Step 2 : Pilih Tujuan / Ongkos Perjalanan</h1>


</div><!-- form -->
<?php
	$this->renderPartial('/ongkos/create', array('model'=>Ongkos::model(), "id"=>$model->ID_PERJALANAN));
?>

<?php
	$this->renderPartial('/relasi_po/view', array('model'=>RelasiPo::model(), "id"=>$model->ID_PERJALANAN));
?>
<?php 
$isi = Yii::app()->db->createCommand()->select('COUNT(*)')->from('relasi_po')->where('ID_PERJALANAN=:ID_PERJALANAN',array(':ID_PERJALANAN'=>"$model->ID_PERJALANAN"))->queryScalar();


if($isi!=NULL)
{
	echo "Sudah selesai?";
	echo TbHtml::submitButton('LANJUT', array('submit'=> array("lanjut","id"=>$model->ID_PERJALANAN),'color' => TbHtml::BUTTON_COLOR_PRIMARY));
}

?>
