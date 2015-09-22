<?php
/* @var $this OngkosController */
/* @var $dataProvider CActiveDataProvider */

$this->breadcrumbs=array(
	'Ongkos',
);

$this->menu=array(
	array('label'=>'Create Ongkos', 'url'=>array('create')),
	array('label'=>'Manage Ongkos', 'url'=>array('admin')),
);
?>

<h1>Data Ongkos</h1>

<?php $this->widget('zii.widgets.CListView', array(
	'dataProvider'=>$dataProvider,
	'itemView'=>'_view',
)); ?>
