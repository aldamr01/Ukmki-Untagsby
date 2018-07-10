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
				<div class="page-header page-header-default">
					<div class="page-header-content">
						<div class="page-title">
							<h4> <span class="text-semibold">E- Ukmki</span> - Dashboard</h4>
							<h6>v0.3.1 (BETA)</h6>
						</div>
					</div>

					<div class="breadcrumb-line">
						<ul class="breadcrumb">
							<li><a href="#"><i class="icon-home2 position-left"></i> My - Activities</a></li>
							<li><a href="#">Agenda Kegiatan</a></li>
						</ul>
					</div>
				</div>
				<!-- /page header -->


				<!-- Content area -->
				<div class="content">
					<div class="panel panel-flat">
						<div class="panel-heading">
							<h5 class="panel-title">Buat Kelas Mentoring</h5>
							<div class="heading-elements">
								<ul class="icons-list">
									<li><a data-action="collapse"></a></li>
								</ul>
							</div>
						</div>
{!!form_open('Superuser/mymentoring/created_kelas')!!}
						<div class="panel-body">
              <h1 class="text-center">بِسْــــــــــــــــــمِ اللهِ الرَّحْمَنِ الرَّحِيْمِ</h1> <br>
              <p class="text-center">Masukan Isi Deskripsi Mentoring dibawah ini<p>
							<div class="row">

								<div class="text-center">
                  <span class="label label-block label-default">Nama Kelas</span>
									<input style="padding-left:40%" type="text" class="form-control" placeholder="Masukan Nama Kegiatan Disini" name="__nama">
                  <br>
								</div>
								<div class="text-center">
                  <span class="label label-block label-default">Waktu Mentoring</span>
									<input style="padding-left:40%" type="time" class="form-control" placeholder="Masukan Waktu Kegiatan Disini" name="__waktu">
                  <br>
								</div>
								<div class="text-center">
                  <span class="label label-block label-default">Hari Mentoring</span>
									<select class="form-control" name="__hari">
                    <option value="Senin">Senin</option>
                    <option value="Selasa">Selasa</option>
                    <option value="Rabu">Rabu</option>
                    <option value="Kamis">Kamis</option>
                    <option value="Jumat">Jumat</option>
                    <option value="Sabtu">Sabtu</option>
                    <option value="Ahad">Ahad</option>
                  </select>
                  <br>
								</div>

								<hr>
							</div>
							<div class="row">
								<table class="table table-stripped table-bordered">
									<tbody>
										<tr>
											<td width="30%">Pementor</td>
											<td width="10px">:</td>
											<td>
												<div class="form-group">
													<select class="form-control" name="__pementor">
														<optgroup label="BEST PEMENTOR">
															<option value="Ustadz Iga Ariansyah, S.KOM., M.KOM., S.AG., ITIL.">Ustadz Iga Ariansyah, S.KOM., M.KOM., S.AG., ITIL.</option>
															<option value="Kang Nurdin LC., MA.">Kang Nurdin LC., MA.</option>
															<option value="Bang ivan, LC.">Bang ivan, LC.</option>
														</optgroup>
													</select>
												</div>
											</td>
										</tr>
									</tbody>
								</table>
                <input type="text" name="__periode" value="{{date("Y")}}" hidden="hidden">
                <input type="text" name="__status" value="Active" hidden="hidden">
								</div>
								<!-- /basic datatable -->
							</div>
              <p align="center"> <button type="submit" class="btn btn-primary" name="button">Buat</button> </p>
						</div>
					</div>
</form>
					<!-- /content area -->
				</div>
				<!-- /content wrapper -->
			</div>
			<!-- /page content -->
@endsection
