<!DOCTYPE html>
<html lang="es">
<head>
<title>INMOBI_ITLA</title>         
<link rel="stylesheet" href="<?php echo base_url('css/bootstrap.min.css'); ?>"><!-- bootstrap-CSS -->
<link rel="stylesheet" href="<?php echo base_url('css/bootstrap-select.css'); ?>"><!-- bootstrap-select-CSS -->
<link rel="stylesheet" href="<?php echo base_url('css/style.css'); ?>"  type="text/css" media="all" /><!-- style.css -->
<link rel="stylesheet" href="<?php echo base_url('css/flexslider.css');?>" media="screen" />
<link rel="stylesheet" type="text/css" href="<?php echo base_url('css/jquery-ui1.css'); ?>">
<link rel="stylesheet" href="<?php echo base_url('css/font-awesome.min.css') ;?>" /><!-- fontawesome-CSS -->
<link rel="stylesheet" href="<?php echo base_url('css/menu_sideslide.css'); ?>" type="text/css" media="all"><!-- Navigation-CSS -->
<!-- meta tags -->
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="keywords" content="Resale Responsive web template, Bootstrap Web Templates, Flat Web Templates, Android Compatible web template, 
Smartphone Compatible web template, free webdesigns for Nokia, Samsung, LG, Sony Ericsson, Motorola web design" />
<script type="application/x-javascript"> addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false); function hideURLbar(){ window.scrollTo(0,1); } </script>
<!-- //meta tags -->
<!--fonts-->
<link href='//fonts.googleapis.com/css?family=Ubuntu+Condensed' rel='stylesheet' type='text/css'>
<link href='//fonts.googleapis.com/css?family=Open+Sans:400,300,300italic,400italic,600,600italic,700,700italic,800,800italic' rel='stylesheet' type='text/css'>
<!--//fonts-->	
<!-- js -->
<script type="text/javascript" src="<?php echo base_url('js/jquery.min.js'); ?>"></script>
<!-- js -->
<!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
<script src="<?php echo base_url('js/bootstrap.js'); ?>"></script>
<script src="<?php echo base_url('js/bootstrap-select.js'); ?>"></script>
<script>
  $(document).ready(function () {
    var mySelect = $('#first-disabled2');

    $('#special').on('click', function () {
      mySelect.find('option:selected').prop('disabled', true);
      mySelect.selectpicker('refresh');
    });

    $('#special2').on('click', function () {
      mySelect.find('option:disabled').prop('disabled', false);
      mySelect.selectpicker('refresh');
    });

    $('#basic2').selectpicker({
      liveSearch: true,
      maxOptions: 1
    });
  });
</script>
<!-- language-select -->
<script type="text/javascript" src="<?php echo base_url('js/jquery.leanModal.min.js/'); ?>"></script>
<link href="<?php echo base_url('css/jquery.uls.css'); ?>" rel="stylesheet"/>
<link href="<?php echo base_url('css/jquery.uls.grid.css'); ?>" rel="stylesheet"/>
<link href="<?php echo base_url('css/jquery.uls.lcd.css'); ?>" rel="stylesheet"/>
<!-- Source -->
<script src="<?php echo base_url('js/jquery.uls.data.js'); ?>"></script>
<script src="<?php echo base_url('js/jquery.uls.data.utils.js'); ?>"></script>
<script src="<?php echo base_url('js/jquery.uls.lcd.js'); ?>"></script>
<script src="<?php echo base_url('js/jquery.uls.languagefilter.js'); ?>"></script>
<script src="<?php echo base_url('js/jquery.uls.regionfilter.js'); ?>"></script>
<script src="<?php echo base_url('js/jquery.uls.core.js'); ?>"></script>
<script type="text/javascript" src="<?php echo base_url('js/empleado.js');?>"></script>
<script type="text/javascript" src="<?php echo base_url('js/jquery.flexslider.js');?>"></script>

<!-- switcher-grid and list alignment -->
<script src=<?php echo base_url()?>"js/tabs.js"></script>	
<script type="text/javascript">
$(document).ready(function () {    
var elem=$('#container ul');      
	$('#viewcontrols a').on('click',function(e) {
		if ($(this).hasClass('gridview')) {
			elem.fadeOut(1000, function () {
				$('#container ul').removeClass('list').addClass('grid');
				$('#viewcontrols').removeClass('view-controls-list').addClass('view-controls-grid');
				$('#viewcontrols .gridview').addClass('active');
				$('#viewcontrols .listview').removeClass('active');
				elem.fadeIn(1000);
			});						
		}
		else if($(this).hasClass('listview')) {
			elem.fadeOut(1000, function () {
				$('#container ul').removeClass('grid').addClass('list');
				$('#viewcontrols').removeClass('view-controls-grid').addClass('view-controls-list');
				$('#viewcontrols .gridview').removeClass('active');
				$('#viewcontrols .listview').addClass('active');
				elem.fadeIn(1000);
			});									
		}
	});
});
</script>
<!-- //switcher-grid and list alignment -->
</head>
<body>
	<!-- Navigation -->
		<div class="agiletopbar">
			<div class="wthreenavigation">
				<div class="menu-wrap">
				<nav class="menu">
					
				</nav>
				<button class="close-button" id="close-button">Close Menu</button>
			</div>
			<button class="menu-button" id="open-button"> </button>
			</div>
			<div class="clearfix"></div>
		</div>
		<!-- //Navigation -->
	<!-- header -->
	<header>
		<div class="w3ls-header"><!--header-one--> 
			<div class="w3ls-header-right">
				<ul>

				    <li class="dropdown head-dpdn">
						<a href="<?php echo base_url('Site/aboutMe');?>"><i class="fa fa-users" aria-hidden="true"></i>Quienes Somos</a>
					</li>
					<li class="dropdown head-dpdn">
						<a href="<?php echo base_url('Site/privacy');?>"><i class="fa fa-exclamation-circle" aria-hidden="true"></i>Privacidad</a>
					</li>
					<li class="dropdown head-dpdn">
						<a href="<?php echo base_url('Site/contact');?>"><i class="fa fa-phone" aria-hidden="true"></i>Contactanos</a>
					</li>
					<li class="dropdown head-dpdn">
						<a href="<?php echo base_url('Site/help');?>"><i class="fa fa-question-circle" aria-hidden="true"></i> Ayuda</a>
					</li>
					<li class="dropdown head-dpdn">
						<a href="<?php echo base_url('Login/salir');?>">(Salir)</a>
					</li>

					<li class="dropdown head-dpdn">
						<div class="header-right">			
	<!-- Large modal -->
		
		</div>
					</li>
				</ul>
			</div>
			
			<div class="clearfix"> </div> 
		</div>
		<div class="container">
			<div class="agile-its-header">
				<div class="logo">
					<h1><a href="<?php echo base_url('Site')?>"><span>INMOBI_ITLA</span></a></h1>
				</div>

                <div class="col col-md-offset-2">	
				<div class="agileits_search">
					<form action="#" method="post">
						<input name="Search" type="text" placeholder="" required=" ">
						<button type="submit" class="btn btn-default" aria-label="Left Align">
							<i class="fa fa-search" aria-hidden="true"> </i>
						</button>
					</form>
				
				<a class="post-w3layouts-ad" href="<?php echo base_url('Anuncio/publicarAnuncio');?>">Subir Anuncio</a>
				
				</div>	
				</div>
				<div class="clearfix"></div>
			</div>
		</div>
	</header>
	<!-- //header -->
	<!-- breadcrumbs -->
	<div class="w3layouts-breadcrumbs text-center">
		<div class="container">
			<span class="agile-breadcrumbs">
			<span>	<a class="post-w3layouts-ad" href="<?php echo base_url('Administrador/ListaAnuncio');?>">Lista Anuncio</a>
				<a class="post-w3layouts-ad" href="<?php echo base_url('Administrador/ListaUsuario');?>">Lista Usuario</a></span></span>
		</div>
	</div>