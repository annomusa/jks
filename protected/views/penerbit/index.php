<?php
/* @var $this PenerbitController */
/* @var $dataProvider CActiveDataProvider */

$this->breadcrumbs=array(
	'Penerbits',
);

$this->menu=array(
	array('label'=>'Create Penerbit', 'url'=>array('create')),
	array('label'=>'Manage Penerbit', 'url'=>array('admin')),
);
?>

<h1>Penerbits</h1>

<?php $this->widget('zii.widgets.CListView', array(
	'dataProvider'=>$dataProvider,
	'itemView'=>'_view',
)); ?>
