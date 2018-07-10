@extends('pengurus.main.template')
@include('pengurus.main.menu')

@section('title')
  Homepage
@endsection

@section('corejs')
  <script type="text/javascript" src="<?=base_url('assets/js/pages/dashboard.js')?>"></script>
  <script type="text/javascript" src="<?=base_url('assets/js/plugins/loaders/pace.min.js')?>"></script>
  <script type="text/javascript" src="<?=base_url('assets/js/core/libraries/jquery.min.js')?>"></script>
  <script type="text/javascript" src="<?=base_url('assets/js/core/libraries/bootstrap.min.js')?>"></script>
  <script type="text/javascript" src="<?=base_url('assets/js/plugins/loaders/blockui.min.js')?>"></script>
  <script type="text/javascript" src="<?=base_url('assets/js/core/app.js')?>"></script>
@endsection

@section('content')
  <!--main content-->
  <div class="content-wrapper">

    <!-- Page header -->
    <div class="page-header page-header-default">
      <div class="page-header-content">
        <div class="page-title">
          <h4> <span class="text-semibold">E-Ki</span> - Home</h4>
          <h6>v0.3.1 (BETA)</h6>
        </div>
      </div>

      <div class="breadcrumb-line">
        <ul class="breadcrumb">
          <li><a href="#"><i class="icon-home2 position-left"></i> Home</a></li>
          <li><a href="#">Dashboard</a></li>
        </ul>
      </div>
    </div>
    <!-- /page header -->


    <!-- Content area -->
    <div class="content">
      <div class="panel panel-flat">
        <div class="panel-heading">
          <h5 class="panel-title">Dashboard Ketua Umum</h5>
        </div>

        <div class="panel-body">
          <div class="row">
            <div class="col-md-4">
              <div class="thumbnail">
                <div class="thumb">
                  <img src="<?=base_url('assets/images/placeholder.jpg')?>" alt="">
                  <div class="caption-overflow">
                    <span>
                  <a href="<?=base_url('Superuser/edit_kegiatan')?>" class="btn btn-info btn-sm">Edit</a>
                  <a href="#" class="btn btn-danger btn-sm">Remove</a>
                </span>
                  </div>
                </div>

                <div class="caption text-center">
                  <h6 class="text-semibold no-margin">10.000 Anak Yatim</h6>
                  <p class="text-muted mb-15 mt-5">Dissuade ecstatic and properly saw entirely sir why laughter endeavor</p>

                  <a href="#" class="btn bg-teal"><i class=" icon-chevron-right position-left"></i> Lihat Kegiatan</a>
                </div>
                <div class="panel-footer">
                  <p class="text-semibold no-margin btn-warning" align="center">ON-GOING</p>
                  <div class="media-annotation mt-5" align="center"><i class="icon-alarm position-center"></i> 15 Februari 2018</div>
                </div>
              </div>
            </div>
            <div class="col-md-4">
              <div class="thumbnail">
                <div class="thumb">
                  <img src="<?=base_url('assets/images/placeholder.jpg')?>" alt="">
                  <div class="caption-overflow">
                    <span>
                  <a href="<?=base_url('Superuser/edit_kegiatan')?>" class="btn btn-info btn-sm">Edit</a>
                  <a href="#" class="btn btn-danger btn-sm">Remove</a>
                </span>
                  </div>
                </div>

                <div class="caption text-center">
                  <h6 class="text-semibold no-margin">10.000 Anak Yatim</h6>
                  <p class="text-muted mb-15 mt-5">Dissuade ecstatic and properly saw entirely sir why laughter endeavor</p>

                  <a href="#" class="btn bg-teal"><i class=" icon-chevron-right position-left"></i> Lihat Kegiatan</a>
                </div>
                <div class="panel-footer">
                  <p class="text-semibold no-margin btn-warning" align="center">ON-GOING</p>
                  <div class="media-annotation mt-5" align="center"><i class="icon-alarm position-center"></i> 15 Februari 2018</div>
                </div>
              </div>
            </div>
            <div class="col-md-4">
              <div class="thumbnail">
                <div class="thumb">
                  <img src="<?=base_url('assets/images/placeholder.jpg')?>" alt="">
                  <div class="caption-overflow">
                    <span>
                  <a href="<?=base_url('Superuser/edit_kegiatan')?>" class="btn btn-info btn-sm">Edit</a>
                  <a href="#" class="btn btn-danger btn-sm">Remove</a>
                </span>
                  </div>
                </div>

                <div class="caption text-center">
                  <h6 class="text-semibold no-margin">10.000 Anak Yatim</h6>
                  <p class="text-muted mb-15 mt-5">Dissuade ecstatic and properly saw entirely sir why laughter endeavor</p>

                  <a href="#" class="btn bg-teal"><i class=" icon-chevron-right position-left"></i> Lihat Kegiatan</a>
                </div>
                <div class="panel-footer">
                  <p class="text-semibold no-margin btn-warning" align="center">ON-GOING</p>
                  <div class="media-annotation mt-5" align="center"><i class="icon-alarm position-center"></i> 15 Februari 2018</div>
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
