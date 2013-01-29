<!-- BEGIN BODY -->
<body class="fixed-top">
	<!-- BEGIN HEADER -->
	<div id="header" class="navbar navbar-inverse navbar-fixed-top">
		<!-- BEGIN TOP NAVIGATION BAR -->
		<div class="navbar-inner">
			<div class="container-fluid">
				<!-- BEGIN LOGO -->
				<a class="brand" href="<?php echo base_url('index.php/soci/') ?>">
					<img src="<?php echo base_url('assets/img/logo.png') ?>"  alt="Conquer"/>
				</a>
				<!-- END LOGO -->
				<!-- BEGIN RESPONSIVE MENU TOGGLER -->
				<a class="btn btn-navbar collapsed" id="main_menu_trigger" data-toggle="collapse" data-target=".nav-collapse">
				<span class="icon-bar"></span>
				<span class="icon-bar"></span>
				<span class="icon-bar"></span>
				<span class="arrow"></span>
				</a>          
				<!-- END RESPONSIVE MENU TOGGLER -->				
					<!-- BEGIN TOP NAVIGATION MENU -->					
					<ul class="nav pull-right" id="top_menu">
						<li class="divider-vertical hidden-phone hidden-tablet"></li>
						<li><a href="login.html">Log Out</a></li>
					</ul>
					<!-- END TOP NAVIGATION MENU -->	
				</div>
			</div>
		</div>
		<!-- END TOP NAVIGATION BAR -->
	</div>
	<!-- END HEADER -->
	
	

	<!-- BEGIN CONTAINER -->
	<div id="container" class="row-fluid">
		<!-- BEGIN SIDEBAR -->
		<div id="sidebar" class="nav-collapse collapse">
			<!-- BEGIN RESPONSIVE QUICK SEARCH FORM -->
			<div class="navbar-inverse">
				<form class="navbar-search visible-phone">
					<input type="text" class="search-query" placeholder="Search" />
				</form>
			</div>
			<!-- END RESPONSIVE QUICK SEARCH FORM -->
			<!-- BEGIN SIDEBAR MENU -->
			<ul>
				<li><a href="<?php echo base_url('index.php/dashboard'); ?>"><i class="icon-home"></i> Dashboard</a></li>
				<li class=""><a class="" href="<?php echo base_url('index.php/soci'); ?>"><i class="icon-list"></i> Lista Soci</a></li>
				<li><a class="" href="<?php echo base_url('index.php/soci/create'); ?>"><i class="icon-plus"></i> Nuovo Socio</a></li>
<!-- 				<li><a class="" href="<?php echo base_url('index.php/abbonamenti/create'); ?>"><i class="icon-plus"></i> Nuovo Abboamento</a></li> -->

				<li><a class="" href="http://www.verticalpark.it" target="_blank"><i class="icon-circle-arrow-right"></i> www.verticalpark.it</a></li>

			</ul>
		</div>
		<!-- END SIDEBAR -->
		
		
<!-- BEGIN PAGE -->
		<div id="body">
			<!-- BEGIN PAGE CONTAINER-->			
			<div class="container-fluid">
				<!-- BEGIN PAGE HEADER-->
				<div class="row-fluid">
					<div class="span12">
			<!-- BEGIN PAGE TITLE & BREADCRUMB-->
						<p>
<!--
                  <ul class="breadcrumb">
                     <li>
                        <?php echo $title ?>
                     </li>
                  </ul>
-->
                  <!-- END PAGE TITLE & BREADCRUMB-->
               </div>
            </div>
            <!-- END PAGE HEADER-->		
		