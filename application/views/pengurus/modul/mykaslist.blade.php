@extends('pengurus.main.template')
@include('pengurus.main.menu')

@section('title')
  kas anggota
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
							<h4> <span class="text-semibold">E- Ukmki</span> - Kas </h4>
							<h6>v0.3.1 (BETA)</h6>
						</div>
					</div>

					<div class="breadcrumb-line">
						<ul class="breadcrumb">
							<li><a href="#"><i class="icon-home2 position-left"></i> My - Kas</a></li>
							<li><a href="#">Kas anggota</a></li>
						</ul>
					</div>
				</div>
				<!-- /page header -->


				<!-- Content area -->
				<div class="content">
          <!-- Basic datatable -->
					<div class="panel panel-flat">
						<div class="panel-heading">
							<h5 class="panel-title">Basic datatable</h5>
							<div class="heading-elements">
								<ul class="icons-list">
			                		<li><a data-action="collapse"></a></li>
			                		<li><a data-action="reload"></a></li>
			                		<li><a data-action="close"></a></li>
			                	</ul>
		                	</div>
						</div>

						<div class="panel-body">
							The <code>DataTables</code> is a highly flexible tool, based upon the foundations of progressive enhancement, and will add advanced interaction controls to any HTML table. DataTables has most features enabled by default, so all you need to do to use it with your own tables is to call the construction function. Searching, ordering, paging etc goodness will be immediately added to the table, as shown in this example. <strong>Datatables support all available table styling.</strong>
						</div>

						<table class="table datatable-basic">
							<thead>
								<tr>
									<th>First Name</th>
									<th>Last Name</th>
									<th>Job Title</th>
									<th>DOB</th>
									<th>Status</th>
									<th class="text-center">Actions</th>
								</tr>
							</thead>
							<tbody>
								<tr>
									<td>Marth</td>
									<td><a href="#">Enright</a></td>
									<td>Traffic Court Referee</td>
									<td>22 Jun 1972</td>
									<td><span class="label label-success">Active</span></td>
									<td class="text-center">
										<ul class="icons-list">
											<li class="dropdown">
												<a href="#" class="dropdown-toggle" data-toggle="dropdown">
													<i class="icon-menu9"></i>
												</a>

                        <ul class="dropdown-menu dropdown-menu-right">
                          <!--bila belum lunas maka ada pilihan nya -->
                          <li><a href="#" data-toggle="modal" data-target="#riwayat_{{$_nama}}"><i class="icon-file-pdf"></i>Riwayat Pembayaran</a></li>
                          @if($_check =="lunas")
                            <li><a data-toggle="modal" data-target="#bayar_{{$_nama}}"> <i class="icon-play3"></i>Bayar</a></li>
                          @endif
                        </ul>
											</li>
										</ul>
									</td>
								</tr>
								<tr>
									<td>Jackelyn</td>
									<td>Weible</td>
									<td><a href="#">Airline Transport Pilot</a></td>
									<td>3 Oct 1981</td>
									<td><span class="label label-default">Inactive</span></td>
									<td class="text-center">
										<ul class="icons-list">
											<li class="dropdown">
												<a href="#" class="dropdown-toggle" data-toggle="dropdown">
													<i class="icon-menu9"></i>
												</a>

                        <ul class="dropdown-menu dropdown-menu-right">
                          <!--bila belum lunas maka ada pilihan nya -->
                          <li><a href="#" data-toggle="modal" data-target="#riwayat_{{$_nama}}"><i  class="icon-file-pdf"></i>Riwayat Pembayaran</a></li>
                          @if($_check =="lunas")
                            <li><a data-toggle="modal" data-target="#bayar_{{$_nama}}"> <i class="icon-play3"></i>Bayar</a></li>
                          @endif
                        </ul>
											</li>
										</ul>
									</td>
								</tr>
							</tbody>
						</table>
					</div>
					<!-- /basic datatable -->
					<!-- /content area -->
				</div>
				<!-- /content wrapper -->

			</div>
			<!-- /main content -->
		</div>
		<!-- /page container -->
    <!-- modal untuk pembayaran -->
		<div id="bayar_{{$_nama}}" class="modal fade">
			<div class="modal-dialog">
				<div class="modal-content">
					<div class="modal-header">
						<button type="button" class="close" data-dismiss="modal">&times;</button>
						<h5 class="modal-title">Panel Pembayaran Kas</h5>
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
    <!-- modal untuk riwayat -->
		<div id="riwayat_{{$_nama}}" class="modal fade">
			<div class="modal-dialog">
				<div class="modal-content">
					<div class="modal-header">
						<button type="button" class="close" data-dismiss="modal">&times;</button>
						<h5 class="modal-title">Riwayat Pembayaran {{$_nama}}</h5>
					</div>

					<div class="modal-body">
						<h6 class="text-semibold">Pembayaran kas</h6>
						<p>
            <ol>
              <li>12 maret 2018 - - - - 21:00 PM - - - - (gilang)</li>
              <li>12 maret 2018 - - - - 21:00 PM - - - - (gilang)</li>
              <li>12 maret 2018 - - - - 21:00 PM - - - - (gilang)</li>
            </ol>
          </p>
					</div>

					<div class="modal-footer">
						<button type="button" class="btn btn-link" data-dismiss="modal">Close</button>
					</div>
				</div>
			</div>
		</div>
		<!-- /basic modal -->
@endsection
