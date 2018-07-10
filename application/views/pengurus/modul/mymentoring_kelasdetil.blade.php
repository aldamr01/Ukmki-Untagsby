@extends('pengurus.main.template')
@include('pengurus.main.menu')

@section('title')
  Info Mentoring kelas {{$_check}}
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
				<div class="page-header
        page-header-default">
					<div class="page-header-content">
						<div class="page-title">
							<h4> <span class="text-semibold">E- Ukmki</span> - Mentoring </h4>
							<h6>v0.3.1 (BETA)</h6>
						</div>
					</div>

					<div class="breadcrumb-line">
						<ul class="breadcrumb">
							<li><a href="#"><i class="icon-home2 position-left"></i> My - Mentoring</a></li>
							<li><a href="#">Kelas Mentoring</a></li>
						</ul>
					</div>
				</div>
				<!-- /page header -->

				<!-- Content area -->
				<div class="content">
          <div class="panel panel-info panel-bordered">
						<div class="panel-heading">
					    <h6 class="panel-title">Kelas Mentoring {{$_check}}</h6>
						</div>
						<div class="panel-body">
              <div class="row">
                <div class="col-md-4">
                  <!-- Accordion with right control button -->
      						<h6 class="content-group text-semibold">Peserta Mentoring Kelas {{$_check}} <small class="display-block">Bio Peserta</small></h6>

      						<div class="panel-group panel-group-control panel-group-control-right content-group-lg" id="accordion-control-right">
                    <!--repeat-->
      							<div class="panel panel-white">
      								<div class="panel-heading">
      									<h6 class="panel-title">
      										<a data-toggle="collapse" data-parent="#accordion-control-right" href="#accordion-control-right-group1">Accordion Item #1</a>
      									</h6>
      								</div>
      								<div id="accordion-control-right-group1" class="panel-collapse collapse in">
      									<div class="panel-body">
      										Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus terry richardson ad squid. 3 wolf moon officia aute, non cupidatat skateboard dolor brunch.
      									</div>
      								</div>
      							</div>
                    <!--repeat-->
      						</div>
      						<!-- /accordion with right control button -->
                </div>
                <div class="col-md-2">

                </div>
                <div class="col-md-4">
                  <!-- Accordion with different panel styling -->
    							<h6 class="content-group text-semibold">Silabus Mentoring<small class="display-block">Klik untuk melihat absensi</small></h6>

    							<div class="panel-group" id="accordion-styled">
                    <!--repeat-->
    								<div class="panel">
    									<div class="panel-heading bg-danger">
    										<h6 class="panel-title">
    											<a data-toggle="collapse" data-parent="#accordion-styled" href="#accordion-styled-group1">Accordion Item #1</a>
    										</h6>
    									</div>
    									<div id="accordion-styled-group1" class="panel-collapse collapse in">
    										<div class="panel-body">
    											Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus terry richardson ad squid. 3 wolf moon officia aute, non cupidatat skateboard dolor brunch.
    										</div>
                        <div class="panel-heading">
                          <a href="#" data-toggle="modal" data-target="#absensi_{{$_check}}"><i class="icon-file-pdf"></i>&nbsp;Absensi Kehadiran</a>
                        </div>
    									</div>
    								</div>
                    <!--repeat-->
    							</div>
    							<!-- /accordion with different panel styling -->
                </div>
              </div>
              <hr>
              <div class="row">
                <div class="col-md-12">
                  <!-- Accordion with different panel styling -->
    							<h6 class="content-group text-semibold">Galeri Mentoring<small class="display-block">tambah gambar</small></h6>

  							<div class="panel-group" id="accordion-styled">
                  <!--repeat-->
  								<div class="col-md-2">
                    <div class="thumbnail">
                      <a href="assets/images/placeholder.jpg" data-popup="lightbox">
                        <img src="assets/images/placeholder.jpg" alt="">
                      </a>
                    </div>
  								</div>
                  <!--repeat-->
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
    <!-- modal untuk pembayaran -->
		<div id="absensi_{{$_check}}" class="modal fade">
			<div class="modal-dialog">
				<div class="modal-content">
					<div class="modal-header">
						<button type="button" class="close" data-dismiss="modal">&times;</button>
						<h5 class="modal-title">Absensi Mentoring</h5>
					</div>

					<div class="modal-body">
						<h6 class="text-semibold">Tunggakan</h6>
						<p>
            <div class="form-group">
              <!--tempat tanggal tunggakan nya -->
              <div class="form-control">
                <input type="checkbox" name="" value="">
                &nbsp;Bulan Januari 2018
              </div>
            </div>
          </p>
					</div>

					<div class="modal-footer">
						<button type="button" class="btn btn-link" data-dismiss="modal">Close</button>
						<button type="button" class="btn btn-primary" data-dismiss="modal">Save changes</button>
					</div>
				</div>
			</div>
		</div>
		<!-- /basic modal -->
@endsection
