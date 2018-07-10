<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Limitless - Responsive Web Application Kit by Eugene Kopyov</title>

	<!-- Global stylesheets -->
	<link href="https://fonts.googleapis.com/css?family=Roboto:400,300,100,500,700,900" rel="stylesheet" type="text/css">
	<link href="https://fonts.googleapis.com/css?family=Lobster" rel="stylesheet">
	<link href="https://fonts.googleapis.com/css?family=Cabin" rel="stylesheet">
	<link href="<?php echo base_url('assets/css/icons/icomoon/styles.css') ?>" rel="stylesheet" type="text/css">
	<link href="<?php echo base_url('assets/css/bootstrap.css') ?>" rel="stylesheet" type="text/css">
	<link href="<?php echo base_url('assets/css/core.css" rel="stylesheet" type="text/css') ?>">
	<link href="<?php echo base_url('assets/css/components.css') ?>" rel="stylesheet" type="text/css">
	<link href="<?php echo base_url('assets/css/colors.css') ?>" rel="stylesheet" type="text/css">
	<link href="<?php echo base_url('assets/css/style.css') ?>" rel="stylesheet" type="text/css">
	<!-- /global stylesheets -->

	<!-- Core JS files -->
	<script type="text/javascript" src="<?php echo base_url('assets/js/plugins/loaders/pace.min.js') ?>"></script>
	<script type="text/javascript" src="<?php echo base_url('assets/js/core/libraries/jquery.min.js') ?>"></script>
	<script type="text/javascript" src="<?php echo base_url('assets/js/core/libraries/bootstrap.min.js') ?>"></script>
	<script type="text/javascript" src="<?php echo base_url('assets/js/plugins/loaders/blockui.min.js') ?>"></script>
	<!-- /core JS files -->

	<!-- Theme JS files -->
	<script type="text/javascript" src="<?php echo base_url('assets/js/core/libraries/jquery_ui/core.min.js') ?>"></script>
	<script type="text/javascript" src="<?php echo base_url('assets/js/plugins/forms/wizards/form_wizard/form.min.js') ?>"></script>
	<script type="text/javascript" src="<?php echo base_url('assets/js/plugins/forms/wizards/form_wizard/form_wizard.min.js') ?>"></script>
	<script type="text/javascript" src="<?php echo base_url('assets/js/plugins/forms/selects/select2.min.js') ?>"></script>
	<script type="text/javascript" src="<?php echo base_url('assets/js/plugins/forms/styling/uniform.min.js') ?>"></script>
	<script type="text/javascript" src="<?php echo base_url('assets/js/core/libraries/jasny_bootstrap.min.js') ?>"></script>
	<script type="text/javascript" src="<?php echo base_url('assets/js/plugins/forms/validation/validate.min.js') ?>"></script>
	<script type="text/javascript" src="<?php echo base_url('assets/js/plugins/notifications/sweet_alert.min.js') ?>"></script>
	<script type="text/javascript" src="<?php echo base_url('assets/js/core/libraries/jquery_ui/interactions.min.js') ?>"></script>
	<script type="text/javascript" src="<?php echo base_url('assets/js/plugins/notifications/jgrowl.min.js') ?>"></script>
<script type="text/javascript" src="<?php echo base_url('assets/js/plugins/ui/moment/moment.min.js') ?>"></script>
<script type="text/javascript" src="<?php echo base_url('assets/js/plugins/pickers/daterangepicker.js') ?>"></script>
<script type="text/javascript" src="<?php echo base_url('assets/js/plugins/pickers/anytime.min.js') ?>"></script>
<script type="text/javascript" src="<?php echo base_url('assets/js/plugins/pickers/pickadate/picker.js') ?>"></script>
<script type="text/javascript" src="<?php echo base_url('assets/js/plugins/pickers/pickadate/picker.date.js') ?>"></script>
<script type="text/javascript" src="<?php echo base_url('assets/js/plugins/pickers/pickadate/picker.time.js') ?>"></script>
<script type="text/javascript" src="<?php echo base_url('assets/js/plugins/pickers/pickadate/legacy.js') ?>"></script>


	<script type="text/javascript" src="<?php echo base_url('assets/js/core/app.js') ?>"></script>
	<script type="text/javascript" src="<?php echo base_url('assets/js/pages/wizard_form.js') ?>"></script>
	<script type="text/javascript" src="<?php echo base_url('assets/js/pages/form_select2.js') ?>"></script>
	<script type="text/javascript" src="<?php echo base_url('assets/js/pages/picker_date.js') ?>"></script>


	<!-- /theme JS files -->

</head>

<body>




	<!-- Page container -->
	<div class="page-container bg-regis">

		<!-- Page content -->
		<div class="page-content">
			<h2 align="center" class="judul-panel"><b style="color: whitesmoke;">Panel Registrasi Anggota UKMKI- Untag 1945</b></h2>
			<!-- Content area -->
			<div class="content">


			<div class="col-md-6 col-md-offset-3">
				<!-- Wizard with validation -->
				<div class="panel panel-white">
					<div class="panel-heading">
						<h6 align="center" class="panel-title"><b>Silahkan isi Beberapa Form Berikut</b></h6>
					</div>

					<form class="form-validation" enctype="multipart/form-data" method="post"  action="<?= base_url().'Registrasi/create' ;?>">
						<fieldset class="step" id="validation-step1">
							<h6 class="form-wizard-title text-semibold">
									<span class="form-wizard-count">1</span>
									Personal info
									<small class="display-block">Tell us a bit about yourself</small>
								</h6>

							<div class="row">
								<div class="col-md-6">
									<div class="form-group">
										<label>Nama Lengkap: <span class="text-danger">*</span></label>
										<input name="nama" type="text" class="form-control required" maxlength="60" placeholder="Abdul Aziz bin Fulan" />
									</div>
								</div>

								<div class="col-md-6">
									<div class="form-group">
										<label>Jenis Kelamin : <span class="text-danger">*</span></label>
											<select data-placeholder="Select a state..." class="select-icons" name="jenis_kelamin">
												<optgroup name="jenis_kelamin" label="Services">
													<option value="Laki-Laki" data-icon="man">Pria</option>
													<option value="Perempuan" data-icon="woman">Wanita</option>
												</optgroup>
											</select>
									</div>
								</div>
							</div>

							<div class="row">
								<div class="col-md-6">
									<div class="form-group">
										<label>Kota Tempat Lahir:</label>
										<input type="text" name="kota_t_lahir" class="form-control required" placeholder="Surabaya" >
									</div>
								</div>

								<div class="col-md-6">
									<div class="form-group">
										<label>Alamat Tinggal Sekarang: <span class="text-danger">*</span></label>
										<input type="text" name="alamat_tinggal" class="form-control required" placeholder="Jl. Surabaya no.27 , Kota Surabaya">
									</div>
								</div>
							</div>

							<div class="row">


								<div class="col-md-12">
									<label>Tanggal Lahir:</label>
									<div class="content-group-lg">
										<div class="input-group">
											<span class="input-group-addon"><i class="icon-calendar5"></i></span>
											<input name="tgl_lahir" type="text" class="form-control pickadate-accessibility" placeholder="Click here&hellip;">
										</div>
									</div>
								</div>
							</div>
						</fieldset>

						<fieldset class="step" id="validation-step2">
							<h6 class="form-wizard-title text-semibold">
									<span class="form-wizard-count">2</span>
									Education info
									<small class="display-block">Let us know about your degree</small>
								</h6>

							<div class="row">
								<div class="col-md-6">
									<div class="form-group">
										<label>NBI : <span class="text-danger">*</span></label>
										<input type="number" maxlength="10" name="nbi" placeholder="1461612345" class="form-control required">
									</div>
								</div>

								<div class="col-md-6">
									<div class="form-group">
										<label>Angkatan:</label>
										<select name="angkatan" data-placeholder="Pilih anda Angkatan tahun berapa ..." class="select">
		                                        <option></option>
		                                        <option value="2013">2013</option>
		                                        <option value="2014">2014</option>
		                                        <option value="2015">2015</option>
		                                        <option value="2016">2016</option>
																						<option value="2017">2017</option>
																						<option value="2018">2018</option>
		                                    </select>
									</div>
								</div>
							</div>

							<div class="row">
								<div class="col-md-6">
									<div class="form-group">
										<label>Email: <span class="text-danger">*</span></label>
										<input type="email" name="email" placeholder="sample@ukmki.org" class="form-control required">
									</div>
								</div>
									<div class="col-md-6">
										<div class="form-group">
											<label>No Telp.:</label>
											<input type="text" name="no_telp" placeholder="0813-3530-1234" class="form-control required">
										</div>
									</div>
								</div>

								<div class="row">
									<div class="col-md-12">
										<div class="form-group">
											<label>Pilih Fakultas & Jurusan: <span class="text-danger">*</span></label>
											<select name="fakjur" data-placeholder="Select position" class="select required">
												<option></option>
												<optgroup label="Fakultas Teknik">
													<option value="Teknik Mesin">Teknik Mesin</option>
													<option value="Teknik Arsitektur">Teknik Arsitektur</option>
													<option value="Teknik Elektro">Teknik Elektro</option>
													<option value="Teknik Sipil">Teknik Sipil</option>
													<option value="Teknik Industri">Teknik Industri</option>
													<option value="Teknik Informatika">Teknik Informatika</option>
												</optgroup>

												<optgroup label="Fakultas Ilmu Sosial & Politik">
													<option value="Administrasi Negara">Administrasi Negara</option>
													<option value="Administrasi Niaga">Administrasi Niaga</option>
													<option value="Ilmu Komunikasi">Ilmu Komunikasi</option>
												</optgroup>
												<optgroup label="Fakultas Ekonomi">
													<option value="Ekonomi Managemen">Ekonomi Managemen</option>
													<option value="Managemen Bisnis">Managemen Bisnis</option>
													<option value="Akutansi">Akutansi</option>
												</optgroup>
												<optgroup label="Fakultas Sastra">
													<option value="Sastra Inggris">Sastra Inggris</option>
													<option value="Sastra Jepang">Sastra Jepang</option>
												</optgroup>
												<optgroup label="Fakultas Psikologi">
													<option value="Psikologi">Psikologi</option>
												</optgroup>
											</select>
										</div>
								</div>
							</div>




						</fieldset>

						<fieldset class="step" id="validation-step3">
							<h6 class="form-wizard-title text-semibold">
									<span class="form-wizard-count">3</span>
									Additional Information
									<small class="display-block">a little bit information about yourself</small>
								</h6>

							<div class="row">
								<div class="col-md-6">
									<div class="form-group">
										<label>Keterampilan: <span class="text-danger">*</span></label>
										<input type="text" name="keterampilan" placeholder="ex: membaca,menulis,etc..." class="form-control required">
									</div>

									<div class="form-group">
										<label>Motto: <span class="text-danger">*</span></label>
										<input type="text" name="motto" placeholder="ex: Hidup itu singkat , maka pergunakanlah waktu sebaik mungkin" class="form-control required">
									</div>
									<div class="form-group">
										<label>Motifasi Gabung UKMKI: <span class="text-danger">*</span></label>
										<input type="text" name="motivasi" placeholder="ex: Ingin belajar tentang islam" class="form-control required">
									</div>
								</div>

								<div class="col-md-6">
									<div class="form-group">
										<label>Pengalaman Organisasi :</label>
										<textarea name="pengalaman_org" rows="4" cols="4" placeholder="Osis, Remaja Masjid, UKMKI, dll...." class="form-control"></textarea>
									</div>

									<div class="form-group">
										<label class="display-block">Foto Close up:</label>
										<input name="foto" type="file" class="file-styled">
										<span class="help-block">Accepted formats: pdf, doc. Max file size 2Mb</span>
									</div>
								</div>
							</div>
						</fieldset>

						<fieldset class="step" id="validation-step4">
							<h6 class="form-wizard-title text-semibold">
									<span class="form-wizard-count">4</span>
									Your Education
									<small class="display-block">the last one</small>
								</h6>

							<div class="row">
								<div class="col-md-6">
									<div class="form-group">
										<label>Asal SD: <span class="text-danger">*</span></label>
										<input type="text" name="sd" value="" placeholder="SDN surabaya 1" class="form-control required">
									</div>
								</div>
								<div class="col-md-6">
									<div class="form-group">
										<label>Asal SMP: <span class="text-danger">*</span></label>
										<input type="text" name="smp" value="" placeholder="SMP surabaya 1" class="form-control required">
									</div>
								</div>
								<div class="col-md-12">
									<div class="form-group">
										<label>Asal SMA/SMK: <span class="text-danger">*</span></label>
										<input type="text" name="smk" value="" placeholder="SMA surabaya 1" class="form-control required">
									</div>
								</div>
							</div>


						</fieldset>

						<div class="form-wizard-actions">
							<button class="btn btn-default" id="validation-back" type="reset">Back</button>
							<input  class="btn btn-info" type="submit" value="Kirim">
						</div>
					</form>
				</div>
				<!-- /wizard with validation -->
			</div>






				<!-- Footer -->
				<div class="footer text-muted">
					&copy; 2018. <a href="https://www.ukmki-untagsby.org">Unit Kerohanian Islam Untag - WebApp</a> by <a href="https://www.aldion-amirrul.com" target="_blank">Ald.amr</a>
				</div>
				<!-- /footer -->

			</div>
			<!-- /content area -->

		</div>
		<!-- /main content -->

	</div>
	<!-- /page content -->

	</div>
	<!-- /page container -->

</body>

</html>
