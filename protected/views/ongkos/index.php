<?php
/* @var $this OngkosController */
/* @var $dataProvider CActiveDataProvider */

$this->breadcrumbs=array(
	'Ongkoses',
);

$this->menu=array(
	array('label'=>'Create Ongkos', 'url'=>array('create')),
	array('label'=>'Manage Ongkos', 'url'=>array('admin')),
);
?>

<h1>Ongkoses</h1>

<?php $this->widget('zii.widgets.CListView', array(
	'dataProvider'=>$dataProvider,
	'itemView'=>'_view',
)); ?>
