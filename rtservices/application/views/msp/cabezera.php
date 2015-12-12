<!doctype html>
<html class="no-js">
<head>
  <meta charset="UTF-8">
  <title><?php echo $titulo; ?> | RacketTennisServices</title>
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="//cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/3.3.1/css/bootstrap.min.css">
  <link rel="stylesheet" href="//cdnjs.cloudflare.com/ajax/libs/font-awesome/4.2.0/css/font-awesome.min.css">
  <link rel="stylesheet" href="assets/css/main.min.css">
  <link rel="stylesheet" href="//cdnjs.cloudflare.com/ajax/libs/metisMenu/1.1.3/metisMenu.min.css">
  <link rel="stylesheet" href="//cdnjs.cloudflare.com/ajax/libs/fullcalendar/2.2.5/fullcalendar.min.css">
  <script>
    less = {
      env: "development",
      relativeUrls: false,
      rootpath: "../assets/"
    };
  </script>
  <link rel="stylesheet" href="assets/css/style-switcher.css">
  <link rel="stylesheet/less" type="text/css" href="assets/less/theme.less">
  <script src="//cdnjs.cloudflare.com/ajax/libs/less.js/2.2.0/less.min.js"></script>
  <script src="//cdnjs.cloudflare.com/ajax/libs/modernizr/2.8.3/modernizr.min.js"></script>
</head>
<body class="  ">
  <div class="bg-dark dk" id="wrap">
    <div id="top">

      <!-- .navbar -->
      <nav class="navbar navbar-inverse navbar-static-top">
        <div class="container-fluid">

          <!-- Brand and toggle get grouped for better mobile display -->
          <header class="navbar-header">
            <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-ex1-collapse">
              <span class="sr-only">Toggle navigation</span> 
              <span class="icon-bar"></span> 
              <span class="icon-bar"></span> 
              <span class="icon-bar"></span> 
            </button>
            <a href="index.html" class="navbar-brand">
              <img src="assets/img/logo.png" alt="" style="padding: 5px">
            </a> 
          </header>
          <div class="topnav">
            <div class="btn-group">
              <a data-placement="bottom" data-original-title="Fullscreen" data-toggle="tooltip" class="btn btn-default btn-sm" id="toggleFullScreen">
                <i class="glyphicon glyphicon-fullscreen"></i>
              </a> 
            </div>
            <div class="btn-group">
              <a data-toggle="modal" data-original-title="Help" data-placement="bottom" class="btn btn-default btn-sm" href="#helpModal">
                <i class="fa fa-question"></i>
              </a> 
            </div>
            <div class="btn-group">
              <a href="login/cerrarSesion" data-toggle="tooltip" data-original-title="Logout" data-placement="bottom" class="btn btn-metis-1 btn-sm">
                <i class="fa fa-power-off"></i>
              </a> 
            </div>
            <div class="btn-group">
              <a data-placement="bottom" data-original-title="Show / Hide Left" data-toggle="tooltip" class="btn btn-primary btn-sm toggle-left" id="menu-toggle">
                <i class="fa fa-bars"></i>
              </a> 
            </div>
          </div>
        </div><!-- /.container-fluid -->
      </nav><!-- /.navbar -->
      <header class="head">
        <div class="main-bar">
          <h3>
            <i class="fa fa-dashboard"></i>&nbsp; Menu principal</h3>
          </div><!-- /.main-bar -->
        </header><!-- /.head -->
      </div><!-- /#top -->
      <div id="left">
        <div class="media user-media bg-dark dker">
          <div class="user-media-toggleHover">
            <span class="fa fa-user"></span> 
          </div>
          <div class="user-wrapper bg-dark">
            <a class="user-link" href="">
              <img class="media-object img-thumbnail user-img" alt="User Picture" src="assets/img/user.gif">
              <span class="label label-danger user-label"><?php echo $this->session->userdata('documento'); ?></span> 
            </a> 
            <div class="media-body">
              <h5 class="media-heading"><?php echo $this->session->userdata('nombreC'); ?></h5>
              <ul class="list-unstyled user-info">
                <li> <a href=""><?php echo $this->session->userdata('rol'); ?></a>  </li>
                <li>Nombre de usuario :
                  <br>
                  <small>
                    <i class="fa fa-user"></i>&nbsp;<?php echo $this->session->userdata('user'); ?></small> 
                  </li>
                </ul>
              </div>
            </div>
          </div>

          <!-- #menu -->
          <ul id="menu" class="bg-blue dker">
            <li class="nav-header">Menu</li>
            <li class="nav-divider"></li>
            <li class="active">
              <a href="dashboard.html">
                <i class="fa fa-dashboard"></i><span class="link-title">&nbsp;Dashboard</span> 
              </a> 
            </li>
            <li class="">
              <a href="javascript:;">
                <i class="fa fa-building "></i>
                <span class="link-title">Layouts</span> 
                <span class="fa arrow"></span> 
              </a> 
              <ul>
                <li>
                  <a href="boxed.html"><i class="fa fa-angle-right"></i>&nbsp; Boxed Layout </a> 
                </li>
                <li>
                  <a href="fixed-header-boxed.html"><i class="fa fa-angle-right"></i>&nbsp; Boxed Layout &amp; Fixed Header </a> 
                </li>
                <li>
                  <a href="fixed-header-fixed-mini-sidebar.html"><i class="fa fa-angle-right"></i>&nbsp; Fixed Header and Fixed Mini Menu </a> 
                </li>
                <li>
                  <a href="fixed-header-menu.html"><i class="fa fa-angle-right"></i>&nbsp; Fixed Header &amp; Menu </a> 
                </li>
                <li>
                  <a href="fixed-header-mini-sidebar.html"><i class="fa fa-angle-right"></i>&nbsp; Fixed Header &amp; Mini Menu </a> 
                </li>
                <li>
                  <a href="fixed-header.html"><i class="fa fa-angle-right"></i>&nbsp; Fixed Header </a> 
                </li>
                <li>
                  <a href="fixed-menu-boxed.html"><i class="fa fa-angle-right"></i>&nbsp; Boxed Layout &amp; Fixed Menu </a> 
                </li>
                <li>
                  <a href="fixed-menu.html"><i class="fa fa-angle-right"></i>&nbsp; Fixed Menu </a> 
                </li>
                <li>
                  <a href="fixed-mini-sidebar.html"><i class="fa fa-angle-right"></i>&nbsp; Fixed &amp; Mini Menu </a> 
                </li>
                <li>
                  <a href="fxhmoxed.html"><i class="fa fa-angle-right"></i>&nbsp; Boxed and Fixed Header &amp; Nav </a> 
                </li>
                <li>
                  <a href="no-header-sidebar.html"><i class="fa fa-angle-right"></i>&nbsp; No Header &amp; Sidebars </a> 
                </li>
                <li>
                  <a href="no-header.html"><i class="fa fa-angle-right"></i>&nbsp; No Header </a> 
                </li>
                <li>
                  <a href="no-left-right-sidebar.html"><i class="fa fa-angle-right"></i>&nbsp; No Left &amp; Right Sidebar </a> 
                </li>
                <li>
                  <a href="no-left-sidebar-main-search.html"><i class="fa fa-angle-right"></i>&nbsp; No Left Sidebar &amp; Main Search </a> 
                </li>
                <li>
                  <a href="no-left-sidebar.html"><i class="fa fa-angle-right"></i>&nbsp; No Left Sidebar </a> 
                </li>
                <li>
                  <a href="no-main-search.html"><i class="fa fa-angle-right"></i>&nbsp; No Main Search </a> 
                </li>
                <li>
                  <a href="no-right-sidebar.html"><i class="fa fa-angle-right"></i>&nbsp; No Right Sidebar </a> 
                </li>
                <li>
                  <a href="sm.html"><i class="fa fa-angle-right"></i>&nbsp; Mini Sidebar </a> 
                </li>
              </ul>
            </li>
            <li class="">
              <a href="javascript:;">
                <i class="fa fa-tasks"></i>
                <span class="link-title">Components</span> 
                <span class="fa arrow"></span> 
              </a> 
              <ul>
                <li>
                  <a href="bgcolor.html"><i class="fa fa-angle-right"></i>&nbsp; Bg Color </a> 
                </li>
                <li>
                  <a href="bgimage.html"><i class="fa fa-angle-right"></i>&nbsp; Bg Image </a> 
                </li>
                <li>
                  <a href="button.html"><i class="fa fa-angle-right"></i>&nbsp; Buttons </a> 
                </li>
                <li>
                  <a href="icon.html"><i class="fa fa-angle-right"></i>&nbsp; Icon </a> 
                </li>
                <li>
                  <a href="pricing.html"><i class="fa fa-angle-right"></i>&nbsp; Pricing Table </a> 
                </li>
                <li>
                  <a href="progress.html"><i class="fa fa-angle-right"></i>&nbsp; Progress </a> 
                </li>
              </ul>
            </li>
            <li class="">
              <a href="javascript:;">
                <i class="fa fa-pencil"></i>
                <span class="link-title">
                  Forms
                </span> 
                <span class="fa arrow"></span> 
              </a> 
              <ul>
                <li>
                  <a href="form-general.html"><i class="fa fa-angle-right"></i>&nbsp; Form General </a> 
                </li>
                <li>
                  <a href="form-validation.html"><i class="fa fa-angle-right"></i>&nbsp; Form Validation </a> 
                </li>
                <li>
                  <a href="form-wizard.html"><i class="fa fa-angle-right"></i>&nbsp; Form Wizard </a> 
                </li>
                <li>
                  <a href="form-wysiwyg.html"><i class="fa fa-angle-right"></i>&nbsp; Form WYSIWYG </a> 
                </li>
              </ul>
            </li>
            <li>
              <a href="table.html">
                <i class="fa fa-table"></i>
                <span class="link-title">Tables</span> 
              </a> 
            </li>
            <li>
              <a href="file.html">
                <i class="fa fa-file"></i>
                <span class="link-title">
                  File Manager
                </span> 
              </a> 
            </li>
            <li>
              <a href="typography.html">
                <i class="fa fa-font"></i>
                <span class="link-title">
                  Typography
                </span>  </a> 
              </li>
              <li>
                <a href="maps.html">
                  <i class="fa fa-map-marker"></i><span class="link-title">
                  Maps
                </span> 
              </a> 
            </li>
            <li>
              <a href="chart.html">
                <i class="fa fa fa-bar-chart-o"></i>
                <span class="link-title">
                  Charts
                </span> 
              </a> 
            </li>
            <li>
              <a href="calendar.html">
                <i class="fa fa-calendar"></i>
                <span class="link-title">
                  Calendar
                </span> 
              </a> 
            </li>
            <li>
              <a href="javascript:;">
                <i class="fa fa-exclamation-triangle"></i>
                <span class="link-title">Error Pages</span> 
                <span class="fa arrow"></span> 
              </a> 
              <ul>
                <li>
                  <a href="403.html"><i class="fa fa-angle-right"></i>&nbsp;403</a> 
                </li>
                <li>
                  <a href="404.html"><i class="fa fa-angle-right"></i>&nbsp;404</a> 
                </li>
                <li>
                  <a href="405.html"><i class="fa fa-angle-right"></i>&nbsp;405</a> 
                </li>
                <li>
                  <a href="500.html"><i class="fa fa-angle-right"></i>&nbsp;500</a> 
                </li>
                <li>
                  <a href="503.html"><i class="fa fa-angle-right"></i>&nbsp;503</a> 
                </li>
                <li>
                  <a href="offline.html"><i class="fa fa-angle-right"></i>&nbsp;offline</a> 
                </li>
                <li>
                  <a href="countdown.html"><i class="fa fa-angle-right"></i>&nbsp;Under Construction</a> 
                </li>
              </ul>
            </li>
            <li>
              <a href="grid.html">
                <i class="fa fa-columns"></i>
                <span class="link-title">
                  Grid
                </span> 
              </a> 
            </li>
            <li>
              <a href="blank.html">
                <i class="fa fa-square-o"></i>
                <span class="link-title">
                  Blank Page
                </span> 
              </a> 
            </li>
            <li class="nav-divider"></li>
            <li>
              <a href="login.html">
                <i class="fa fa-sign-in"></i>
                <span class="link-title">
                  Login Page
                </span> 
              </a> 
            </li>
          </ul><!-- /#menu -->
</div><!-- /#left -->