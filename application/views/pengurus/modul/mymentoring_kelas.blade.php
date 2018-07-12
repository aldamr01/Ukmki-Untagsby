@extends('pengurus.main.template')
@include('pengurus.main.menu')

@section('title')
  Kelas Mentoring
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
							<li><a href="#">Kelas Mentoring</a></li>
						</ul>
					</div>
				</div>
				<!-- /page header -->


				<!-- Content area -->
				<div class="content">
          <div class="panel panel-info panel-bordered">
						<div class="panel-heading">
              @if($_check='l')
					      <h6 class="panel-title">Kelas Mentoring Ikhwan &nbsp;&nbsp;<a href="{{base_url('Superuser/mymentoring/buat_kelas')}}"><i class="icon-plus-circle2"></i></a></h6>
              @else
                <h6 class="panel-title">Kelas Mentoring Akhwat&nbsp;&nbsp;<a href="#"><i class="icon-plus-circle2"></i></a></h6>
              @endif

						</div>
						<div class="panel-body">
              @foreach ($result as $val)
                <div class="col-lg-3 col-md-6">
      						<div class="thumbnail no-padding">
      							<div class="thumb">
      								<img src="{{base_url('assets/images/placeholder.jpg')}}" alt="">
      								<div class="caption-overflow">
      									<span>
      										<a href="assets/images/placeholder.jpg" class="btn bg-success-400 btn-icon btn-xs" data-popup="lightbox"><i class="icon-search4"></i></a>
      									</span>
      								</div>
      							</div>
      				    	<div class="caption text-center">
      				    		<h6 class="text-semibold no-margin">{{$val['MTG_MENTOR']}}<small class="display-block">Kelas {{$val['MTG_CLASS']}}</small></h6>
                      <br>
{!!form_open('Superuser/mymentoring/detil_kelas')!!}
                      <input type="text" name="id" value="{{$val['MTG_ID']}}" hidden="hidden">
                      <button type="submit" name="kelas" class="btn btn-primary">Lihat Kelas</button>
</form>
      				    	</div>
      				    </div>
                </div>
              @endforeach
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
@endsection
