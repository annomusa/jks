<?php
/* @var $this PerjalananController */
/* @var $dataProvider CActiveDataProvider */

$this->breadcrumbs=array(
	'Perjalanans',
);

$this->menu=array(
	array('label'=>'Create Perjalanan', 'url'=>array('create')),
	array('label'=>'Manage Perjalanan', 'url'=>array('admin')),
);
?>

<h1>Perjalanans</h1>

<?php $this->widget('zii.widgets.CListView', array(
	'dataProvider'=>$dataProvider,
	'itemView'=>'_view',
)); ?>
