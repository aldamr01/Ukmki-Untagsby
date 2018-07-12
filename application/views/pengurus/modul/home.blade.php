@extends('pengurus.main.template')
@include('pengurus.main.menu')

@section('title')
  Homepage
@endsection

@section('corejs')
  <script type="text/javascript" src="<?=base_url('assets/js/pages/dashboard.js')?>"></script>
  <script type="text/javascript" src="<?=base_url('assets/js/plugins/loaders/pace.min.js')?>"></script>
  <script type="text/javascript" src="<?=base_url('assets/js/core/libraries/jquery.min.js')?>"></script>
  <script type="text/javascript" src="<?=base_url('assets/js/core/libraries/bootstrap.min.js')?>"></script>
  <script type="text/javascript" src="<?=base_url('assets/js/plugins/loaders/blockui.min.js')?>"></script>
  <script type="text/javascript" src="<?=base_url('assets/js/core/app.js')?>"></script>
@endsection

@section('content')
  <!--main content-->
  <div class="content-wrapper">

    <!-- Page header -->
    <div class="page-header page-header-default">
      <div class="page-header-content">
        <div class="page-title">
          <h4> <span class="text-semibold">E-Ki</span> - Home</h4>
          <h6>v0.3.1 (BETA)</h6>
        </div>
      </div>

      <div class="breadcrumb-line">
        <ul class="breadcrumb">
          <li><a href="#"><i class="icon-home2 position-left"></i> Home</a></li>
          <li><a href="#">Dashboard</a></li>
        </ul>
      </div>
    </div>
    <!-- /page header -->


    <!-- Content area -->
    <div class="content">
      <div class="panel panel-flat">
        <div class="panel-heading">
          <h5 class="panel-title">Dashboard {{$_pos}}</h5>
        </div>

        <div class="panel-body">
          Welcome to UKMKI - Management System
        </div>
      </div>
      <!-- /content area -->

    </div>
    <!-- /content wrapper -->

  </div>
  <!-- /main content -->
@endsection
