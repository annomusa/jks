<?php
/* @var $this AdminController */
/* @var $dataProvider CActiveDataProvider */

$this->breadcrumbs=array(
	'Administrator',
);

$this->menu=array(
	array('label'=>'Buat Data Administrator Baru', 'url'=>array('create')),
	//array('label'=>'Manage Admin', 'url'=>array('admin')),
);
?>

<h1>Data Administrator</h1>

<?php /*$this->widget('zii.widgets.CListView', array(
	'dataProvider'=>$dataProvider,
	'itemView'=>'_view',
));*/ ?>

<?php $this->widget('zii.widgets.grid.CGridView', array(
	'id'=>'admin-grid',
	'dataProvider'=>$model->search(),
	'filter'=>$model,
	'columns'=>array(
		'ID_ADMIN',
		'NAMA',
		'USERNAME',
		'PASSWORD',
		'PRIVILEGE',
		array(
			'class'=>'CButtonColumn',
		),
	),
)); ?>
