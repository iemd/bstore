<!DOCTYPE html>
<?php $Loginid = $this->session->userdata('ID');?>
<?php $StoreID = $this->session->userdata('StoreID');?>
<?php //print_r($this->session); ?>
<?php if (!empty($Loginid)){ ?>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Brain Storming | Store</title>
    <meta name="viewport" content="width=device-width,initial-scale=1,user-scalable=no">
    <meta name="description" content="brain storming.">
    <link rel="apple-touch-icon" sizes="180x180" href="<?php echo base_url('assets/images/apple-touch-icon.png');?>">
    <link rel="icon" type="image/png" href="<?php echo base_url('assets/images/favicon-32x32.png'); ?>" sizes="32x32">
    <link rel="icon" type="image/png" href="<?php echo base_url('assets/images/favicon-16x16.png'); ?>" sizes="16x16">
    <link rel="manifest" href="<?php echo base_url('manifest.json');?>">
    <link rel="mask-icon" href="<?php echo base_url('assets/images/safari-pinned-tab.svg');?>" color="#0288d1">
    <meta name="theme-color" content="#ffffff">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Roboto:300,400,400italic,500,700">
    <link rel="stylesheet" href="<?php echo base_url('assets/css/vendor.min.css');?>">
    <link rel="stylesheet" href="<?php echo base_url('assets/css/elephant.min.css');?>">
    <link rel="stylesheet" href="<?php echo base_url('assets/css/application.min.css');?>">
    <link rel="stylesheet" href="<?php echo base_url('assets/css/compose.min.css');?>">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
  </head>
  <body class="layout layout-header-fixed">
    <div class="layout-header">
      <div class="navbar navbar-default">
        <div class="navbar-header">
          <a class="navbar-brand navbar-brand-center" href="<?php echo base_url('AdminPanel/Dasboard'); ?>">
            <img class="navbar-brand-logo" src="<?php echo base_url('assets/images/logo.png');?>" alt="Brain storming">

          </a>
          <button class="navbar-toggler visible-xs-block collapsed" type="button" data-toggle="collapse" data-target="#sidenav">
            <span class="sr-only">Toggle navigation</span>
            <span class="bars">
              <span class="bar-line bar-line-1 out"></span>
              <span class="bar-line bar-line-2 out"></span>
              <span class="bar-line bar-line-3 out"></span>
            </span>
            <span class="bars bars-x">
              <span class="bar-line bar-line-4"></span>
              <span class="bar-line bar-line-5"></span>
            </span>
          </button>
          <button class="navbar-toggler visible-xs-block collapsed" type="button" data-toggle="collapse" data-target="#navbar">
            <span class="sr-only">Toggle navigation</span>
            <span class="arrow-up"></span>
            <span class="ellipsis ellipsis-vertical">
               <img class="ellipsis-object" width="32" height="32" src="<?php echo base_url('assets/images/favicon-32x32.png'); ?>" alt="Brain Storming">
            </span>
          </button>
        </div>
        <div class="navbar-toggleable">
          <nav id="navbar" class="navbar-collapse collapse">
            <button class="sidenav-toggler hidden-xs" title="Collapse sidenav ( [ )" aria-expanded="true" type="button">
              <span class="sr-only">Toggle navigation</span>
              <span class="bars">
                <span class="bar-line bar-line-1 out"></span>
                <span class="bar-line bar-line-2 out"></span>
                <span class="bar-line bar-line-3 out"></span>
                <span class="bar-line bar-line-4 in"></span>
                <span class="bar-line bar-line-5 in"></span>
                <span class="bar-line bar-line-6 in"></span>
              </span>
            </button>
            <ul class="nav navbar-nav navbar-right">
              <li class="visible-xs-block">
                <h4 class="navbar-text text-center"></h4>
              </li>

              <li class="dropdown">
                <a class="dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-haspopup="true">
                  <span class="icon-with-child hidden-xs">
                    <span class="icon icon-envelope-o icon-lg"></span>
                    <span class="badge badge-danger badge-above right">8</span>
                  </span>
                  <span class="visible-xs-block">
                    <span class="icon icon-envelope icon-lg icon-fw"></span>
                    <span class="badge badge-danger pull-right">8</span>
                    Messages
                  </span>
                </a>
                <div class="dropdown-menu dropdown-menu-right dropdown-menu-lg">
                  <div class="dropdown-header">
                    <a class="dropdown-link" href="">New Message</a>
                    <h5 class="dropdown-heading">Recent messages</h5>
                  </div>
                  <div class="dropdown-body">

                  </div>
                  <div class="dropdown-footer">
                    <a class="dropdown-btn" href="#">See All</a>
                  </div>
                </div>
              </li>
              <li class="dropdown">
                <a class="dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-haspopup="true">
                  <span class="icon-with-child hidden-xs">
                    <span class="icon icon-bell-o icon-lg"></span>
                    <span class="badge badge-danger badge-above right">7</span>
                  </span>
                  <span class="visible-xs-block">
                    <span class="icon icon-bell icon-lg icon-fw"></span>
                    <span class="badge badge-danger pull-right">7</span>
                    Notifications
                  </span>
                </a>
                <div class="dropdown-menu dropdown-menu-right dropdown-menu-lg">
                  <div class="dropdown-header">
                    <a class="dropdown-link" href="#">Mark all as read</a>
                    <h5 class="dropdown-heading">Recent Notifications</h5>
                  </div>
                  <div class="dropdown-body">

                  </div>
                  <div class="dropdown-footer">
                    <a class="dropdown-btn" href="#">See All</a>
                  </div>
                </div>
              </li>
              <li class="dropdown hidden-xs">
                <button class="navbar-account-btn" data-toggle="dropdown" aria-haspopup="true">
                  <img class="rounded" width="36" height="36" src="<?php echo base_url('assets/images/admin.png');?>" alt=""> Welcome <?php echo $StoreID; ?>
                  <span class="caret"></span>
                </button>
                <ul class="dropdown-menu dropdown-menu-right">

                  <li class="divider"></li>

                  <li class="divider"></li>
                  <li><a href="">Contacts</a></li>
                  <li><a href="">Profile</a></li>
                  <li><a href="<?php echo base_url('AdminPanel/logOut'); ?>">Sign out</a></li>
                </ul>
              </li>
              <li class="visible-xs-block">
                <a href="">
                  <span class="icon icon-users icon-lg icon-fw"></span>
                  Contacts
                </a>
              </li>
              <li class="visible-xs-block">
                <a href="profile.html">
                  <span class="icon icon-user icon-lg icon-fw"></span>
                  Profile
                </a>
              </li>
              <li class="visible-xs-block">
                <a href="<?php echo base_url('AdminPanel/logOut'); ?>">
                  <span class="icon icon-power-off icon-lg icon-fw"></span>
                  Sign out
                </a>
              </li>
            </ul>
          </nav>
        </div>
      </div>
    </div>
      <!--<style>
          .sidenav-item span.sidenav-icon{
              color: #0288d1;
          }
      </style>-->
      <div class="layout-main">
      <div class="layout-sidebar">
        <div class="layout-sidebar-backdrop"></div>
        <div class="layout-sidebar-body">
          <div class="custom-scrollbar">
            <nav id="sidenav" class="sidenav-collapse collapse">
              <ul class="sidenav">
                <li class="sidenav-search hidden-md hidden-lg">
                  <form class="sidenav-form" action="">
                    <div class="form-group form-group-sm">
                      <div class="input-with-icon">
                        <input class="form-control" type="text" placeholder="Search…">
                        <span class="icon icon-search input-icon"></span>
                      </div>
                    </div>
                  </form>
                </li>
                <li class="sidenav-heading">Brain Storming | Store</li>

                <li class="sidenav-item has-subnav <?php if($this->uri->uri_string()=="AdminPanel/Dasboard"){echo "active";}?>">
                    <a href="<?php echo base_url('AdminPanel/Dasboard'); ?>" aria-haspopup="true">
                    <span class="sidenav-icon icon icon-home"></span>
                    <span class="sidenav-label">Dashboards</span>
                  </a>

                </li>

                <li class="sidenav-item has-subnav <?php echo store_ratingactive($this->uri->segment(1).'/'.$this->uri->segment(2)); ?>">
                    <a href="<?php echo base_url('Store/currentRating'); ?>" title="Current Rating Review">
                    <span class="sidenav-icon icon icon-star"></span>
                    <span class="sidenav-label">Current Rating Review</span>
                  </a>
                </li>

                <li class="sidenav-item has-subnav <?php echo store_historyactive($this->uri->segment(1).'/'.$this->uri->segment(2)); ?>">
                    <a href="<?php echo base_url('Store/ratingHistory'); ?>" title="Rating History">
                    <span class="sidenav-icon icon icon-history"></span>
                    <span class="sidenav-label">Rating History</span>
                  </a>
                </li>

                <li class="sidenav-item has-subnav <?php echo store_complainactive($this->uri->segment(1).'/'.$this->uri->segment(2)); ?>">
                    <a href="<?php echo base_url('Store/complainManagement'); ?>" title="Complain Management">
                    <span class="sidenav-icon icon icon-list"></span>
                    <span class="sidenav-label">Complain Management</span>
                  </a>
                </li>

                <li class="sidenav-item has-subnav <?php echo store_profileactive($this->uri->segment(1).'/'.$this->uri->segment(2)); ?>">
                    <a href="<?php echo base_url('Store/Profile'); ?>" title="Profile Management">
                    <span class="sidenav-icon icon icon-user"></span>
                    <span class="sidenav-label">Profile Management</span>
                  </a>
                </li>

                <li class="sidenav-item">
                    <a href="<?php echo base_url('AdminPanel/logOut'); ?>" title="LOGOUT">
                    <span class="sidenav-icon icon icon-sign-out"></span>
                    <span class="sidenav-label">Logout</span>
                  </a>
                </li>


              </ul>
            </nav>
          </div>
        </div>
      </div>
  <?php } ?>
