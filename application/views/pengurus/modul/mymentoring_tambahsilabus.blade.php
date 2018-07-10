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
							<li><a href="#">Tambah Silabus Mentoring</a></li>
						</ul>
					</div>
				</div>
				<!-- /page header -->


				<!-- Content area -->
				<div class="content">
          <div class="panel panel-warning panel-bordered">
						<div class="panel-heading">
                <h6 class="panel-title">Tambah Silabus Mentoring </h6>
						</div>
						<div class="panel-body">
              <div class="form-group">
								<label class="control-label col-lg-2">Nama Silabus</label>
								<div class="col-lg-10">
									<div class="input-group">
										<span class="input-group-addon"><i class="icon-git-pull-request"></i></span>
										<input type="text" class="form-control" placeholder=".input-group">
									</div>
								</div>
							</div>
              <br>
              <div class="form-group">
								<label class="control-label col-lg-2">Periode Silabus</label>
								<div class="col-lg-10">
									<div class="input-group">
										<span class="input-group-addon"><i class="icon-git-pull-request"></i></span>
										<select class="form-control" name="periode">
                      <option value="">2016</option>
                      <option value="">2016</option>
                      <option value="">2016</option>
                      <option value="">2016</option>
                    </select>
									</div>
								</div>
							</div>
              <br><br><br>
              <p align="center">
                <button type="submit" name="button" class="btn btn-warning">Buat Data</button>
              </p>
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
