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

	<!-- css theme brio -->
	<!-- <link rel="stylesheet" type="text/css" href="<?php echo Yii::app()->request->baseUrl; ?>/theme/css/bootstrap/bootstrap.css">  -->
	<!-- <link rel="stylesheet" type="text/css" href="<?php echo Yii::app()->request->baseUrl; ?>/theme/css/plugins/calendar/calendar.css">  -->
	<!-- <link rel="stylesheet" type="text/css" href="<?php echo Yii::app()->request->baseUrl; ?>/theme/css/app/app.v1.css">  -->
	<!-- <link href='http://fonts.googleapis.com/css?family=Raleway:400,500,600,700,300' rel='stylesheet' type='text/css'> -->

	<!-- css theme2 sb admin -->
	<link rel="stylesheet" type="text/css" href="<?php echo Yii::app()->request->baseUrl; ?>/theme/theme2/css/bootstrap.min.css">
	<link rel="stylesheet" type="text/css" href="<?php echo Yii::app()->request->baseUrl; ?>/theme/theme2/css/sb-admin.css">

	<!-- JQuery v1.9.1 -->
	<script src="<?php echo Yii::app()->request->baseUrl; ?>/theme/js/jquery/jquery-1.9.1.min.js" type="text/javascript"></script>
    <script src="<?php echo Yii::app()->request->baseUrl; ?>/theme/js/plugins/underscore/underscore-min.js"></script>
    <!-- Bootstrap -->
	<script src="<?php echo Yii::app()->request->baseUrl; ?>/theme/js/bootstrap/bootstrap.min.js"></script>
	<!-- Custom JQuery -->
	<script src="<?php echo Yii::app()->request->baseUrl; ?>/theme/js/app/custom.js" type="text/javascript"></script>

	<!-- NanoScroll -->
    <script src="<?php echo Yii::app()->request->baseUrl; ?>/theme/js/plugins/nicescroll/jquery.nicescroll.min.js"></script>

	<title><?php echo CHtml::encode($this->pageTitle); ?></title>
</head>

<body>

<div >

	<!-- header -->

	<!-- Navigation -->
	<!-- <aside class="left-panel"> -->
	<div id="wrapper">
		<nav class="navbar navbar-inverse navbar-fixed-top" role="navigation">
		    <!-- Brand and toggle get grouped for better mobile display -->
		    <div class="navbar-header">
		        <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-ex1-collapse">
		            <span class="sr-only">Toggle navigation</span>
		            <span class="icon-bar"></span>
		            <span class="icon-bar"></span>
		            <span class="icon-bar"></span>
		        </button>
		        <a class="navbar-brand" href="index.php?r=/site/index">SITRUK</a>
		    </div>

		    <!-- Top Menu Items -->
		    <ul class="nav navbar-right top-nav">
		        
		        <li class="dropdown">
		            <a href="#" class="dropdown-toggle" data-toggle="dropdown"><i class="fa fa-user"></i> <?php echo Yii::app()->user->name; ?> <b class="caret"></b></a>
		            <ul class="dropdown-menu">
		                <li>
		                    <a href="index.php?r=/site/logout"><i class="fa fa-fw fa-power-off"></i> Keluar</a>
		                </li>
		            </ul>
		        </li>

		    </ul>
		    <div class="collapse navbar-collapse navbar-ex1-collapse">
		        <ul class="nav navbar-nav side-nav">
		            <li>
		                <a href="index.php?r=/site/index"><i class="fa fa-fw fa-dashboard"></i> Beranda</a>
		            </li>

		            <li>
		                <a href="javascript:;" data-toggle="collapse" data-target="#demo"><i class="fa fa-fw fa-wrench"></i> Keuangan<i class="fa fa-fw fa-caret-down"></i></a>
		                <ul id="demo" class="collapse">
		                    <li>
		                        <?php echo CHtml::link('Buat PO Baru',array('/perjalanan/create')); ?>
		                    </li>
		                    <li>
		                        <?php echo CHtml::link('Rekap PO',array('/perjalanan/admin')); ?>
		                    </li>
		                </ul>
		            </li>

		            <li>
		                <a href="javascript:;" data-toggle="collapse" data-target="#demo1"><i class="fa fa-fw fa-wrench"></i> Pengadaan<i class="fa fa-fw fa-caret-down"></i></a>
		                <ul id="demo1" class="collapse">
		                    <li>
	            			<?php echo CHtml::link('Pengadaan Spare Part',array('/pengadaan/create')); ?>
	            			</li>
		                    <li>
	            			<?php echo CHtml::link('Rekap Pengadaan Spare Part',array('/pengadaan/admin')); ?>
	            			</li>
		                </ul>
		            </li>

		            <li>
		                <a href="javascript:;" data-toggle="collapse" data-target="#demo2"><i class="fa fa-fw fa-wrench"></i> Pemeliharaan<i class="fa fa-fw fa-caret-down"></i></a>
		                <ul id="demo2" class="collapse">
		                    <li>
	            			<?php echo CHtml::link('Buat perbaikan baru',array('/perbaikan/create')); ?>
	            			</li>
		                    <li>
	            			<?php echo CHtml::link('Rekap perbaikan',array('/perbaikan/admin')); ?>
	            			</li>
		                </ul>
		            </li>

		            <li>
		                <a href="javascript:;" data-toggle="collapse" data-target="#demo3"><i class="fa fa-fw fa-wrench"></i> Data<i class="fa fa-fw fa-caret-down"></i></a>
		                <ul id="demo3" class="collapse">
		                    <li>
	            			<?php echo CHtml::link('Data Karyawan',array('/karyawan/index')); ?>
	            			</li>
	            			<li>
	            			<?php echo CHtml::link('Data Administrator',array('/admin/index')); ?>
		            		</li>
		            		<li>
	            			<?php echo CHtml::link('Data Satuan',array('/satuan/index')); ?>
		            		</li>
		            		<li>
	            			<?php echo CHtml::link('Data Sparepart',array('/sparepart/index')); ?>
		            		</li>
		            		<li>
	            			<?php echo CHtml::link('Data Kendaraan',array('/kendaraan/index')); ?>
		            		</li>
		            		<li>
	            			<?php echo CHtml::link('Data Ongkos',array('/ongkos/index')); ?>
		            		</li>
		            		<li>
	            			<?php echo CHtml::link('Data Penerbit',array('/penerbit/index')); ?>
		            		</li>
						</ul>
		            </li>

		            <li>
		                <a href="javascript:;" data-toggle="collapse" data-target="#demo4"><i class="fa fa-fw fa-wrench"></i> Laporan<i class="fa fa-fw fa-caret-down"></i></a>
		                <ul id="demo4" class="collapse">
	                		<li><a href="#">Ban</a></li>
						</ul>
		            </li>

		        </ul>
		    </div>
		    <!-- /.navbar-collapse -->
		</nav>
		

		<div id="page-wrapper">
			<div class="container-fluid">

			<!-- <section class="content"> -->
				<?php if(isset($this->breadcrumbs)):?>
					<?php $this->widget('zii.widgets.CBreadcrumbs', array(
						'links'=>$this->breadcrumbs,
					)); ?><!-- breadcrumbs -->
				<?php endif?>

				<div class="warper container-fluid">
					<?php echo $content; ?>

					<div class="clear"></div>

					<div id="footer">
						Copyright &copy; <?php echo date('Y'); ?> by SITRUK APP.<br/>
						All Rights Reserved.<br/>
						<?php echo Yii::powered(); ?>
					</div><!-- footer -->

				</div>

			<!-- </section> -->
				
			</div>
		</div>

	</div>
	<!-- </aside> -->

		


	
</div><!-- page -->

</body>
</html>
