<?php
/* @var $this PengadaanController */
/* @var $model Pengadaan */

$this->breadcrumbs=array(
	'Pengadaans'=>array('index'),
	'Create',
);

$this->menu=array(
	array('label'=>'List Pengadaan', 'url'=>array('index')),
	array('label'=>'Manage Pengadaan', 'url'=>array('admin')),
);
?>

<h1>Pilih jenis Spare-parts yang akan diadakan</h1>

<?php
	$this->renderPartial('/sparepart/admin', array('model'=>Sparepart::model(), "id"=>$model->ID_PENGADAAN));
?>
<?php
	$this->renderPartial('/relasiPengadaanSparepart/view', array('model'=>RelasiPengadaanSparepart::model(), "id"=>$model->ID_PENGADAAN));
?>

<?php 
$isi = Yii::app()->db->createCommand()->select('COUNT(*)')->from('relasi_pengadaan_sparepart')->where('ID_PENGADAAN=:ID_PENGADAAN',array(':ID_PENGADAAN'=>"$model->ID_PENGADAAN"))->queryScalar();


if($isi!=NULL)
{
	echo "Sudah selesai?";
	echo TbHtml::submitButton('LANJUT', array('submit'=> array("lanjut","id"=>$model->ID_PENGADAAN),'color' => TbHtml::BUTTON_COLOR_PRIMARY));
}

?>
