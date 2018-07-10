<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Limitless - Responsive Web Application Kit by Eugene Kopyov</title>

	<!-- Global stylesheets -->
	<link href="https://fonts.googleapis.com/css?family=Roboto:400,300,100,500,700,900" rel="stylesheet" type="text/css">
	<link href="assets/css/icons/icomoon/styles.css" rel="stylesheet" type="text/css">
	<link href="assets/css/bootstrap.css" rel="stylesheet" type="text/css">
	<link href="assets/css/core.css" rel="stylesheet" type="text/css">
	<link href="assets/css/components.css" rel="stylesheet" type="text/css">
	<link href="assets/css/colors.css" rel="stylesheet" type="text/css">
	<!-- /global stylesheets -->

	<!-- Core JS files -->
	<script type="text/javascript" src="assets/js/plugins/loaders/pace.min.js"></script>
	<script type="text/javascript" src="assets/js/core/libraries/jquery.min.js"></script>
	<script type="text/javascript" src="assets/js/core/libraries/bootstrap.min.js"></script>
	<script type="text/javascript" src="assets/js/plugins/loaders/blockui.min.js"></script>
	<!-- /core JS files -->


	<!-- Theme JS files -->
	<script type="text/javascript" src="assets/js/plugins/uploaders/fileinput/plugins/purify.min.js"></script>
	<script type="text/javascript" src="assets/js/plugins/uploaders/fileinput/plugins/sortable.min.js"></script>
	<script type="text/javascript" src="assets/js/plugins/uploaders/fileinput/fileinput.min.js"></script>
	<script type="text/javascript" src="assets/js/core/libraries/jquery_ui/interactions.min.js"></script>
	<script type="text/javascript" src="assets/js/plugins/forms/selects/select2.min.js"></script>


	<script type="text/javascript" src="assets/js/core/app.js"></script>
	<script type="text/javascript" src="assets/js/pages/form_select2.js"></script>
	<script type="text/javascript" src="assets/js/pages/uploader_bootstrap.js"></script>
	<!-- /theme JS files -->


</head>

<body>

	


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
							<h5 class="panel-title">Kegiatan 10.000 Anak Yatim</h5>
							<span class="label bg-warning">Status Kegiatan</span>
							<div class="form-group">
										<select class="select-fixed-single">
											<optgroup label="Pilih Status Kegiatan">
												<option value="AZ">On-Going</option>
												<option value="CO">Coming-Soon</option>
												<option value="ID">Already-Done</option>
												<option value="WY">Canceled</option>
											</optgroup>
										</select>
									</div>
							<div class="heading-elements">
								<ul class="icons-list">
									<li><a data-action="collapse"></a></li>
								</ul>
							</div>
						</div>

						<div class="panel-body">
							<div class="row">
								<div class="col-lg-12">
									<div class="thumb">
										<img class="img img-responsive" src="assets/images/cover.jpg" alt="">
										<div class="caption-overflow">
											<span>
											<input type="file" class="file-input" data-show-caption="false" data-show-upload="false">
										</span>
										</div>
									</div>
								</div>
							</div><br>
							<div class="row">

								<div class="text-center">
									<input style="padding-left:40%" type="text" class="form-control" placeholder="Masukan Nama Kegiatan Disini">
									<span class="label label-block label-danger">Nama Kegiatan</span>
								</div>
								<div class="media-annotation mt-5" align="center"><i class="icon-calendar position-center"></i> 15 Februari 2018 &nbsp;&nbsp;&nbsp; <i class="icon-user position-center"></i>Aldion Amirrul E. (Kaderisasi)</div>
								<hr>
							</div>
							<div class="row">
								<h1 class="text-center">بِسْــــــــــــــــــمِ اللهِ الرَّحْمَنِ الرَّحِيْمِ</h1> <br>
								<textarea class="form-control" placeholder="Masukan Isi dari kegiatan / Deskripsi Kegiatan disini !">

								</textarea>
								<table class="table table-stripped table-bordered">
									<thead>
										<h2 align="center">Susunan Kepanitiaan</h2>
										<hr>
									</thead>
									<tbody>
										<tr>
											<td width="30%">Ketua Pelaksana</td>
											<td width="10px">:</td>
											<td>
												<div class="form-group">
													<select class="select-search">
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
										<tr>
											<td>Bendahara</td>
											<td width="10px">:</td>
											<td>
												<div class="form-group">
													<select class="select-search">
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
										<tr>
											<td>Seketaris</td>
											<td width="10px">:</td>
											<td>
												<div class="form-group">
													<select class="select-search">
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
										<tr>
											<td>Sie Acara</td>
											<td width="10px">:</td>
											<td>
												<div class="form-group">
													<select data-placeholder="Pilih Anggota" multiple="multiple" class="select">
														<option></option>
														<optgroup label="Pilih Anggota">
															<option value="AZ">Arizona</option>
															<option value="CO">Colorado</option>
															<option value="ID">Idaho</option>
															<option value="WY">Wyoming</option>
														</optgroup>
													</select>
												</div>
											</td>
										</tr>
										<tr>
											<td>Sie Perlengkapan</td>
											<td width="10px">:</td>
											<td>
												<div class="form-group">
													<select data-placeholder="Pilih Anggota" multiple="multiple" class="select">
														<option></option>
														<optgroup label="Pilih Anggota">
															<option value="AZ">Arizona</option>
															<option value="CO">Colorado</option>
															<option value="ID">Idaho</option>
															<option value="WY">Wyoming</option>
														</optgroup>
													</select>
												</div>
											</td>
										</tr>
										<tr>
											<td>Sie Humas</td>
											<td width="10px">:</td>
											<td>
												<div class="form-group">
													<select data-placeholder="Pilih Anggota" multiple="multiple" class="select">
														<option></option>
														<optgroup label="Pilih Anggota">
															<option value="AZ">Arizona</option>
															<option value="CO">Colorado</option>
															<option value="ID">Idaho</option>
															<option value="WY">Wyoming</option>
														</optgroup>
													</select>
												</div>
											</td>
										</tr>
										<tr>
											<td>Sie Konsumsi</td>
											<td width="10px">:</td>
											<td>
												<div class="form-group">
													<select data-placeholder="Pilih Anggota" multiple="multiple" class="select">
														<option></option>
														<optgroup label="Pilih Anggota">
															<option value="AZ">Arizona</option>
															<option value="CO">Colorado</option>
															<option value="ID">Idaho</option>
															<option value="WY">Wyoming</option>
														</optgroup>
													</select>
												</div>
											</td>
										</tr>
										<tr>
											<td>Sie Pubdekdok</td>
											<td width="10px">:</td>
											<td>
												<div class="form-group">
													<select data-placeholder="Pilih Anggota" multiple="multiple" class="select">
														<option></option>
														<optgroup label="Pilih Anggota">
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

						</div>
					</div>
					<!-- /content area -->

				</div>
				<!-- /content wrapper -->

			</div>
			<!-- /page content -->

		</div>
		<!-- /page container -->

		<!-- Custom header color -->
		<div id="modal_theme_custom" class="modal fade">
			<div class="modal-dialog">
				<div class="modal-content">
					<div class="modal-header bg-brown">
						<button type="button" class="close" data-dismiss="modal">&times;</button>
						<h6 class="modal-title">Upload File</h6>
					</div>

					<div class="modal-body">
						<h6 class="text-semibold">Upload File Disini:</h6>
						<div class="form-group">
							<div class="col-lg-12">
								<input type="file" class="file-input" multiple="multiple">
							</div>
						</div>
					</div>
					<hr><br><br>

					<div class="modal-footer">
						<button type="button" class="btn bg-default" data-dismiss="modal">Close</button>
						<button type="submit" class="btn bg-brown">Upload !</button>
					</div>
				</div>
			</div>
		</div>
		<!-- /custom header color -->
</body>

</html>
