<?php $role = $this->session->userdata('role')?>
<!DOCTYPE HTML>
<html lang="id">
<head>
  <meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title><?=TITLE?></title>
  <link rel="icon" href="<?=base_url('assets/logo.png')?>">
	<link rel="stylesheet" href="<?=base_url('vendors/font-awesome/css/font-awesome.min.css')?>">
	<link rel="stylesheet" href="<?=base_url('vendors/coreui/css/style.min.css')?>">
	<link rel="stylesheet" href="<?=base_url('vendors/coreui/icons/css/coreui-icons.min.css')?>">
	<link rel="stylesheet" href="<?=base_url('assets/style.css')?>">
	<script src="<?=base_url('vendors/jquery/jquery.min.js')?>"></script>
	<script src="<?=base_url('vendors/bootstrap/bootstrap.min.js')?>"></script>
	<script src="<?=base_url('vendors/coreui/js/coreui.min.js')?>"></script>
</head>

<body class="app header-fixed sidebar-fixed aside-menu-fixed">
<header class="app-header navbar">
  <a class="navbar-brand" href="<?=base_url()?>">
    <img class="navbar-brand-full" src="<?=base_url('assets/logo.png')?>" height="30" alt="Logo">
    <img class="navbar-brand-minimized" src="<?=base_url('assets/logo.png')?>" height="30" alt="Logo">
  </a>
  <?php if ($role): ?>
  <ul class="nav navbar-nav d-md-down-none ml-auto">
    <li class="nav-item px-3">
      <a class="nav-link" href="<?=base_url($role)?>">Dashboard</a>
    </li>
    <li class="nav-item px-3">
      <a class="nav-link" href="<?=base_url('logout')?>">Logout</a>
    </li>
  </ul>
  <?php else : ?>
  <ul class="nav navbar-nav d-md-down-none ml-auto">
    <li class="nav-item px-3">
      <a class="nav-link" href="<?=base_url('login')?>">Login</a>
    </li>
  </ul>
  <?php endif?>
</header>

<div class="app-body">
  <?php if ($role) $this->load->view($role."/sidebar")?>
  <main class="main py-4">
    <div class="container-fluid">
      <div class="animated fadeIn">