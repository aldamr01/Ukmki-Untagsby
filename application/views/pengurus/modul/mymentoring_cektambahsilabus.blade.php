@extends('pengurus.main.template')
@include('pengurus.main.menu')

@section('title')
  Silabus Mentoring UKMKI
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
							<h4> <span class="text-semibold">E- Ukmki</span> - Mentoring </h4>
							<h6>v0.3.1 (BETA)</h6>
						</div>
					</div>

					<div class="breadcrumb-line">
						<ul class="breadcrumb">
							<li><a href="#"><i class="icon-home2 position-left"></i> My - Mentoring</a></li>
							<li><a href="#">Silabus Mentoring</a></li>
						</ul>
					</div>
				</div>
				<!-- /page header -->


				<!-- Content area -->
				<div class="content">
          <div class="panel panel-warning panel-bordered">
						<div class="panel-heading">
                <h6 class="panel-title">Silabus Mentoring &nbsp;<a href="#"><i class="icon-plus-circle2"></i></a>  </h6>
						</div>
						<div class="panel-body">
              <div class="col-md-4">
  							<div class="thumbnail">
  								<div class="caption text-center">
  									<h6 class="text-semibold no-margin">Silabus Mentoring 2016</h6>
  									<p class="text-muted mb-15 mt-5">Silahkan klik lihat silabus untuk melihat silabus mentoring pada tahun itu</p>

  									<a href="#" class="btn bg-teal"><i class="icon-eye position-left"></i> Lihat Silabus</a>
  								</div>
  							</div>
              </div>
						</div>
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
