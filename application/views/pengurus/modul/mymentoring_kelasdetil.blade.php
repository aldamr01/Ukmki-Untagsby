@extends('pengurus.main.template')
@include('pengurus.main.menu')

@section('title')
  Info Mentoring kelas
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
					    <h6 class="panel-title">Kelas Mentoring {{$kelas_detil->MTG_CLASS}}</h6>
						</div>
						<div class="panel-body">
              <div class="row">
                <div class="col-md-4">
                  <!-- Accordion with right control button -->
      						<h6 class="content-group text-semibold">Peserta Mentoring Kelas {{$kelas_detil->MTG_CLASS}}
                    <a href="#"><i class="icon-plus-circle2" data-toggle="modal" data-target="#input_peserta_mentoring"></i></a>
                    <small class="display-block">Bio Peserta</small>
                  </h6>

      						<div class="panel-group panel-group-control panel-group-control-right content-group-lg" id="accordion-control-right">
                    <!--repeat-->
                    @foreach ($kelas_peserta as $val)
                      <div class="panel panel-white">
        								<div class="panel-heading">
        									<h6 class="panel-title">
        										<a data-toggle="collapse" data-parent="#accordion-control-right" href="#accordion-control-right-group{{$val['PRS_ID']}}">{{$val['PRS_NAME']}}</a>
        									</h6>
        								</div>
        								<div id="accordion-control-right-group{{$val['PRS_ID']}}" class="panel-collapse collapse in">
        									<div class="panel-body">
        										Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus terry richardson ad squid. 3 wolf moon officia aute, non cupidatat skateboard dolor brunch.
        									</div>
        								</div>
        							</div>
                    @endforeach
                    <!--repeat-->
      						</div>
      						<!-- /accordion with right control button -->
                </div>
                <div class="col-md-2">

                </div>
                <div class="col-md-4">
                  <!-- Accordion with different panel styling -->
    							<h6 class="content-group text-semibold">Absensi Mentoring
                    <a href="#"><i class="icon-plus-circle2" data-toggle="modal" data-target="#buat_absensi_mentoring"></i></a>
                    <small class="display-block">Klik untuk melihat absensi</small>
                  </h6>

    							<div class="panel-group" id="accordion-styled">
                    <!--repeat-->
                    @foreach ($kelas_absensi as $absensi)
                      <div class="panel">
      									<div class="panel-heading bg-danger">
      										<h6 class="panel-title">
      											<a data-toggle="collapse" data-parent="#accordion-styled" href="#accordion-styled-group1">{{$absensi['MTGAD_MATERI']}}</a>
      										</h6>
      									</div>
      									<div id="accordion-styled-group1" class="panel-collapse collapse in">
      										<div class="panel-body">
      											Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus terry richardson ad squid. 3 wolf moon officia aute, non cupidatat skateboard dolor brunch.
      										</div>
                          <div class="panel-heading">
                            {!!form_open('Superuser/mymentoring/absensi_kelas')!!}
                              <input type="text" hidden="hidden" name="id" value="{{$absensi['MTG_ID']}}">
                              <button class="btn btn success icon-file-pdf"></button>&nbsp;Absensi Kehadiran</a>
                            </form>
                          </div>
      									</div>
      								</div>
                    @endforeach
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

    <!--modal input peserta-->
		<div id="input_peserta_mentoring" class="modal fade">
			<div class="modal-dialog">
				<div class="modal-content">
					<div class="modal-header">
						<button type="button" class="close" data-dismiss="modal">&times;</button>
						<h5 class="modal-title">Peserta Mentoring </h5>
					</div>
          {!!form_open('Superuser/mymentoring/added_peserta')!!}
  					<div class="modal-body">
              @if ($_gender!="Perempuan")
                <h6 class="text-semibold">Anggota </h6>
    						<p>
                <div class="form-group">
                  <label for="">Nama Anggota</label>
                  <select class="form-control" name="anggota_id">
                    @foreach ($anggota_ikhwan as $ikhwan)
                      <option value="{{$ikhwan['PRS_ID']}}">{{$ikhwan['PRS_NAME']}}</option>
                    @endforeach
                  </select>
                  <input type="text" hidden="hidden" name="kelas" value="{{$kelas_detil->MTG_ID}}">
                </div>
              @endif
            </p>
  					</div>

    				<div class="modal-footer">
    					<button type="button" class="btn btn-link" data-dismiss="modal">Close</button>
    					<button type="submit" class="btn btn-primary" >Save changes</button>
    				</div>
          </form>
				</div>
			</div>
		</div>
		<!-- /basic modal peserta -->

    <!--modal buat absensi-->
		<div id="buat_absensi_mentoring" class="modal fade">
			<div class="modal-dialog">
				<div class="modal-content">
					<div class="modal-header">
						<button type="button" class="close" data-dismiss="modal">&times;</button>
						<h5 class="modal-title">Buat Absensi Mentoring </h5>
					</div>
          {!!form_open('Superuser/mymentoring/created_absensi_mentoring')!!}
  					<div class="modal-body">
						<p>
              <div class="form-group">
                <label for="">materi Mentoring</label>
                <input type="text" name="materi" value="" class="form-control">
                <input type="text" hidden="hidden" name="kelas" value="{{$kelas_detil->MTG_ID}}">
              </div>
            </p>
  					</div>

    				<div class="modal-footer">
    					<button type="button" class="btn btn-link" data-dismiss="modal">Close</button>
    					<button type="submit" class="btn btn-primary" >Save changes</button>
    				</div>
          </form>
				</div>
			</div>
		</div>
		<!-- /basic modal absensi -->
@endsection
