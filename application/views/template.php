<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <meta name="description" content="">
    <meta name="author" content="">
    <meta name="site-url" content="<?php echo site_url() ?>">
    <meta name="base-url" content="<?php echo base_url() ?>">
    <link rel="icon" href="<?php echo base_url() ?>assets/images/logo.png">

    <title>Dev Template</title>

    <!-- Bootstrap core CSS -->
    <link href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" rel="stylesheet">
    <!-- Bootstrap Datetimepicker -->
    <link href="<?php echo base_url() ?>assets/js/libs/bower_components/eonasdan-bootstrap-datetimepicker/build/css/bootstrap-datetimepicker.min.css" rel="stylesheet"  />
    <!-- jQuery Select2 -->
    <link href="<?php echo base_url() ?>assets/js/libs/bower_components/select2/dist/css/select2.min.css" rel="stylesheet" />
    <!-- jQuery Toast -->
    <link href="<?php echo base_url() ?>assets/js/libs/bower_components/jquery-toast-plugin/src/jquery.toast.css" rel="stylesheet" />
    <!-- Font Awesome -->
    <link href="https://use.fontawesome.com/releases/v5.0.8/css/all.css" rel="stylesheet">
    <!-- Datatables -->
    <link href="https://cdn.datatables.net/1.10.16/css/dataTables.bootstrap.min.css" rel="stylesheet">
    <!-- Summernote -->
    <link href="http://cdnjs.cloudflare.com/ajax/libs/summernote/0.8.9/summernote.css" rel="stylesheet">
    <!-- Custom styles for this template -->
    <link href="<?php echo base_url() ?>assets/css/main.css" rel="stylesheet">
    
    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
  <![endif]-->

</head>

<body>
    <div class="sidebar hidden-xs">
    	<div class="sidebar-header">
    		<img src="<?php echo base_url() ?>assets/images/logo-ugm.png" height="30px" alt="Logo">
    		<h3 class="sidebar-title"><b>Dev</b>Template</h3>
    	</div>
    	<div class="sidebar-menu-wrap">
    		<ul class="sidebar-menu">
    			<li>
    				<a href="<?php echo site_url() ?>/dashboard" class="<?= set_active('dashboard,') ?>"><i class="fa fa-tachometer-alt"></i> Dashboard</a>
    			</li>
                <li>
                    <a href="#" class="<?= set_active('component') ?>"><i class="fa fa-laptop"></i> Components <span class="caret pull-right"></span></a>
                    <ul>
                        <li><a href="<?php echo site_url() ?>/component/forms"> <i class="far fa-circle"></i> Forms</a></li>
                        <li><a href="<?php echo site_url() ?>/component/tables"><i class="far fa-circle"></i> Tables</a></li>
                    </ul>
                </li>
                <li>
                    <a href="<?php echo site_url() ?>/user" class="<?= set_active('user') ?>"><i class="fa fa-sign-out-alt"></i> Logout</a>
                </li>
            </ul>
        </div>
    </div>

    <div class="content-wrap">
    	<header>
    		<div class="container-fluid">
    			<div class="row">
                    <div class="col-md-6 col-sm-6 col-xs-6 align-left">
                        <div class="nav-toggle visible-xs" style="margin-right: 10px">
                            <i class="fa fa-align-justify fa-lg cursor-pointer btn-nav-toggle"></i>
                        </div>
                        <i class="fa fa-search fa-2x"></i>
                        <form action="<?php echo site_url() ?>/event/search" method="get">
                            <input class="search" type="search" name="q" placeholder="Search">
                        </form>
                    </div>
                    <div class="col-md-6 col-sm-6 col-xs-6 align-right">
                       <div class="dropdown">
                        <button class="btn-custom dropdown-toggle" type="button" data-toggle="dropdown">Hi, 
                            John Doe
                            <span class="caret"></span></button>
                            <ul class="dropdown-menu">
                                <li><a href="<?php echo site_url() ?>/auth/logout">Keluar</a></li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </header>

        <?php echo $_content; ?>

    </div>


    <!-- Bootstrap core JavaScript
        ================================================== -->
        <!-- Placed at the end of the document so the pages load faster -->
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>
        <!-- Bootstrap Datetimepicker -->
        <script type="text/javascript" src="<?php echo base_url() ?>assets/js/libs/bower_components/moment/min/moment.min.js"></script>
        <script type="text/javascript" src="<?php echo base_url() ?>assets/js/libs/bower_components/moment/locale/id.js"></script>
        <script type="text/javascript" src="<?php echo base_url() ?>assets/js/libs/bower_components/eonasdan-bootstrap-datetimepicker/build/js/bootstrap-datetimepicker.min.js"></script>
        <!-- jQuery Select2 -->
        <script type="text/javascript" src="<?php echo base_url() ?>assets/js/libs/bower_components/select2/dist/js/select2.min.js"></script>
        <!-- jQuery Toast -->
        <script type="text/javascript" src="<?php echo base_url() ?>assets/js/libs/bower_components/jquery-toast-plugin/src/jquery.toast.js"></script>
        <!-- Datatables -->
        <script src="https://cdn.datatables.net/1.10.16/js/jquery.dataTables.min.js"></script>
        <script src="https://cdn.datatables.net/1.10.16/js/dataTables.bootstrap.min.js"></script>
        <!-- Summernote -->
        <script src="http://cdnjs.cloudflare.com/ajax/libs/summernote/0.8.9/summernote.js"></script>
        <!-- Custom JS -->
        <script type="text/javascript" src="<?php echo base_url() ?>assets/js/main.js"></script>
        <!-- IE10 viewport hack for Surface/desktop Windows 8 bug -->
        <script src="http://getbootstrap.com/assets/js/ie10-viewport-bug-workaround.js"></script>
    </body>
    </html>
