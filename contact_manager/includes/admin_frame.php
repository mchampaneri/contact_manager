<?php
  
    include_once '..\functions\keep-open.php';

?>



<!DOCTYPE html>
<!--
This is a starter template page. Use this page to start your new project from
scratch. This page gets rid of all links and provides the needed markup only.
-->
<html>
  <head>
    <meta charset="UTF-8">
    <title>CONTACT MANAGER | BOARD</title>
    <!-- Tell the browser to be responsive to screen width -->
    <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
    <!-- Bootstrap 3.3.4 -->
    <link href="http://localhost/contact_manager/css/bootstrap.min.css" rel="stylesheet" type="text/css" />
    <!-- Font Awesome Icons -->
    <link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.3.0/css/font-awesome.min.css" rel="stylesheet" type="text/css" />
    <!-- Ionicons -->
    <link href="https://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css" rel="stylesheet" type="text/css" />
    <!-- Theme style -->
    
    <!-- AdminLTE Skins. We have chosen the skin-blue for this starter
          page. However, you can choose any other skin. Make sure you
          apply the skin class to the body tag so the changes take effect.
    -->
    <link href="http://localhost/contact_manager/css/skin-blue.min.css" rel="stylesheet" type="text/css" />

    <link href="http://localhost/contact_manager/css/admin.css" rel="stylesheet" type="text/css" />

     <link href="http://localhost/contact_manager/css/bootstrap-responsive.css" rel="stylesheet" type="text/css" />


    <link href="http://localhost/contact_manager/plugins/datepicker/datepicker3.css" rel="stylesheet" type="text/css" />
    <!-- Daterange picker -->
    <link href="http://localhost/contact_manager/plugins/daterangepicker/daterangepicker-bs3.css" rel="stylesheet" type="text/css" />
  
    <link href="http://localhost/contact_manager/plugins/plugins/select2/select2.min.css" rel="stylesheet" type="text/css" />
   
    <link href="http://localhost/contact_manager/plugins/plugins/bootstrap-datepicker-1.4.0-dist/css/select2.min.css" rel="stylesheet" type="text/css" />

    <link href="http://localhost/contact_manager/css/AdminLTE.min.css" rel="stylesheet" type="text/css" />
    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
        <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
  </head>
  <!--
  BODY TAG OPTIONS:
  =================
  Apply one or more of the following classes to get the
  desired effect
  |---------------------------------------------------------|
  | SKINS         | skin-blue                               |
  |               | skin-black                              |
  |               | skin-purple                             |
  |               | skin-yellow                             |
  |               | skin-red                                |
  |               | skin-green                              |
  |---------------------------------------------------------|
  |LAYOUT OPTIONS | fixed                                   |
  |               | layout-boxed                            |
  |               | layout-top-nav                          |
  |               | sidebar-collapse                        |
  |               | sidebar-mini                            |
  |---------------------------------------------------------|
  -->
  <body class="skin-blue sidebar-mini">
    <div class="wrapper">

      <!-- Main Header -->
      <header class="main-header">

        <!-- Logo -->
        <a href="index2.html" class="logo">
          <!-- mini logo for sidebar mini 50x50 pixels -->
          <span class="logo-mini"><b>c</b></span>
          <!-- logo for regular state and mobile devices -->
          <span class="logo-lg"><b>CONTACTS</b></span>
        </a>

        <!-- Header Navbar -->
        <nav class="navbar navbar-static-top" role="navigation">
          <!-- Sidebar toggle button-->
            <div class="navbar-custom-menu">
            <ul class="nav navbar-nav">
              <li class="dropdown user user-menu">
                <!-- Menu Toggle Button -->
                <a href="#" class="dropdown-toggle" data-toggle="dropdown">
                  <!-- The user image in the navbar-->
                  <img src="#" class="user-image" alt="User Image">
                  <!-- hidden-xs hides the username on small devices so only the image appears. -->
                  <span class="hidden-xs">MANISH CHAMPANERI</span>
                </a>
                <ul class="dropdown-menu">
                  <li class="user-footer">
                    <div class="pull-right">
                      <a href="http://localhost/contact_manager/functions/logout.php" class="btn btn-default btn-flat">Sign out</a>
                    </div>
                  </li>
                </ul>
              </li>
              <!-- Control Sidebar Toggle Button -->
             
            </ul>
          </div>
        </nav>
      </header>
      <!-- Left side column. contains the logo and sidebar -->
      <aside class="main-sidebar">

        <!-- sidebar: style can be found in sidebar.less -->
        <section class="sidebar">
  

          <!-- Sidebar Menu -->
          <ul class="sidebar-menu">
            <li class="header">BOOK-OPTIONS</li>
            <!-- Optionally, you can add icons to the links -->
            <li id="dashboard" class="<?php echo is_active('dashboard')  ?>" ><a href="http://localhost/contact_manager/dashboard/index.php"><i class="fa fa-link"></i> <span>DASHBOARD</span></a></li>
       <!-- <li><a href="http://localhost/blog/admin/category/catagory.php"><i class="fa fa-link"></i> <span>CATEGORIES</span></a></li> -->
            <li class="treeview <?php echo is_active('contact'); ?>" id="contacts">
              <a href="#"><i class="fa fa-link"></i> <span>CONTACTS</span> <i class="fa fa-angle-left pull-right"></i></a>
              <ul class="treeview-menu">
                <li id="contacts" class="<?php echo is_sub_active('all_contacts')  ?>"><a href="http://localhost/contact_manager/contacts/index.php">List all Contects</a></li>
                <li id="contacts" class="<?php echo is_sub_active('new_contact') ?>"><a href="http://localhost/contact_manager/contacts/new_contact.php">Add new Contact</a></li>
              </ul>
            </li>
            <li class="treeview <?php echo is_active('project'); ?>" id="projects">
              <a href="#"><i class="fa fa-link"></i> <span>PROJECTS</span> <i class="fa fa-angle-left pull-right"></i></a>
              <ul class="treeview-menu">
                <li id="projects" class="<?php echo is_sub_active('all_projects')  ?>"><a href="http://localhost/contact_manager/projects/index.php">List all Projects</a></li>
                <li id="projects" class="<?php echo is_sub_active('new_project')  ?>"><a href="http://localhost/contact_manager/projects/new_project.php">Add new Project</a></li>
              </ul>
            </li>
          </ul><!-- /.sidebar-menu -->
        </section>
        <!-- /.sidebar -->
      </aside>

      <!-- Content Wrapper. Contains page content -->
      <div class="content-wrapper">
        <!-- Content Header (Page header) -->
       
          <!-- Your Page Content Here -->

     