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
							<span class="label bg-primary">Coming-Soon</span>
							<div class="heading-elements">
								<ul class="icons-list">
									<li><a data-action="collapse"></a></li>
								</ul>
							</div>
						</div>

						<div class="panel-body">
							<div class="row">

								<div class="text-center">
                  <span class="label label-block label-default">Nama Kelas</span>
									<input style="padding-left:40%" type="text" class="form-control" placeholder="Masukan Nama Kegiatan Disini">
                  <br>
								</div>
								<div class="text-center">
                  <span class="label label-block label-default">Waktu Mentoring</span>
									<input style="padding-left:40%" type="time" class="form-control" placeholder="Masukan Waktu Kegiatan Disini">
                  <br>
								</div>
								<div class="text-center">
                  <span class="label label-block label-default">Hari Mentoring</span>
									<select class="form-control" name="">
                    <option value="">Senin</option>
                    <option value="">Selasa</option>
                    <option value="">Rabu</option>
                    <option value="">Kamis</option>
                    <option value="">Jumat</option>
                    <option value="">Sabtu</option>
                    <option value="">Ahad</option>
                  </select>
                  <br>
								</div>
								<div class="text-center">
                  <span class="label label-block label-default">Lokasi Mentoring</span>
									<input style="padding-left:40%" type="text" class="form-control" placeholder="Masukan Lokasi Kegiatan Disini">
                  <br>
								</div>

								<hr>
							</div>
							<div class="row">
								<h1 class="text-center">بِسْــــــــــــــــــمِ اللهِ الرَّحْمَنِ الرَّحِيْمِ</h1> <br>
								<p class="text-center">Masukan Isi Deskripsi Mentoring dibawah ini<p>
								<textarea class="form-control" placeholder="Masukan Isi dari kegiatan / Deskripsi Kegiatan disini !">

								</textarea>
								<table class="table table-stripped table-bordered">
									<thead>
										<h2 align="center">Susunan Kelas</h2>
										<hr>
									</thead>
									<tbody>
										<tr>
											<td width="30%">Pementor</td>
											<td width="10px">:</td>
											<td>
												<div class="form-group">
													<select class="form-control">
														<optgroup label="BEST PEMENTOR">
															<option value="AZ">Ustadz Iga Ariansyah, S.KOM., M.KOM., S.AG., ITIL.</option>
															<option value="CO">Kang Nurdin LC., MA.</option>
															<option value="ID">Bang ivan, LC.</option>
														</optgroup>
													</select>
												</div>
											</td>
										</tr>
										<tr>
											<td>Bendahara</td>
											<td width="10px">:</td>
											<td>
												<div class="form-group">
													<select class="form-control">
														<optgroup label="Mountain Time Zone">
															<option value="AZ">Ronaldo</option>
															<option value="">Aldion Amirrul</option>
														</optgroup>
													</select>
												</div>
											</td>
										</tr>
										<tr>
											<td>Peserta</td>
											<td width="10px">:</td>
											<td>
												<div class="form-group">
													<select multiple="multiple" class="select-search">
														<optgroup label="Mountain Time Zone">
															<option value="AZ">Arizona</option>
															<option value="CO">Colorado</option>
															<option value="ID">Idaho</option>
															<option value="WY">Wyoming</option>
														</optgroup>
													</select>
												</div>
											</td>
										</tr>

									</tbody>
								</table>
								<br>
								<h2 align="center">Informasi Tambahan</h2>
								<hr>
								<pre>
									<textarea name="name" class="form-control" rows="5" cols="80" placeholder="Masukan Informasi Tambahan disini!"></textarea>
								</pre><br>
								<!-- Basic datatable -->
								<div class="panel panel-flat">
									<div class="panel-heading">
										<h5 class="panel-title">File Arsip Kegiatan</h5>
										<div class="heading-elements">
											<ul class="icons-list">
												<li><a data-action="collapse"></a></li>
												<li><a data-action="reload"></a></li>
											</ul>
										</div>
									</div>

									<div class="panel-body">
										Silahkan download file arsip mengenai kegiatan ini di bawah ini :)<br>
										<button type="button" class="btn bg-brown btn-sm" data-toggle="modal" data-target="#modal_theme_custom">Upload File <i class="icon-file-plus position-right"></i></button>

									</div>

									<table class="table datatable-basic">
										<thead>
											<tr>
												<th>File Name</th>
												<th>Uploader</th>
												<th>Date Upload</th>
												<th class="text-center">Actions</th>
											</tr>
										</thead>
										<tbody>
											<tr>
												<td>Marth</td>
												<td><a href="#">Enright</a></td>
												<td>22 Jun 1972</td>
												<td class="text-center">
													<ul class="icons-list">
														<li class="dropdown">
															<a href="#" class="dropdown-toggle" data-toggle="dropdown">
													<i class="icon-menu9"></i>
												</a>

															<ul class="dropdown-menu dropdown-menu-right">
																<li><a href="#"><i class="icon-download"></i> Download</a></li>
																<li><a href="#"><i class="icon-trash"></i> Delete</a></li>
															</ul>
														</li>
													</ul>
												</td>
											</tr>
										</tbody>
									</table>
								</div>
								<!-- /basic datatable -->
							</div>
              <p align="center"> <button type="submit" class="btn btn-primary" name="button">Simpan</button> </p>
						</div>
					</div>
					<!-- /content area -->
				</div>
				<!-- /content wrapper -->
			</div>
			<!-- /page content -->
@endsection
