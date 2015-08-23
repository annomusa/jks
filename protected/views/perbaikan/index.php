<?php
/* @var $this PerbaikanController */
/* @var $dataProvider CActiveDataProvider */

$this->breadcrumbs=array(
	'Perbaikans',
);

$this->menu=array(
	array('label'=>'Create Perbaikan', 'url'=>array('create')),
	array('label'=>'Manage Perbaikan', 'url'=>array('admin')),
);
?>

<h1>Perbaikans</h1>

<?php $this->widget('zii.widgets.CListView', array(
	'dataProvider'=>$dataProvider,
	'itemView'=>'_view',
)); ?>
