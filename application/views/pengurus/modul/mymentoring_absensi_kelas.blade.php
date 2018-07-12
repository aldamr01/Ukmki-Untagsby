@extends('pengurus.main.template')
@include('pengurus.main.menu')

@section('title')
  Absensi Mentoring
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
					    <h6 class="panel-title">Absensi Mentoring Materi {{$mentoring_absensi->MTGAD_MATERI}} , Kelas {{$mentoring_absensi->MTG_CLASS}}</h6>
						</div>
						<div class="panel-body">
              <table class="table table-stripped table-bordered table-responsive">
                <thead>
                  <tr>
                    <td>nama</td>
                    <td>Absensi</td>
                    <td>Aksi</td>
                  </tr>
                </thead>
                <tbody>
                  @foreach ($mentoring_peserta as $anggota)
                    {!!form_open('Superuser/mymentoring/changed_absensi')!!}
                      <tr>
                        <td>{{$anggota['PRS_NAME']}}</td>
                        <td>
                          <div class="form-group">
            								<label class="radio-inline">
            									<input type="radio" name="keterangan" class="styled" checked="checked" value="masuk">
            									Masuk
            								</label>
            								<label class="radio-inline">
            									<input type="radio" name="keterangan" class="styled" value="absent">
            									Absent
            								</label>
            							</div>
                        </td>
                        <input type="text" name="mtgp_id" value="{{$anggota['PRS_ID']}} " hidden="hidden">
                        <input type="text" name="mtgad_id" value="{{$mentoring_absensi->MTGAD_ID}} " hidden="hidden">
                        <td>
                          <button type="submit" name="kirim" class="btn btn-primary">Ubah</button>
                        </td>
                      </tr>
                    </form>
                  @endforeach
                </tbody>
              </table>
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
