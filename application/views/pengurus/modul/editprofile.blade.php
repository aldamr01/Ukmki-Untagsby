@extends('pengurus.main.template')
@include('pengurus.main.menu')

@section('title')
  {{$__nama}}'s Profile
@endsection

@section('corejs')
  <script type="text/javascript" src="<?=base_url('assets/js/pages/dashboard.js')?>"></script>
  <script type="text/javascript" src="<?=base_url('assets/js/plugins/loaders/pace.min.js')?>"></script>
  <script type="text/javascript" src="<?=base_url('assets/js/core/libraries/jquery.min.js')?>"></script>
  <script type="text/javascript" src="<?=base_url('assets/js/core/libraries/bootstrap.min.js')?>"></script>
  <script type="text/javascript" src="<?=base_url('assets/js/plugins/loaders/blockui.min.js')?>"></script>
  <script type="text/javascript" src="<?=base_url('assets/js/core/app.js')?>"></script>
  <script type="text/javascript" src="{{base_url('assets/js/plugins/buttons/spin.min.js')}}"></script>
	<script type="text/javascript" src="{{base_url('assets/js/pages/components_buttons.js')}}"></script>
  <script type="text/javascript" src="{{base_url('assets/js/pages/form_validation.js')}}"></script>
	<script type="text/javascript" src="{{base_url('assets/js/plugins/forms/validation/validate.min.js')}}"></script>
@endsection

@section('content')
  <!--main content-->
  <div class="content-wrapper">

    <!-- Page header -->
    <div class="page-header page-header-default">
      <div class="page-header-content">
        <div class="page-title">
          <h4> <span class="text-semibold">E-Ukmki</span> - My Profile</h4>
          <h6>v0.3.1 (BETA)</h6>
        </div>
      </div>

      <div class="breadcrumb-line">
        <ul class="breadcrumb">
          <li><a href="#"><i class="icon-home2 position-left"></i> My Profile</a></li>
          <li><a href="#">Edit Profile</a></li>
        </ul>
      </div>
    </div>
    <!-- /page header -->

    <?php echo validation_errors(); ?>
    <!-- content wrapper -->
    <div class="">
      <!-- Content area -->
      <div class="panel panel-flat">
        <div class="panel-body">
          <div class="row">
            <div class="col-md-4 col-md-offset-4">
              <!-- User thumbnail -->
      					<div class="thumb thumb-rounded thumb-slide">
      						<img src="{{base_url('assets/images/placeholder.jpg')}}" alt="">
      						<div class="caption">
      							<span>
      								<a href="#" class="btn bg-success-400 btn-icon btn-xs" data-popup="lightbox"><i class="icon-plus2"></i></a>
      							</span>
      						</div>
      					</div>
      		    	<div class="caption text-center">
      		    		<h6 class="text-semibold no-margin">{{$__nama}}<small class="display-block">{{$_pos}}</small></h6>
      	    			<ul class="icons-list mt-15">
                  	<li><a href="#" data-popup="tooltip" title="Facebook"><i class="icon-facebook2"></i></a></li>
                  	<li><a href="#" data-popup="tooltip" title="Twitter"><i class="icon-twitter"></i></a></li>
                  	<li><a href="#" data-popup="tooltip" title="Instagram"><i class="icon-instagram"></i></a></li>
                	</ul>
      		    	</div><br><br>
{!!form_open('superuser/myprofile/edited_profile')!!}
                  <p align="center">
                    <button type="submit" class="btn btn-info btn-loading" data-loading-text="<i class='icon-spinner4 spinner'></i> <span>Updating...</span>"><i class="icon-spinner4"></i> <span>Update informasi</span></button>
                  </p>

      		    	<!-- /user thumbnail -->
            </div>
          </div>
          <br><br><br>
          <div class="row">
            <div class="col-md-12">
              <div class="panel panel-body">
                <div class="tabbable">
  								<ul class="nav nav-pills nav-justified">
  									<li class="active"><a href="#d_umum" data-toggle="tab">Informasi Umum <i class="icon-info3 position-right"></i></a></li>
  									<li><a href="#d_pribadi" data-toggle="tab">Data Pribadi <i class="icon-person position-right"></i></a></li>
  									<li><a href="#d_akun" data-toggle="tab">Informasi Akun <i class="icon-lock2 position-right"></i></a></li>
  								</ul>

  								<div class="tab-content">
  									<div class="tab-pane active" id="d_umum">
  										<div class="col-md-6">
                        <div class="form-group">
                          <label class="">Nama Lengkap</label>
                          <div class="input-group">
                            <span class="input-group-addon"><i class="icon-user"></i></span>
                            <input class="form-control" type="text" name="__nama" value="{{$__nama}}" required="required">
                          </div>
                        </div>
                        <div class="form-group">
                          <label class="">Tanggal Lahir</label>
                          <div class="input-group">
                            <span class="input-group-addon"><i class="icon-calendar"></i></span>
                            <input class="form-control" type="date" name="__tgl_lahir" value="{{$__tgl_lahir}}" required="required">
                          </div>
                        </div>
                        <div class="form-group">
                          <label class="">Tempat Lahir</label>
                          <div class="input-group">
                            <span class="input-group-addon"><i class="icon-location3"></i></span>
                            <input class="form-control" type="text" name="__ttl" value="{{$__tpt_lahir}}" required="required">
                          </div>
                        </div>
                        <div class="form-group">
                          <label class="">Alamat Sekarang</label>
                          <div class="input-group">
                            <span class="input-group-addon"><i class="icon-home4"></i></span>
                            <textarea class="form-control" type="text" name="__alamat" value="" required="required">{{$__alamat}}</textarea>
                          </div>
                        </div>
                      </div>
                      <div class="col-md-6">
                        <div class="form-group">
                          <label class="">jenis Kelamin</label>
                          <div class="input-group">
                            @if($_nama =='Laki-Laki')
                            <span class="input-group-addon"><i class="icon-man"></i></span>
                            @else
                              <span class="input-group-addon"><i class="icon-woman"></i></span>
                            @endif
                            <input class="form-control" type="text" name="" value="{{$__gender}}" readonly>
                          </div>
                        </div>
                        <div class="form-group">
                          <label class="">Depatermen</label>
                          <div class="input-group">
                            <span class="input-group-addon"><i class="icon-collaboration"></i></span>
                            <input class="form-control" type="text" name="__depatermen" value="Ukmki" required="readonly">
                          </div>
                        </div>
                        <div class="form-group">
                          <label class="">No hp</label>
                          <div class="input-group">
                            <span class="input-group-addon"><i class="icon-phone2"></i></span>
                            <input class="form-control" type="number" name="__hp" value="{{$__nohp}}" required="required">
                          </div>
                        </div>
                        <div class="form-group">
                          <label class="">Email</label>
                          <div class="input-group">
                            <span class="input-group-addon"><i class="icon-mail5"></i></span>
                            <input class="form-control" type="email" name="__email" value="{{$__email}}" required="required">
                          </div>
                        </div>
                      </div>
  									</div>

  									<div class="tab-pane" id="d_pribadi">
                      <div class="row">
                        <div class="col-md-4">
                          <div class="form-group">
                            <label class="">Asal SD</label>
                            <div class="input-group">
                              <span class="input-group-addon"><i class="icon-rating"></i></span>
                              <input class="form-control" type="text" name="__sd" value="{{$__sd}}" required="required">
                            </div>
                          </div>
                          <div class="form-group">
                            <label class="">Fakultas</label>
                            <div class="input-group">
                              <span class="input-group-addon"><i class="icon-pen6"></i></span>
                              <input class="form-control" type="text" name="__fakultas" value="{{$__fakultas}}" required="required">
                            </div>
                          </div>
                        </div>
                        <div class="col-md-4">
                          <div class="form-group">
                            <label class="">Asal SMP</label>
                            <div class="input-group">
                              <span class="input-group-addon"><i class="icon-rating2"></i></span>
                              <input class="form-control" type="text" name="__smp" value="{{$__smp}}" required="required">
                            </div>
                          </div>
                          <div class="form-group">
                            <label class="">Jurusan</label>
                            <div class="input-group">
                              <span class="input-group-addon"><i class="icon-pen6"></i></span>
                              <input class="form-control" type="text" name="__jurusan" value="{{$__jurusan}}" required="required">
                            </div>
                          </div>
                        </div>
                        <div class="col-md-4">
                          <div class="form-group">
                            <label class="">Asal SMA/SMK</label>
                            <div class="input-group">
                              <span class="input-group-addon"><i class="icon-rating3"></i></span>
                              <input class="form-control" type="text" name="__smk" value="{{$__sma}}" required="required">
                            </div>
                          </div>
                          <div class="form-group">
                            <label class="">Nbi</label>
                            <div class="input-group">
                              <span class="input-group-addon"><i class="icon-pushpin"></i></span>
                              <input class="form-control" type="text" name="__nbi" value="{{$__nbi}}" required="required">
                            </div>
                          </div>
                        </div>
                      </div>
                      <hr><h2 align="center">Tentang Anda</h2><hr>
                      <div class="row">
                        <div class="col-md-6">
                          <div class="form-group">
                            <label class="">Motto hidup</label>
                            <div class="input-group">
                              <span class="input-group-addon"><i class="icon-accessibility"></i></span>
                              <input class="form-control" type="text" name="__motto" value="{{$__motto}}" required="required">
                            </div>
                          </div>
                          <div class="form-group">
                            <label class="">Pengalaman</label>
                            <div class="input-group">
                              <span class="input-group-addon"><i class="icon-pushpin"></i></span>
                              <textarea class="form-control" name="__pengalaman" value="{{$__pengalaman}}" required="required"></textarea>
                            </div>
                          </div>
                        </div>
                        <div class="col-md-6">
                          <div class="form-group">
                            <label class="">Motivasi diri</label>
                            <div class="input-group">
                              <span class="input-group-addon"><i class="icon-accessibility"></i></span>
                              <input class="form-control" type="text" name="__motivasi" value="{{$__motivasi}}" required="required">
                            </div>
                          </div>
                          <div class="form-group">
                            <label class="">Kemampuan anda</label>
                            <div class="input-group">
                              <span class="input-group-addon"><i class="icon-pushpin"></i></span>
                              <textarea class="form-control" name="__skill" value="{{$__skill}}" required="required"></textarea>
                            </div>
                          </div>
                        </div>
                      </div>
  									</div>

  									<div class="tab-pane" id="d_akun">
                      <div class="row">
                        <div class="col-md-6">
                          <div class="form-group">
                            <label class="">User ID</label>
                            <div class="input-group">
                              <span class="input-group-addon"><i class="icon-accessibility"></i></span>
                              <input class="form-control" type="text" name="" value="{{$_id}}" disabled>
                            </div>
                          </div>
                          <div class="form-group">
                            <label class="">Username</label>
                            <div class="input-group">
                              <span class="input-group-addon"><i class="icon-accessibility"></i></span>
                              <input class="form-control" type="text" name="__username" value="{{$_nama}}" required="required">
                            </div>
                          </div>
                        </div>
                        <div class="col-md-6">
                          <div class="form-group">
                            <label class="">Password Account</label>
                            <div class="input-group">
                              <span class="input-group-addon"><i class="icon-accessibility"></i></span>
                              <input class="form-control" type="password" name="__password" value="{{$_password}}">
                            </div>
                          </div>
                          <div class="form-group">
                            <label class="">Kode Recovery</label>
                            <div class="input-group">
                              <span class="input-group-addon"><i class="icon-accessibility"></i></span>
                              <input class="form-control" type="text" name="" value="{{$_recovery}}" disabled>
                            </div>
                          </div>
                        </div>
                      </div>
                      <hr><h2 align="center">Tautan Sosial Media</h2>
                      <div class="row">
                        <div class="col-md-4">
                          <div class="form-group">
                            <label class="">Facebook</label>
                            <div class="input-group">
                              <span class="input-group-addon"><i class="icon-facebook"></i></span>
                              <input class="form-control" type="text" name="__facebook" value="{{$_nama}}">
                            </div>
                          </div>
                        </div>
                        <div class="col-md-4">
                          <div class="form-group">
                            <label class="">Instagram</label>
                            <div class="input-group">
                              <span class="input-group-addon"><i class="icon-instagram"></i></span>
                              <input class="form-control" type="text" name="__instagram" value="{{$_nama}}">
                            </div>
                          </div>
                        </div>
                        <div class="col-md-4">
                          <div class="form-group">
                            <label class="">Twitter</label>
                            <div class="input-group">
                              <span class="input-group-addon"><i class="icon-twitter"></i></span>
                              <input class="form-control" type="text" name="__twitter" value="{{$_nama}}" required="required">
                            </div>
                          </div>
                        </div>
                        </div>
                      </div>
  									</div>
</form>
  								</div>
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
@endsection
