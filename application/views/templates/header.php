<!DOCTYPE html>
<html lang="en">
<head>
<title>Sistem Informasi Pelatihan Teknik B4T</title>
<meta charset="UTF-8" />
<meta name="viewport" content="width=device-width, initial-scale=1.0" />
<link rel="stylesheet" href="<?php echo base_url(); ?>assets/css/bootstrap.min.css" />
<link rel="stylesheet" href="<?php echo base_url(); ?>assets/css/bootstrap-responsive.min.css" />
<link rel="stylesheet" href="<?php echo base_url(); ?>assets/css/fullcalendar.css" />
<link rel="stylesheet" href="<?php echo base_url(); ?>assets/css/matrix-style.css" />
<link rel="stylesheet" href="<?php echo base_url(); ?>assets/css/matrix-media.css" />
<link href="<?php echo base_url(); ?>assets/font-awesome/css/font-awesome.css" rel="stylesheet" />
<link rel="stylesheet" href="<?php echo base_url(); ?>assets/css/bootstrap-wysihtml5.css" />

<link rel="stylesheet" href="<?php echo base_url(); ?>assets/css/jquery.gritter.css" />
<link href='http://fonts.googleapis.com/css?family=Open+Sans:400,700,800' rel='stylesheet' type='text/css'>
</head>


<body>

<!--Header-part-->
<div id="header">
  <h1><a href="<?php echo base_url(); ?>"><img src="../img/logo-silatek.png" alt="">Silatek Admin</a></h1>
</div>
<!--close-Header-part--> 


<!--top-Header-menu-->
<div id="user-nav" class="navbar navbar-inverse">
  <ul class="nav">
    <li  class="dropdown" id="profile-messages" ><a title="" href="#" data-toggle="dropdown" data-target="#profile-messages" class="dropdown-toggle"><i class="icon icon-user"></i>  <span class="text">Welcome User</span><b class="caret"></b></a>
      <ul class="dropdown-menu">
        <li><a href="#"><i class="icon-user"></i> My Profile</a></li>
        <li class="divider"></li>
        <li><a href="#"><i class="icon-check"></i> My Tasks</a></li>
        <li class="divider"></li>
        <li><a href="login.html"><i class="icon-key"></i> Log Out</a></li>
      </ul>
    </li>
    <li class="dropdown" id="menu-messages"><a href="#" data-toggle="dropdown" data-target="#menu-messages" class="dropdown-toggle"><i class="icon icon-envelope"></i> <span class="text">Messages</span> <span class="label label-important">5</span> <b class="caret"></b></a>
      <ul class="dropdown-menu">
        <li><a class="sAdd" title="" href="#"><i class="icon-plus"></i> new message</a></li>
        <li class="divider"></li>
        <li><a class="sInbox" title="" href="#"><i class="icon-envelope"></i> inbox</a></li>
        <li class="divider"></li>
        <li><a class="sOutbox" title="" href="#"><i class="icon-arrow-up"></i> outbox</a></li>
        <li class="divider"></li>
        <li><a class="sTrash" title="" href="#"><i class="icon-trash"></i> trash</a></li>
      </ul>
    </li>
    <li class=""><a title="" href="#"><i class="icon icon-cog"></i> <span class="text">Settings</span></a></li>
    <li class=""><a title="" href="login.html"><i class="icon icon-share-alt"></i> <span class="text">Logout</span></a></li>
  </ul>
</div>
<!--close-top-Header-menu-->
<!--start-top-serch-->
<div id="search">
  <input type="text" placeholder="Search here..."/>
  <button type="submit" class="tip-bottom" title="Search"><i class="icon-search icon-white"></i></button>
</div>
<!--close-top-serch-->
<!--sidebar-menu-->
<div id="sidebar"><a href="#" class="visible-phone"><i class="icon icon-home"></i> Dashboard</a>
  <ul>
    <li class="active"><a href="index.html"><i class="icon icon-home"></i> <span>Dashboard</span></a> </li>
    <li> <a href="<?php echo base_url('index.php/Instruktur'); ?>"><i class="icon icon-group"></i> <span>Daftar Instruktur Pelatihan</span></a> </li>
    <li> <a href="<?php echo base_url('index.php/Dashboard/jadwal'); ?>"><i class="icon icon-calendar"></i> <span>Jadwal Instruktur</span></a> </li>
    <li><a href="<?php echo base_url('index.php/Silabus'); ?>"><i class="icon icon-file"></i> <span>Daftar Silabus</span></a></li>
    <li><a href="<?php echo base_url('index.php/Dashboard/AllPelatihan'); ?>"><i class="icon icon-tasks"></i> <span>Semua Pelatihan</span></a></li>
    
  </ul>
</div>
<!--sidebar-menu-->