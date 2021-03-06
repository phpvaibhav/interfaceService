<!DOCTYPE html>
<html lang="en-us" id="extr-page">
  <head>
    <meta charset="utf-8">
    <title><?php echo SITE_NAME; ?>| <?php echo $title; ?></title>
    <meta name="description" content="">
    <meta name="author" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no">
     <?php
        $backend_assets =  base_url().'backend_assets/';
    ?>
    <!-- #CSS Links -->
    <!-- Basic Styles -->
    <link rel="stylesheet" type="text/css" media="screen" href="<?php echo $backend_assets; ?>css/bootstrap.min.css">
    <link rel="stylesheet" type="text/css" media="screen" href="<?php echo $backend_assets; ?>css/font-awesome.min.css">

    <!-- SmartAdmin Styles : Caution! DO NOT change the order -->
    <link rel="stylesheet" type="text/css" media="screen" href="<?php echo $backend_assets; ?>css/smartadmin-production-plugins.min.css">
    <link rel="stylesheet" type="text/css" media="screen" href="<?php echo $backend_assets; ?>css/smartadmin-production.min.css">
    <link rel="stylesheet" type="text/css" media="screen" href="<?php echo $backend_assets; ?>css/smartadmin-skins.min.css">

    <!-- SmartAdmin RTL Support -->
    <link rel="stylesheet" type="text/css" media="screen" href="<?php echo $backend_assets; ?>css/smartadmin-rtl.min.css"> 

    <!-- We recommend you use "your_style.css" to override SmartAdmin
         specific styles this will also ensure you retrain your customization with each SmartAdmin update.
    <link rel="stylesheet" type="text/css" media="screen" href="css/your_style.css"> -->

    <!-- Demo purpose only: goes with demo.js, you can delete this css when designing your own WebApp -->
    <link rel="stylesheet" type="text/css" media="screen" href="<?php echo $backend_assets; ?>css/demo.min.css">

    <!-- #FAVICONS -->
    <link rel="shortcut icon" href="<?php echo $backend_assets; ?>img/favicon/favicon.ico" type="image/x-icon">
    <link rel="icon" href="<?php echo $backend_assets; ?>img/favicon/favicon.ico" type="image/x-icon">

    <!-- #GOOGLE FONT -->
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Open+Sans:400italic,700italic,300,400,700">
 
    <link href="//cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/css/toastr.min.css" rel="stylesheet">
<!-- custom -->
<link rel="stylesheet" type="text/css" href="<?php echo $backend_assets; ?>custom/css/custom.css">
<style type="text/css">
  #extr-page #header #logo {
    margin-top: 22px;
    margin-left: 105px;
}
</style>
  </head>
  <body class="animated fadeInDown" data-base-url="<?php echo base_url(); ?>" data-success-msg="<?= lang('Success'); ?>" data-alert-msg="<?= lang('Alert'); ?>">
 <!-- #preloader -->
   <div class="preloader" id="preloader">
      <div class="spinner"></div>
   </div>
    <!-- #preloader -->
    <header id="header">

      <div id="logo-group">
        <span id="logo"><a href="<?php echo 'https://audiensservicepartner.com/'; ?>" ><img src="<?php echo $backend_assets; ?>img/logo.png" alt="<?php echo SITE_NAME; ?>"></a></span>
      </div>
    <?php  if($this->uri->segment('2') !='signup'): ?>
   <span id="extr-page-header-space"> <span class="hidden-mobile hiddex-xs"><?php echo lang('need_an_account'); ?></span> <a href="<?php echo base_url().'admin/signup'; ?>" class="btn btn-warning"><?php echo lang('create_account'); ?></a> </span> 
    <?php else: ?>
    <span id="extr-page-header-space"> <!-- <span class="hidden-mobile hiddex-xs">Already registered?</span> --> <a href="<?php echo base_url(); ?>" class="btn btn-warning"><?php echo lang('sign_in'); ?></a> </span>
    <?php endif; ?>
    </header>