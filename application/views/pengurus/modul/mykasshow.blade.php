@extends('pengurus.main.template')
@include('pengurus.main.menu')

@section('title')
  kas saya
@endsection

@section('corejs')

  <script type="text/javascript" src="{{base_url('assets/js/plugins/loaders/pace.min.js')}}"></script>
  <script type="text/javascript" src="{{base_url('assets/js/core/libraries/jquery.min.js')}}"></script>
  <script type="text/javascript" src="{{base_url('assets/js/core/libraries/bootstrap.min.js')}}"></script>
  <script type="text/javascript" src="{{base_url('assets/js/plugins/loaders/blockui.min.js')}}"></script>

  <script type="text/javascript" src="{{base_url('assets/js/core/app.js')}}"></script>
  <script type="text/javascript" src="{{base_url('assets/js/pages/datatables_basic.js')}}"></script>
  <script type="text/javascript" src="{{base_url('assets/js/plugins/tables/datatables/datatables.min.js')}}"></script>
  <script type="text/javascript" src="{{base_url('assets/js/plugins/forms/selects/select2.min.js')}}"></script>
@endsection

@section('content')
  <!-- Main content -->
			<div class="content-wrapper">
				<!-- Page header -->
				<div class="page-header page-header-default">
					<div class="page-header-content">
						<div class="page-title">
							<h4> <span class="text-semibold">E- Ukmki</span> - Kas </h4>
							<h6>v0.3.1 (BETA)</h6>
						</div>
					</div>

					<div class="breadcrumb-line">
						<ul class="breadcrumb">
							<li><a href="#"><i class="icon-home2 position-left"></i> My - Kas</a></li>
							<li><a href="#">Kas Saya</a></li>
						</ul>
					</div>
				</div>
				<!-- /page header -->


				<!-- Content area -->
				<div class="content">
          <div class="panel panel-info panel-bordered">
						<div class="panel-heading">
							<h6 class="panel-title">Info kas saya</h6>
						</div>

						<div class="panel-body">
              @if($_check !="lunas")
							Anda memiliki beberapa tunggakan kas pada :
              <br><br>
              <ul>
                <li>Bulan januari 2018</li>
              </ul>
              <br><br>
              <code>Silahkan hubungi bendahara untuk membayar kas</code>
            @else
              Anda tidak memiliki tunggakan kas
            @endif
						</div>
					</div>
					<!-- /content area -->
				</div>
				<!-- /content wrapper -->

			</div>
			<!-- /main content -->
		</div>
		<!-- /page container -->
@endsection
