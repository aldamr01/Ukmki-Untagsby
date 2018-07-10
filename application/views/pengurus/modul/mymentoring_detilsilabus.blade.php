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
                <h6 class="panel-title">Silabus Mentoring 2016</h6>
						</div>
						<div class="panel-body">
              <button type="button" class="btn bg-warning-400 btn-labeled btn-rounded" data-toggle="modal" data-target="#buat_daftar"><b><i class="icon-plus2"></i></b> Tambah Daftar</button>
              <div class="row">
                <h3 align="center">Daftar Silabus Mentoring</h3>
                <hr>
              </div>
              <div class="col-md-4 col-md-offset-4">
                <tr>
                  <td>1.</td>
                  <td>&nbsp;&nbsp;&nbsp;</td>
                  <td>
                    <div class="label label-striped border-left-violet label-icon">
                      Syahadatain &nbsp; &nbsp;
                      <a href="#" class=""><i class="icon-close2"></i></a>
                    </div>

                  </td>
                </tr>
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


    <!-- modal untuk riwayat -->
		<div id="buat_daftar" class="modal fade">
			<div class="modal-dialog">
				<div class="modal-content">
					<div class="modal-header">
						<button type="button" class="close" data-dismiss="modal">&times;</button>
						<h5 class="modal-title">Tambah Materi Silabus</h5>
					</div>

					<div class="modal-body">
            <div class="row">
              <div class="form-group">
                <label class="control-label col-lg-2">Nama materi</label>
                <div class="col-lg-10">
                  <div class="input-group">
                    <span class="input-group-addon"><i class="icon-git-pull-request"></i></span>
                    <input type="text" class="form-control" placeholder=".input-group">
                  </div>
                </div>
              </div>
            </div>
            <div class="row">
              <br>
            </div>
            <div class="row">
              <div class="form-group">
                <label class="control-label col-lg-2">No Urut</label>
                <div class="col-lg-10">
                  <div class="input-group">
                    <span class="input-group-addon"><i class="icon-git-pull-request"></i></span>
                    <input type="number" class="form-control" placeholder=".input-group">
                  </div>
                </div>
              </div>
            </div>
					</div>

					<div class="modal-footer">
						<button type="button" class="btn btn-primary" data-dismiss="modal">Simpan</button>
					</div>
				</div>
			</div>
		</div>
		<!-- /basic modal -->
@endsection
