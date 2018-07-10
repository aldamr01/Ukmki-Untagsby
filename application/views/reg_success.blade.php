<!DOCTYPE html>
<?php
  defined('BASEPATH')  OR exit('No direct script access allowed');
  header( "refresh:5; url=https://www.ukmki-untagsby.org" );
  if (!isset($nickname)) {
    $nickname="";
  }else{

  }
   ?>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>Registrasi anda berhasil !</title>
    <!-- Global stylesheets -->
  	<link href="https://fonts.googleapis.com/css?family=Roboto:400,300,100,500,700,900" rel="stylesheet" type="text/css">
    <link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.2.0/css/font-awesome.min.css" rel="stylesheet" media="screen" />
  	<link href="https://fonts.googleapis.com/css?family=Lobster"rel="stylesheet">
  	<link href="https://fonts.googleapis.com/css?family=Cabin" rel="stylesheet">
  	<link href="<?php echo base_url('assets/css/icons/icomoon/styles.css') ?>" rel="stylesheet" type="text/css" media="screen">
  	<link href="<?php echo base_url('assets/css/bootstrap.css') ?>" rel="stylesheet" type="text/css">
  	<link href="<?php echo base_url('assets/css/core.css" rel="stylesheet" type="text/css') ?>">
  	<link href="<?php echo base_url('assets/css/components.css') ?>" rel="stylesheet" type="text/css">
  	<link href="<?php echo base_url('assets/css/colors.css') ?>" rel="stylesheet" type="text/css">
  	<link href="<?php echo base_url(); ?>assets/css/style.css" rel="stylesheet" type="text/css">
  	<!-- /global stylesheets -->

    <!-- Core JS files -->
  	<script type="text/javascript" src="<?php echo base_url('assets/js/plugins/loaders/pace.min.js') ?>"></script>
  	<script type="text/javascript" src="<?php echo base_url('assets/js/core/libraries/jquery.min.js') ?>"></script>
  	<script type="text/javascript" src="<?php echo base_url('assets/js/core/libraries/bootstrap.min.js') ?>"></script>
  	<script type="text/javascript" src="<?php echo base_url('assets/js/plugins/loaders/blockui.min.js') ?>"></script>
  	<!-- /core JS files -->

  </head>
  <body >
    <div class="container">
      <div class="wrapper">
        <div class="col-md-6 col-md-offset-3">
          <img class="img img-responsive img-centered" src="<?= base_url('assets/images/checkmark2.png') ?>" alt="">
          <h2 class="text-bolded" align="center"><b>REGISTRATION SUCCESS</b></h2>
          <div class="panel panel-heading bg-success">
           <p style="text-align:center">Selamat <?=$nickname;?> , anda telah berhasil melakukan registrasi keanggotaan Unit Kerohanian Islam Untag Surabaya, Sering - sering main ke seketarian kami ya di Masjid Baitul Fikri UNTAG lt.2 agar bisa lebih akrab lagi. Terimakasih !</p>
          </div>
          <br>
          <div class="col-md-6 col-md-offset-3">
            <!-- progress button -->
  					<div class="progress-button">
  						<p align="center">
                <a href="<?= base_url()  ?>"><span style="margin-top:10px">Halaman Utama</span></a>
              </p>
  					</div><!-- /progress-button -->
          </div>

        </div>
      </div>
    </div>
  </body>
</html>
