<?php /* @var $this Controller */ ?>
<!DOCTYPE html>
<html>
<head>
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
	<meta name="language" content="en">

	<!-- blueprint CSS framework -->
	<link rel="stylesheet" type="text/css" href="<?php echo Yii::app()->request->baseUrl; ?>/css/screen.css" media="screen, projection">
	<link rel="stylesheet" type="text/css" href="<?php echo Yii::app()->request->baseUrl; ?>/css/print.css" media="print">
	<link rel="stylesheet" type="text/css" href="<?php echo Yii::app()->request->baseUrl; ?>/css/main.css">
	<link rel="stylesheet" type="text/css" href="<?php echo Yii::app()->request->baseUrl; ?>/css/form.css">

	<!-- Bootstrap Core CSS -->
    <link href="<?php echo Yii::app()->request->baseUrl; ?>/theme/theme3/bower_components/bootstrap/dist/css/bootstrap.min.css" rel="stylesheet">

    <!-- MetisMenu CSS -->
    <link href="<?php echo Yii::app()->request->baseUrl; ?>/theme/theme3/bower_components/metisMenu/dist/metisMenu.min.css" rel="stylesheet">

    <!-- Timeline CSS -->
    <link href="<?php echo Yii::app()->request->baseUrl; ?>/theme/theme3/dist/css/timeline.css" rel="stylesheet">

    <!-- Custom CSS -->
    <link href="<?php echo Yii::app()->request->baseUrl; ?>/theme/theme3/dist/css/sb-admin-2.css" rel="stylesheet">

    <!-- Custom Fonts -->
    <link href="<?php echo Yii::app()->request->baseUrl; ?>/theme/theme3/bower_components/font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css">

    <!-- jQuery -->
    <script src="<?php echo Yii::app()->request->baseUrl; ?>/theme/theme3/bower_components/jquery/dist/jquery.min.js"></script>

    <!-- Bootstrap Core JavaScript -->
    <script src="<?php echo Yii::app()->request->baseUrl; ?>/theme/theme3/bower_components/bootstrap/dist/js/bootstrap.min.js"></script>

    <!-- Metis Menu Plugin JavaScript -->
    <script src="<?php echo Yii::app()->request->baseUrl; ?>/theme/theme3/bower_components/metisMenu/dist/metisMenu.min.js"></script>

    <!-- Custom Theme JavaScript -->
    <script src="<?php echo Yii::app()->request->baseUrl; ?>/theme/theme3/dist/js/sb-admin-2.js"></script>

	<title><?php echo CHtml::encode($this->pageTitle); ?></title>
</head>

<body>

<div >

	<div id="wrapper">
		<nav class="navbar navbar-default navbar-static-top" role="navigation" style="margin-bottom: 0">
            <div class="navbar-header">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <a class="navbar-brand" href="index.php?r=site/index">SITRUK</a>
            </div>
            <!-- /.navbar-header -->

            <ul class="nav navbar-top-links navbar-right">
                <li class="dropdown">
		            <a href="#" class="dropdown-toggle" data-toggle="dropdown"><i class="fa fa-user"></i> <?php echo Yii::app()->user->name; ?> <b class="caret"></b></a>
		            <ul class="dropdown-menu">
		                <li>
		                    <a href="index.php?r=/site/logout"><i class="fa fa-fw fa-power-off"></i> Keluar</a>
		                </li>
		            </ul>
		        </li>
                <!-- /.dropdown -->
            </ul>
            <!-- /.navbar-top-links -->

            <div class="navbar-default sidebar" role="navigation">
                <div class="sidebar-nav navbar-collapse">
                    <ul class="nav" id="side-menu">
                        <li>
                            <a href="index.php?r=/site/index"><i class="glyphicon glyphicon-home"></i>   Beranda</a>
                        </li>
                        <li>
                            <a href="#"><i class="glyphicon glyphicon-briefcase"></i>   Keuangan<span class="fa arrow"></span></a>
                            <ul class="nav nav-second-level">
                                <li>
                                <?php echo CHtml::link('Buat PO Baru',array('/perjalanan/create')); ?>
                                </li>
                                <li>
                                <?php echo CHtml::link('Rekap PO',array('/perjalanan/admin')); ?>
                                </li>
                            </ul>
                            <!-- /.nav-second-level -->
                        </li>
                        <li>
                        	<a href="#"><i class="glyphicon glyphicon-copy"></i>    Pengadaan<span class="fa arrow"></span></a>
                            <ul class="nav nav-second-level">
			                    <li>
		            			<?php echo CHtml::link('Pengadaan Spare Part',array('/pengadaan/create')); ?>
		            			</li>
			                    <li>
		            			<?php echo CHtml::link('Rekap Pengadaan Spare Part',array('/pengadaan/admin')); ?>
	            			</li>
		                	</ul>
		            	</li>
                        <li>
                        	<a href="#"><i class="glyphicon glyphicon-paste"></i>   Pemeliharaan<span class="fa arrow"></span></a>
                            <ul class="nav nav-second-level">
			                    <li>
		            			<?php echo CHtml::link('Buat perbaikan baru',array('/perbaikan/create')); ?>
		            			</li>
			                    <li>
		            			<?php echo CHtml::link('Rekap perbaikan',array('/perbaikan/admin')); ?>
		            			</li>
		                	</ul>
		            	</li>
                        <li>
                        	<a href="#"><i class="glyphicon glyphicon-list-alt"></i>   Data<span class="fa arrow"></span></a>
                            <ul class="nav nav-second-level">
			                    <li>
		            			<?php echo CHtml::link('Data Karyawan',array('/karyawan/index')); ?>
		            			</li>
		            			<li>
		            			<?php echo CHtml::link('Data Administrator',array('/admin/index')); ?>
			            		</li>
			            		<li>
		            			<?php echo CHtml::link('Data Ban',array('/ban/admin')); ?>
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
			            	<a href="#"><i class="glyphicon glyphicon-file"></i>   Laporan<span class="fa arrow"></span></a>
                            <ul class="nav nav-second-level">
		                		<li><a href="#">Ban</a></li>
							</ul>
			            </li>
                        
                    </ul>
                </div>
                <!-- /.sidebar-collapse -->
            </div>
            <!-- /.navbar-static-side -->
        </nav>
		

		<div id="page-wrapper">
			<div class="container-fluid">
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
			</div>
		</div>

	</div>

</div><!-- page -->

</body>
</html>
