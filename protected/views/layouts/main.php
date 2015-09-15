<?php /* @var $this Controller */ ?>
<!DOCTYPE html>
<html>
<head>
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
	<meta name="language" content="en">

	<!-- blueprint CSS framework -->
	<link rel="stylesheet" type="text/css" href="<?php echo Yii::app()->request->baseUrl; ?>/css/screen.css" media="screen, projection">
	<link rel="stylesheet" type="text/css" href="<?php echo Yii::app()->request->baseUrl; ?>/css/print.css" media="print">
	<!--[if lt IE 8]>
	<link rel="stylesheet" type="text/css" href="<?php echo Yii::app()->request->baseUrl; ?>/css/ie.css" media="screen, projection">
	<![endif]-->

	<link rel="stylesheet" type="text/css" href="<?php echo Yii::app()->request->baseUrl; ?>/css/main.css">
	<link rel="stylesheet" type="text/css" href="<?php echo Yii::app()->request->baseUrl; ?>/css/form.css">

	<title><?php echo CHtml::encode($this->pageTitle); ?></title>
</head>

<body>

<div class="container" id="page">

	<div id="header">
		<div id="logo"><?php echo CHtml::encode(Yii::app()->name); ?></div>
	</div><!-- header -->

	<div id="mainmenu">
		<?php 
		$data[] = array();
		array_push($data, array('label'=>'Karyawan', 'url'=>array('/karyawan/index')));
		array_push($data, array('label'=>'Administrator', 'url'=>array('/admin/index')));
		array_push($data, array('label'=>'Satuan', 'url'=>array('/satuan/index')));
		array_push($data, array('label'=>'Sparepart', 'url'=>array('/sparepart/index')));
		array_push($data, array('label'=>'Kendaraan', 'url'=>array('/kendaraan/index')));
		array_push($data, array('label'=>'Data Ongkos', 'url'=>array('/ongkos/index')));
		array_push($data, array('label'=>'Penerbit', 'url'=>array('/penerbit/index')));
		$this->widget('zii.widgets.CMenu',array(
			'items'=>array(
				array('label'=>'Home', 'url'=>array('/site/index')),
				array('label'=>'Buat PO Baru', 'url'=>array('/perjalanan/create')),
				array('label'=>'Rekap PO', 'url'=>array('/perjalanan/admin')),
				array('label'=>'Pengadaan Spare-parts baru', 'url'=>array('/pengadaan/create')),
				array('label'=>'Rekap Pengadaan Spare-parts', 'url'=>array('/pengadaan/admin')),
				array('label'=>'Buat perbaikan baru', 'url'=>array('/perbaikan/create')),
				array('label'=>'Rekap perbaikan', 'url'=>array('/perbaikan/admin')),
				array('label'=>'Data', 'url'=>'#', 'items'=>$data),
				array('label'=>'Contact', 'url'=>array('/site/contact')),
				array('label'=>'Login', 'url'=>array('/site/login'), 'visible'=>Yii::app()->user->isGuest),
				array('label'=>'Logout ('.Yii::app()->user->name.')', 'url'=>array('/site/logout'), 'visible'=>!Yii::app()->user->isGuest)
			),
		)); ?>
	</div><!-- mainmenu -->
	
	<?php if(isset($this->breadcrumbs)):?>
		<?php $this->widget('zii.widgets.CBreadcrumbs', array(
			'links'=>$this->breadcrumbs,
			'homeLink'=>false
		)); ?><!-- breadcrumbs -->
	<?php endif?>

	<?php echo $content; ?>

	<div class="clear"></div>

	<div id="footer">
		Copyright &copy; <?php echo date('Y'); ?> by APP PLN Surabaya.<br/>
		All Rights Reserved.<br/>
		<?php echo Yii::powered(); ?>
	</div><!-- footer -->

</div><!-- page -->

</body>
</html>
