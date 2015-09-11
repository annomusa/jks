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
	<link rel="stylesheet" type="text/css" href="<?php echo Yii::app()->request->baseUrl; ?>/theme/css/bootstrap/bootstrap.css"> 

	<link rel="stylesheet" type="text/css" href="<?php echo Yii::app()->request->baseUrl; ?>/theme/css/plugins/calendar/calendar.css"> 

	<link rel="stylesheet" type="text/css" href="<?php echo Yii::app()->request->baseUrl; ?>/theme/css/app/app.v1.css"> 
	<link href='http://fonts.googleapis.com/css?family=Raleway:400,500,600,700,300' rel='stylesheet' type='text/css'>

	<title><?php echo CHtml::encode($this->pageTitle); ?></title>
</head>

<body>

<div >

	<!-- header -->

	<aside class="left-panel">
    	<div class="user text-center">
			<div><?php echo CHtml::encode(Yii::app()->name); ?>
			</div>
			
	    	<img src="<?php echo Yii::app()->request->baseUrl; ?>/theme/images/avtar/user.png" class="img-circle" alt="...">
	    	<h4 class="user-name">Pengguna</h4>
	    	<div class="dropdown user-login">
		        <button class="btn btn-xs dropdown-toggle btn-rounded" type="button" data-toggle="dropdown" aria-expanded="true">
		            <i class="fa fa-circle status-icon available"></i> On Line <i class="fa fa-angle-down"></i>
		        </button>
		        <ul class="dropdown-menu" role="menu" aria-labelledby="dropdownMenu1">
			        <li role="presentation"><a role="menuitem" href="#"><i class="fa fa-circle status-icon signout"></i> Keluar</a></li>
		        </ul>
			</div>	 
    	</div>

	    <nav class="navigation">
	    	<ul class="list-unstyled">
	    		<li class="has-submenu"><a href="#"><i class="glyphicon glyphicon-briefcase"></i> <span class="nav-label">Keuangan</span></a>
	            	<ul class="list-unstyled">
	            		<li>
	            			<?php echo CHtml::link('Buat PO Baru',array('/perjalanan/create')); ?>
	            		</li>
	            		<li>
	            			<?php echo CHtml::link('Rekap PO',array('//perjalanan/admin')); ?>
	            		</li>
					</ul>
				</li>

				<li class="has-submenu"><a href="#"><i class="glyphicon glyphicon-copy"></i> <span class="nav-label">Pengadaan</span></a>
	            	<ul class="list-unstyled">
	                	<li><a href="#">Ban</a></li>
					</ul>
				</li>

				<li class="has-submenu"><a href="#"><i class="glyphicon glyphicon-paste"></i> <span class="nav-label">Pengeluaran</span></a>
	            	<ul class="list-unstyled">
	                	<li><a href="#">Ban</a></li>
					</ul>
				</li>

				<li class="has-submenu"><a href="#"><i class="glyphicon glyphicon-list-alt"></i> <span class="nav-label">Laporan</span></a>
	            	<ul class="list-unstyled">
	                	<li><a href="#">Ban</a></li>
					</ul>
				</li>
	        </ul>

    	</nav>  
	</aside>

	<section class="content">
		<?php if(isset($this->breadcrumbs)):?>
			<?php $this->widget('zii.widgets.CBreadcrumbs', array(
				'links'=>$this->breadcrumbs,
			)); ?><!-- breadcrumbs -->
		<?php endif?>

		<?php echo $content; ?>

		<div class="clear"></div>

		<div id="footer">
			Copyright &copy; <?php echo date('Y'); ?> by APP PLN Surabaya.<br/>
			All Rights Reserved.<br/>
			<?php echo Yii::powered(); ?>
		</div><!-- footer -->

	</section>

	<!-- JQuery v1.9.1 -->
	<script src="<?php echo Yii::app()->request->baseUrl; ?>/theme/js/jquery/jquery-1.9.1.min.js" type="text/javascript"></script>
    <script src="<?php echo Yii::app()->request->baseUrl; ?>/theme/js/plugins/underscore/underscore-min.js"></script>
    <!-- Bootstrap -->
	<script src="<?php echo Yii::app()->request->baseUrl; ?>/theme/js/bootstrap/bootstrap.min.js"></script>
	<!-- Custom JQuery -->
	<script src="<?php echo Yii::app()->request->baseUrl; ?>/theme/js/app/custom.js" type="text/javascript"></script>

	<!-- NanoScroll -->
    <script src="<?php echo Yii::app()->request->baseUrl; ?>/theme/js/plugins/nicescroll/jquery.nicescroll.min.js"></script>

</div><!-- page -->

</body>
</html>
