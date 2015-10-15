<?php
/* @var $this PosisiBanController */
/* @var $dataProvider CActiveDataProvider */

$this->breadcrumbs=array(
	'Posisi Bans',
);

$this->menu=array(
	array('label'=>'Create PosisiBan', 'url'=>array('create')),
	array('label'=>'Manage PosisiBan', 'url'=>array('admin')),
);
?>

<h1>Posisi Bans</h1>

<?php $this->widget('zii.widgets.CListView', array(
	'dataProvider'=>$dataProvider,
	'itemView'=>'_view',
)); ?>
